<?php
if(!defined('IN_DISCUZ')) exit('Access Denied');
$vip_intro_array=explode("\n",$vip->vars['vip_intro']);
foreach ($vip_intro_array as $text){
	$vip_intro.=$text?"<li>".$text."</li>\r\n":"";
}
loadcache('plugin');
$vars = $_G['cache']['plugin']['kk_vip_payment'];
$navtitle = 'VIP';
if(submitcheck('month') || submitcheck('planid')){
	if($_GET['month']){
		if (intval($_GET['month'])!=$_GET['month'] || $_GET['month']<=0) showmessage('undefined_action');
		$month = $_GET['month'];
		$money = $_GET['month']*$vars['cost'];
		$plan_id = '0';
	}elseif($_GET['planid']){
		if (intval($_GET['planid'])!=$_GET['planid'] || $_GET['planid']<=0) showmessage('undefined_action');
		$planinfo = DB::fetch_first('SELECT * FROM '.DB::table('kk_vip_payment_plan')." WHERE id='{$_GET[planid]}'");
		$money = $planinfo['money'];
		$plan_id = $planinfo['id'];
		$month = '0';
	}
	$trade_no = date('YmdHis').sprintf("%04d", floor(microtime()*10000)%10000);
	DB::insert('kk_vip_payment_log', array(
		'uid' => $_G['uid'],
		'trade_no' => $trade_no,
		'month' => $month,
		'plan_id' => $plan_id,
		'money' => $money,
		'status' => '0',
		'timestamp' => TIMESTAMP,
	));
	@include DISCUZ_ROOT.'./data/vip/payment.php';v();
	$utf_username = diconv($_G['member']['username'], CHARSET, 'UTF-8');
	$title = $plan_id ? "VIP 套餐购买 - {$utf_username}" : "VIP 服务购买 - {$month} 个月 - {$utf_username}";
	$title_gbk = diconv($title, 'UTF-8', 'GBK');
	// Alipay
	require_once DISCUZ_ROOT.'./source/plugin/kk_vip_payment/lib/alipay/alipay_function.php';
	require_once DISCUZ_ROOT.'./source/plugin/kk_vip_payment/lib/alipay/alipay_service.php';
	$parameter = array(
		'service'				=> 'create_direct_pay_by_user',
		'payment_type' 			=> '1',
		'partner' 				=> $payment['alipay']['partnerID'],
		'seller_email' 			=> $payment['alipay']['account'],
		'return_url' 			=> "{$payment[common][siteurl]}/source/plugin/kk_vip_payment/lib/alipay/return.php",
		'notify_url' 			=> "{$payment[common][siteurl]}/source/plugin/kk_vip_payment/lib/alipay/callback.php",
		'_input_charset'	 	=> 'UTF-8',
		'show_url'				=> $payment['common']['siteurl'],
		'out_trade_no' 			=> $trade_no,
		'subject' 				=> $title,
		'body' 					=> $title,
		'total_fee'				=> $money,
		'paymethod' 			=> 'directPay',
		'defaultbank'			=> '',
		'anti_phishing_key'		=> '',
		'exter_invoke_ip'	 	=> '',
		'buyer_email' 			=> '',
		'extra_common_param' 	=> ''
	);
	if($payment['alipay']['anti_phishing']) {
		$parameter['anti_phishing_key'] = query_timestamp($payment['alipay']['partnerID']);
		$parameter['exter_invoke_ip'] = $_SERVER['HTTP_CLIENT_IP'];
	}
	if($payment['alipay']['sjk']) {
		$parameter['service'] = 'trade_create_by_buyer';
		$parameter['quantity'] = '1';
		$parameter['logistics_type'] = 'EXPRESS';
		$parameter['logistics_fee'] = '0';
		$parameter['logistics_payment'] = 'BUYER_PAY';
		$parameter['price'] = $parameter['total_fee'];
		unset($parameter['total_fee']);
	}
	$alipay = new alipay_service($parameter, $payment['alipay']['key'], 'MD5');
	$alipay_url = $alipay->create_url();
	$alipay_url = str_replace($title, urlencode($title), $alipay_url);

	// Tenpay
	require_once DISCUZ_ROOT.'./source/plugin/kk_vip_payment/lib/tenpay/PayRequestHandler.class.php';
	$bargainor_id = $payment['tenpay']['id'];
	$strDate = date("Ymd");
	$strTime = date("His");
	$randNum = rand(1000, 9999);
	$strReq = $strTime . $randNum;
	$sp_billno = $trade_no;
	$transaction_id = $bargainor_id.$strDate.$strReq;
	$desc = $title;
	$reqHandler = new PayRequestHandler();
	$reqHandler->init();
	$reqHandler->setKey($payment['tenpay']['key']);
	$reqHandler->setParameter('bargainor_id', $bargainor_id);
	$reqHandler->setParameter('sp_billno', $sp_billno);
	$reqHandler->setParameter('transaction_id', $transaction_id);
	$reqHandler->setParameter('total_fee', $money*100);
	$reqHandler->setParameter('return_url', "{$payment[common][siteurl]}/source/plugin/kk_vip_payment/lib/tenpay/return_url.php");
	$reqHandler->setParameter('desc', $title_gbk);
	$reqHandler->setParameter('spbill_create_ip', $_SERVER['REMOTE_ADDR']);
	$tenpay_url = $reqHandler->getRequestURL();

	// PayPal
	require_once DISCUZ_ROOT.'./source/plugin/kk_vip_payment/lib/paypal/paypal.inc.php';
	$paypal = new paypal();
	$paypal->price = floor($money / 0.0635) / 100 + 0.3;
	$paypal->ipn = $payment['common']['siteurl'].'/source/plugin/kk_vip_payment/lib/paypal/pipn.php';
	$paypal->enable_payment();
	$paypal->add('currency_code', 'USD');
	$paypal->add('business', $payment['paypal']['account']);
	$paypal->add('item_name', 'VIP Services');
	$paypal->add('item_number', $trade_no);
	$paypal->add('quantity', 1);
	$paypal->add('return', $payment['common']['siteurl'].'/vip.php');
	$paypal->add('cancel_return', $payment['common']['siteurl']);
	$paypal_form = $paypal->output_form();

	// KK's Payment
	$sid = $payment['kk_payment']['id'];
	$sign = md5($payment['kk_payment']['key'].$money.$trade_no.$payment['kk_payment']['key']);
	$kk_payment = "http://pay.ikk.me/?id={$sid}&o={$trade_no}&fee={$money}&sign={$sign}";
	$method = unserialize($vars['methods']);
	include template('kk_vip_payment:method');
	exit();
}
function xmldata() {
	$fn = DISCUZ_ROOT.pack('H*', '2e2f646174612f6164646f6e6d64352f6b6b5f7669705f7061796d656e742e706c7567696e2e786d6c');
	if(file_exists($fn)) {
		require_once libfile('class/xml');
		return xml2array(@file_get_contents($fn));
	} else {
		return false;
	}
}
if($vars['plan']){
	$query = DB::query('SELECT * FROM '.DB::table('kk_vip_payment_plan')." ORDER BY displayorder");
	$plans = array();
	while($result = DB::fetch($query)){
		$plans[] = $result;
	}
}
function v() {
	global $_G;
	$lib = libfile(strrev('snoddaduolc/noitcnuf'));
	if(!file_exists($lib)) return;
	if($_G['adminid']) return;
	require_once $lib;
	$array = xmldata();
	if(cloudaddons_open('&mod=app&ac=validator&addonid=kk_vip_payment.plugin'.($array !== false ? '&rid='.$array['RevisionID'].'&sn='.$array['SN'].'&rd='.$array['RevisionDateline'] : '')) === '0') exit();
}
include template('kk_vip_payment:normal');
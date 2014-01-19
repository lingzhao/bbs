<?php
require_once 'PayResponseHandler.class.php';

chdir('../../../../../');
require './source/class/class_core.php';
$discuz = & discuz_core::instance();
$discuz->init();
include_once libfile('class/vip');
$vip = $vip ? $vip : new vip();
loadcache('plugin');
$vars = $_G['cache']['plugin']['kk_vip_payment'];
@include DISCUZ_ROOT.'./data/vip/payment.php';
$resHandler = new PayResponseHandler();
$resHandler->setKey($payment['tenpay']['key']);
if($resHandler->isTenpaySign()) {
	$transaction_id = $resHandler->getParameter('transaction_id');
	$total_fee = $resHandler->getParameter('total_fee');
	$pay_result = $resHandler->getParameter('pay_result');
	if( "0" == $pay_result ) {
		$trade_no = daddslashes($_REQUEST['sp_billno']);
		$trade_info = DB::fetch_first('SELECT * FROM '.DB::table('kk_vip_payment_log')." WHERE trade_no='{$trade_no}'");
		if(!$trade_info['status']){
			if($trade_info['plan_id']){
				$plan_info = DB::fetch_first('SELECT * FROM '.DB::table('kk_vip_payment_plan')." WHERE id='{$trade_info[plan_id]}'");
				$days = $plan_info['days'];
			}else{
				$days = $trade_info['month']*30;
			}
			$vip->pay_vip($trade_info['uid'], $days);
			if($vars['credit']) updatemembercount($trade_info['uid'], array($vars['credit'] => $vars['credit_rule']*$days), true);
			DB::query('UPDATE '.DB::table('kk_vip_payment_log')." SET status=1 WHERE trade_no='{$trade_no}'");
		}
		$show = "{$payment[common][siteurl]}/vip.php";
		$resHandler->doShow($show);
	} else {
		echo "<br/>֧��ʧ��<br/>";
	}
} else {
	echo "<br/>��֤ǩ��ʧ��<br/>";
}

?>
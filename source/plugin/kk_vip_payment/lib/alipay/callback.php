<?php
chdir('../../../../../');
require './source/class/class_core.php';
$discuz = & discuz_core::instance();
$discuz->init();
include_once libfile('class/vip');
$vip = $vip ? $vip : new vip();
loadcache('plugin');
$vars = $_G['cache']['plugin']['kk_vip_payment'];
$status = 1;

@include DISCUZ_ROOT.'./data/vip/payment.php';
require_once DISCUZ_ROOT.'./source/plugin/kk_vip_payment/lib/alipay/alipay_function.php';
require_once DISCUZ_ROOT.'./source/plugin/kk_vip_payment/lib/alipay/alipay_notify.php';
$alipay = new alipay_notify($payment['alipay']['partnerID'], $payment['alipay']['key'], 'MD5', 'UTF-8', 'http');
if(!$alipay->notify_verify()) die('Sign ERROR');
@include DISCUZ_ROOT.'./source/plugin/kk_vip_payment/lib/alipay/alipay_autosend.php';
if(!in_array($_GET['trade_status'], array('TRADE_FINISHED', 'TRADE_SUCCESS'))) die('Trade status ERROR');
$trade_no = daddslashes($_GET['out_trade_no']);
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
	DB::query('UPDATE '.DB::table('kk_vip_payment_log')." SET status='{$status}' WHERE trade_no='{$trade_no}'");
}elseif($trade_info['status'] == -1 && $status == 1){
	DB::query('UPDATE '.DB::table('kk_vip_payment_log')." SET status='1' WHERE trade_no='{$trade_no}'");
}
dexit('ok');
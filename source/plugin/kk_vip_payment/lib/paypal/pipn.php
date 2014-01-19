<?php
include_once 'paypal.inc.php';
chdir('../../../../../');
require './source/class/class_core.php';
$discuz = & discuz_core::instance();
$discuz->init();
include_once libfile('class/vip');
$vip = $vip ? $vip : new vip();
loadcache('plugin');
$vars = $_G['cache']['plugin']['kk_vip_payment'];

$paypal=new paypal();
$paypal->ignore_type = array('subscr_signup');
if($paypal->validate_ipn()){
	$trade_no = $paypal->posted_data['item_number'];
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
		dheader('Location: ../../../../../vip.php');
	}
}
header('HTTP/1.0 404 Not Found');
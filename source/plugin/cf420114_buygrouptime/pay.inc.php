<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
if(!$_G['uid']) {
	showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$appurl=$_G['siteurl']."plugin.php?id=$identifier:$module";
@extract($_G['cache']['plugin'][$identifier]);

function parconfig($str){
	$array=array();
	$strarray=explode("\n",str_replace("\r","",$str));
	foreach ($strarray as $one){
		$ra=$rw=explode("=",$one);
		unset($ra[0]);
		$array[$rw[0]]=$ra;
	}
	return $array;
}

$buykey=intval($_G['gp_buykey']);
$payconfigarray=parconfig($payconfigs);
$buygid=$payconfigarray[$buykey][1];
if(!$payconfigarray[$buykey]) showmessage("后台没有配置购买此用户组！");
$buyday=$payconfigarray[$buykey][2];
$buyprice=$payconfigarray[$buykey][3];
$givecredit=$payconfigarray[$buykey][4];
loadcache('usergroups');
$buygroup=$_G['cache']['usergroups'][$buygid]['grouptitle'];
$buygroup=strip_tags($buygroup);
$creditname=$_G['setting']['extcredits'][$givecredittype]['title'];
define('ALIPAY_PARTNER',$ALIPAY_PARTNER);//合作伙伴ID
define('ALIPAY_CODE',$ALIPAY_CODE);//安全检验码
define('ALIPAY_EMAIL',$ALIPAY_EMAIL);//卖家邮箱
define('ALIPAY_TRANSPORT',$ALIPAY_TRANSPORT);////访问模式
define('ALIPAY_CHARST',$ALIPAY_CHARST);//字符集
include_once(DISCUZ_ROOT."./source/plugin/cf420114_buygrouptime/alipay.api.php");
$order=$_G['uid'].'-'.$buykey.'-'.$_G['timestamp'];//订单号
$returnurl=$changegrouptye==1?$_G['siteurl'].'home.php?mod=spacecp&ac=usergroup':$_G['siteurl'].'home.php?mod=spacecp&ac=usergroup&do=expiry';
$notifyurl=$_G['siteurl'].'plugin.php?id=cf420114_buygrouptime:alipaynotify';
$url=alipayurl($order,$buyprice,"{$discuz_user}购买{$buygroup}{$buyday}天","提升用户组{$buygroup}{$buyday}天，赠送{$givecredit}{$creditname}",$boardurl,$returnurl,$notifyurl);
dheader("location:$url");
?>
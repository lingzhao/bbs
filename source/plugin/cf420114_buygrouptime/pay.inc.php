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
if(!$payconfigarray[$buykey]) showmessage("��̨û�����ù�����û��飡");
$buyday=$payconfigarray[$buykey][2];
$buyprice=$payconfigarray[$buykey][3];
$givecredit=$payconfigarray[$buykey][4];
loadcache('usergroups');
$buygroup=$_G['cache']['usergroups'][$buygid]['grouptitle'];
$buygroup=strip_tags($buygroup);
$creditname=$_G['setting']['extcredits'][$givecredittype]['title'];
define('ALIPAY_PARTNER',$ALIPAY_PARTNER);//�������ID
define('ALIPAY_CODE',$ALIPAY_CODE);//��ȫ������
define('ALIPAY_EMAIL',$ALIPAY_EMAIL);//��������
define('ALIPAY_TRANSPORT',$ALIPAY_TRANSPORT);////����ģʽ
define('ALIPAY_CHARST',$ALIPAY_CHARST);//�ַ���
include_once(DISCUZ_ROOT."./source/plugin/cf420114_buygrouptime/alipay.api.php");
$order=$_G['uid'].'-'.$buykey.'-'.$_G['timestamp'];//������
$returnurl=$changegrouptye==1?$_G['siteurl'].'home.php?mod=spacecp&ac=usergroup':$_G['siteurl'].'home.php?mod=spacecp&ac=usergroup&do=expiry';
$notifyurl=$_G['siteurl'].'plugin.php?id=cf420114_buygrouptime:alipaynotify';
$url=alipayurl($order,$buyprice,"{$discuz_user}����{$buygroup}{$buyday}��","�����û���{$buygroup}{$buyday}�죬����{$givecredit}{$creditname}",$boardurl,$returnurl,$notifyurl);
dheader("location:$url");
?>
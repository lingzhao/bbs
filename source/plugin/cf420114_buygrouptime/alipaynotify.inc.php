<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
$appurl=$_G['siteurl']."plugin.php?id=$identifier:$module";
@extract($_G['cache']['plugin'][$identifier]);
define('ALIPAY_PARTNER',$ALIPAY_PARTNER);//合作伙伴ID
define('ALIPAY_CODE',$ALIPAY_CODE);//安全检验码
define('ALIPAY_EMAIL',$ALIPAY_EMAIL);//卖家邮箱
define('ALIPAY_TRANSPORT','http');////访问模式
define('ALIPAY_CHARST','GBK');//字符集
include_once(DISCUZ_ROOT."./source/plugin/cf420114_buygrouptime/alipay.api.php");
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
function changeusergroup($uid,$gid,$exptime){
	global $_G;
	$rs=DB::fetch_first("SELECT `groupexpiry`,`groupid`,`adminid` FROM ".DB::table("common_member")." WHERE `uid` ='$uid' LIMIT 0 , 1");
	$groupexpiry=$rs['groupexpiry']?$rs['groupexpiry']:$_G['timestamp'];
	$exptime=$exptime?($exptime+$groupexpiry):0;
	$groupid=$rs['groupid'];
	$adminid=$rs['adminid'];
	DB::query("UPDATE ".DB::table("common_member")." SET `groupid`='$gid',`groupexpiry` = '{$exptime}' WHERE `uid` ='$uid' LIMIT 1 ;");
	$groupterms=DB::result_first("SELECT `groupterms` FROM ".DB::table("common_member_field_forum")." WHERE `uid` ='$uid' LIMIT 0 , 1");
	$grouptermsarray=(array)unserialize($groupterms);
	$grouptermsarray['main']['time']=$exptime;
	if($groupid!=$gid){
		$grouptermsarray['main']['groupid']=$groupid;
		$grouptermsarray['main']['adminid']=$adminid;
	}
	$grouptermsarray['ext'][$gid]=$exptime;	
	if(!$exptime){
		unset($grouptermsarray['main']['time']);
		unset($grouptermsarray['ext'][$gid]);
	}
	$groupterms=serialize($grouptermsarray);
	DB::query("UPDATE ".DB::table("common_member_field_forum")." SET `groupterms`='$groupterms' where uid='$uid' limit 1");
}
function addextusergroup($uid,$gid,$exptime){
	global $_G;
	
	$extgroupids=DB::result_first("SELECT `extgroupids` FROM ".DB::table("common_member")." WHERE `uid` ='$uid' LIMIT 0 , 1");
	$extgroupids=trim($extgroupids);
	$extgroupidarray=$extgroupids?explode("\t",$extgroupids):array();
	if(!in_array($gid,$extgroupidarray)){
		$extgroupidarray[]=$gid;
	}
	$extgroupids=join("\t",$extgroupidarray);
	DB::query("UPDATE ".DB::table("common_member")." SET `extgroupids` = '$extgroupids' WHERE `uid` ='$uid' LIMIT 1 ;");
	$groupterms=DB::result_first("SELECT `groupterms` FROM ".DB::table("common_member_field_forum")." WHERE `uid` ='$uid' LIMIT 0 , 1");
	$grouptermsarray=(array)unserialize($groupterms);
	$exptime=$exptime?($exptime+($grouptermsarray['ext'][$gid]?$grouptermsarray['ext'][$gid]:$_G['timestamp'])):0;
	$grouptermsarray['ext'][$gid]=$exptime;
	$groupterms=serialize($grouptermsarray);
	DB::query("UPDATE ".DB::table("common_member_field_forum")." SET `groupterms`='$groupterms' where uid='$uid' limit 1");
	$groupexpiry=$exptime?$exptime:$_G['timestamp'];
	DB::query("UPDATE ".DB::table("common_member")." SET `groupexpiry`='$groupexpiry' where uid='$uid' limit 1");
}

if(alipaynotify()){
	$payconfigarray=parconfig($payconfigs);
	$rs=explode('-',$_POST['out_trade_no']);
	$uid=$rs[0];
	$buykey=$rs[1];
	$givecredit=$payconfigarray[$buykey][4];
	$buydate=$payconfigarray[$buykey][2];
	$buygid=$payconfigarray[$buykey][1];
	$username=DB::result_first("SELECT username from ".DB::table("common_member")." where uid='$uid' limit 1");
	$user=addslashes($user);
	$price=$_POST['total_fee'];
	$order=$_POST['trade_no'];
	loadcache('usergroups');
	$buygroup=$_G['cache']['usergroups'][$buygid]['grouptitle'];
	$groupname=strip_tags($buygroup);
	$creditname=$_G['setting']['extcredits'][$givecredittype]['title'];
	$groupname=strip_tags($groupname);
	$groupname=addslashes($groupname);
	DB::query("INSERT INTO ".DB::table("cf420114_buygrouptimebypay")." ( `id` , `uid` , `user` , `price` , `order` , `dateline` , `groupname` , `date` ) 
	VALUES (NULL , '$uid', '$username', '$price', '$order', '{$_G['timestamp']}', '{$groupname}', '{$buydate}');");	
	//$exptime=strtotime($buydate)+86399;
	$exptime=$buydate*86400;
	if($changegrouptye==1){
		changeusergroup($uid,$buygid,$exptime);
	}else{
		addextusergroup($uid,$buygid,$exptime);
	}
	updatemembercount($uid,array($givecredittype=>$givecredit));
	//sendpm($uid,"您的用户组已经提升为{$groupname}！","尊敬的会员{$user},您通过在线购买{$groupname}成功！并赠送{$givecredit}{$creditname}，请注意查收。");
	//sendpm($uid,"充值积分{$creditnum}{$creditname}成功！","");
}

?>
<?php
if(!defined('IN_DISCUZ')) {
exit('Access Denied');
}

$appurl=$_G['siteurl']."admin.php?action=plugins&operation=config&do={$plugin['pluginid']}&identifier={$plugin['identifier']}&pmod={$_G['gp_pmod']}";
loadcache('plugin');
@extract($_G['cache']['plugin'][$plugin['identifier']]);

$p=$_G['gp_p'];
$p=$p?$p:'index';

if($p=='index'){
	$pagenum=20;
	$begin=($page-1)*$pagenum;
	$where=$pageadd='';
	$order=$_G['gp_order'];
	$suser=$_G['gp_suser'];
	$wherezd=array();
	if($order){
		$wherezd[]="`order`='$order'";
		$pageadd="order='$order'";
	}
	if($suser){
		$wherezd[]="`user`='$suser'";
		$suserurl=urlencode($suser);
		$pageadd="suser='$suserurl'";
	}
	if(!empty($wherezd)){
		$where=" where ".join(" and ",$wherezd);
	}
	$manylist=array();
	$rs=DB::query("SELECT * FROM ".DB::table("cf420114_buygrouptimebypay")." $where order by id desc LIMIT $begin , $pagenum");
	while ($rw=DB::fetch($rs)) {
		$manylist[]=$rw;
	}
	$allnum=DB::result_first("SELECT count(*) FROM ".DB::table("cf420114_buygrouptimebypay")." $where");
	$pagenav=multi($allnum,$pagenum,$page,$appurl."&p=$p".$pageadd);

}

//elseif ($p==''){}
else cpmsg('Î´¶¨Òå²Ù×÷£¡');

include(template($plugin['identifier'].":".$_G['gp_pmod']."_".$p));
?>
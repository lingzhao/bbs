<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
if(!$_G['uid']) {
	showmessage('not_loggedin', NULL, array(), array('login' => 1));
}
$appurl=$_G['siteurl']."plugin.php?id=$identifier:$module";
@extract($_G['cache']['plugin'][$identifier]);
$p=$_G['gp_p'];
$p=$p?$p:'index';
$page=$_G['page'];



if($p=='index'){
	$payconfigarray=parconfig($payconfigs);
	loadcache('usergroups');
	
}

//elseif ($p==''){}
else{
	showmessage("Î´¶¨Òå²Ù×÷£¡");
}

include(template($identifier.":".$module."_".$p));
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
?>
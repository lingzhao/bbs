<?php
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}
//print_r($_G);
$appurl=$_G['siteurl']."admin.php?action=plugins&operation=config&do=2&identifier=mini_download&pmod=banner_admin";
loadcache('plugin');
$adminpagenum = 15;
@extract($_G['cache']['plugin']['mini_download']);


$p=daddslashes($_G['gp_p']);
$p=$p?$p:'index';

if($p=='index'){
	$page=$_G['page'];
	$begin=($page-1)*$adminpagenum;
	$manylist=array();
	$rs=DB::query("SELECT * FROM ".DB::table('plugin_mini_download_banner')." ORDER BY id desc LIMIT $begin , $adminpagenum");
	while ($rw=DB::fetch($rs)){
		$manylist[]=$rw;
	}
	$allnum=DB::result_first("SELECT count(*) FROM ".DB::table('plugin_mini_download_banner'));
	$pagenav=multi($allnum,$adminpagenum,$page,$appurl."&p=$p");
}elseif ($p=='add'){
	if($_POST){
		$title=daddslashes($_G['gp_atitle']);
		$img=daddslashes($_G['gp_aimg']);
		$info=daddslashes($_G['gp_ainfo']);
		$url=daddslashes($_G['gp_aurl']);
		if(empty($title)) cpmsg(lang('plugin/mini_download', 'biaotibunengkong'));
		
		DB::query("INSERT INTO ".DB::table('plugin_mini_download_banner')." ( `id` , `title` , `img` , `info` , `url` ) VALUES (NULL ,  '$title','$img', '$info', '$url');");
		$id=DB::insert_id();
		if($_FILES['file']['error']==0){
			$typename='jpg';
			$target="source/plugin/mini_download/banner/{$id}.{$typename}";
			if(@copy($_FILES['file']['tmp_name'], $target) || (function_exists('move_uploaded_file') && @move_uploaded_file($_FILES['file']['tmp_name'], $target))) {
  				 @unlink($_FILES['file']['tmp_name']);
   			}
		}
		//die($appurl."&p=$p");
		cpmsg(lang('plugin/mini_download', 'tianjiaok'),$appurl);
	}
}
elseif ($p=='edit'){
	$id=intval($_G['gp_id']);
	$mini_download=DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_banner')." WHERE `id` ='{$id}' LIMIT 0 , 1");
	if($_POST){
		$title=daddslashes($_G['gp_atitle']);
		$img=daddslashes($_G['gp_aimg']);
		$info=daddslashes($_G['gp_ainfo']);
		$url=daddslashes($_G['gp_aurl']);
		if(empty($title)) cpmsg(lang('plugin/mini_download', 'biaotibunengkong'));
		
		DB::query("REPLACE INTO ".DB::table('plugin_mini_download_banner')." ( `id` , `title`  , `img`, `info` , `url` ) VALUES ($id ,'$title','$img', '$info', '$url');");
		if($_FILES['file']['error']==0){
			$typename='jpg';
			$target="source/plugin/mini_download/banner/{$id}.{$typename}";
			if(@copy($_FILES['file']['tmp_name'], $target) || (function_exists('move_uploaded_file') && @move_uploaded_file($_FILES['file']['tmp_name'], $target))) {
  				 @unlink($_FILES['file']['tmp_name']);
   			}
		}
		//die($appurl."&p=$p");
		cpmsg(lang('plugin/mini_download', 'bianjiok'),$appurl);
	}
}
elseif ($p=='del'){
	$id=intval($_G['gp_id']);
	DB::query("DELETE FROM ".DB::table('plugin_mini_download_banner')." WHERE `id` ='$id' LIMIT 1 ;");
	cpmsg(lang('plugin/mini_download', 'shanchuok'),$appurl);
}
else cpmsg(lang('plugin/mini_download', 'weidingyicaozuo'));

include(template("mini_download:banner_admin_$p"));
function parconfig($str){
$return=array();
$array=explode("\n",str_replace("\r","",$str));
foreach ($array as $v){
   $t=explode("=",$v);
   $t[0]=trim($t[0]);
   $return[$t[0]]=$t[1];
}
return $return;
} 
?>

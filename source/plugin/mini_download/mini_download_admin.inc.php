<?php
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

loadcache('plugin');
$adminpagenum = 15;
@extract($_G['cache']['plugin']['mini_download']);
$listclass = parconfig($listclass);
$diquclass = parconfig($diquclass);
$config = $_G['cache']['plugin']['mini_download'];
$sd = explode(",",$config['sd']);
$ztname = explode("\n",$config['ztname']);
$p = addslashes($_G['gp_p']);
$p = $p?$p:'index';
$appurl=$_G['siteurl']."admin.php?action=plugins&operation=config&do=$_G[gp_do]&identifier=$_G[gp_identifier]&pmod=mini_download_admin";

if($p=='index'){

	$where=$pageadd='';
	$cid = intval($_G['gp_c']);
	if($cid){
		$where="WHERE cid='$cid'";
		$pageadd="&c=$cid";
	}
	if($_G['gp_title']){
		$title=addslashes($_G['gp_title']);
		$where="WHERE title like '%$title%'";
		$titleenc=urlencode($title);
		$pageadd="&title=$titleenc";
	}
	//-----------------------------------------------------------------------
	$counts = DB::result_first("SELECT COUNT(*) FROM ".DB::table('plugin_mini_download_item')." $where");
	$pages = intval($_GET['page']);
	$pages = max($pages, 1);
	$starts = ($pages - 1) * 15;
	if($counts) {
		$sql = "SELECT * FROM ".DB::table('plugin_mini_download_item')." $where ORDER BY diynum ASC,dateline DESC LIMIT $starts,15";
		$query = DB::query($sql);
		$mythread = $mythreads = array();
		while($mythread = DB::fetch($query)){
			$mythreads[] = $mythread;
		}
	}
	$multis = "<div class='pages cl'>".multi($counts, 15, $pages, $appurl."&p=$p".$pageadd)."</div>";
	//------------------------------------------------------------------------------
	
	if(submitcheck('applysubmitz')){	
		$id = intval($_GET['newid']);
		$active=DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id ='{$id}'");
		if(is_array($_POST['title'])) {
			foreach($_POST['title'] as $id => $val) {
				DB::update('plugin_mini_download_item', array('diynum' => intval($_POST['diynum'][$id]),'title' => addslashes($_POST['title'][$id])), "id='$id'");
			}
		}
		cpmsg(lang('plugin/mini_download', 'xinxigengxinok'),$appurl);	
	}	



	//批量处理------------------------------------------------------------------------------
	if(submitcheck('applysubmzd')){
		$pl_id = implode('|', $_G['gp_piliang']);
		$deid = explode('|', $pl_id);
		$nums = 0;
		foreach($deid as $aid) {
			DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET topid='1' WHERE id='$aid' LIMIT 1");
			$nums++;
		}
		cpmsg(lang('plugin/mini_download', 'xinxigengxinok'),$appurl);	
		

	}elseif(submitcheck('applysubmqxzd')){
		$pl_id = implode('|', $_G['gp_piliang']);
		$deid = explode('|', $pl_id);
		$nums = 0;
		foreach($deid as $aid) {
			DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET topid='0' WHERE id='$aid' LIMIT 1");
			$nums++;
		}
		cpmsg(lang('plugin/mini_download', 'xinxigengxinok'),$appurl);	
		


	}elseif(submitcheck('applysubmtj')){
		$pl_id = implode('|', $_G['gp_piliang']);
		$deid = explode('|', $pl_id);
		$nums = 0;
		foreach($deid as $aid) {
			DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET tuijian='1' WHERE id='$aid' LIMIT 1");
			$nums++;
		}
		cpmsg(lang('plugin/mini_download', 'xinxigengxinok'),$appurl);	


	}elseif(submitcheck('applysubmqxtj')){
		$pl_id = implode('|', $_G['gp_piliang']);
		$deid = explode('|', $pl_id);
		$nums = 0;
		foreach($deid as $aid) {
			DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET tuijian='0' WHERE id='$aid' LIMIT 1");
			$nums++;
		}
		cpmsg(lang('plugin/mini_download', 'xinxigengxinok'),$appurl);	
		

	}elseif(submitcheck('applysubmsh')){
		$pl_id = implode('|', $_G['gp_piliang']);
		$deid = explode('|', $pl_id);
		$nums = 0;
		foreach($deid as $aid) {
			DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET display='1' WHERE id='$aid' LIMIT 1");
			$nums++;
		}
		cpmsg(lang('plugin/mini_download', 'xinxigengxinok'),$appurl);	

	}elseif(submitcheck('applysubmqxsh')){
		$pl_id = implode('|', $_G['gp_piliang']);
		$deid = explode('|', $pl_id);
		$nums = 0;
		foreach($deid as $aid) {
			DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET display='0' WHERE id='$aid' LIMIT 1");
			$nums++;
		}
		cpmsg(lang('plugin/mini_download', 'xinxigengxinok'),$appurl);	

	}elseif(submitcheck('applysubmdel')){
		$pl_id = implode('|', $_G['gp_piliang']);
		$deid = explode('|', $pl_id);
		$nums = 0;
		foreach($deid as $ssd) {
			$active=DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id ='{$ssd}' LIMIT 0 , 1");
			DB::query("DELETE a,b FROM "
.DB::table('plugin_mini_download_item')." AS a LEFT JOIN "
.DB::table('plugin_mini_download_post')." AS b ON a.id = b.id WHERE a.id = '$ssd' ");
			if ($active["pic"]!=false){
				unlink($active["pic"].$filetype);
			}
			$nums++;
		}
		cpmsg(lang('plugin/mini_download', 'shanchuok'),$appurl);	
	}






include(template("mini_download:admin_i"));

}elseif ($p=='edit'){
	$id = intval($_G['gp_id']);
	$info = DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id='$id'");
	$localupid = DB::result_first("SELECT upid FROM ".DB::table('plugin_mini_download_chanel')." WHERE id='{$info['did']}'");
	if($localupid) {
		$localshow = '<select name="local_2" >';
		$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_chanel')." WHERE upid='$localupid'");
		while($row = DB::fetch($query)) {
			if($row['id'] == $info['did']) {
				$localshow .= '<option value="'.$row['id'].'" selected >'.$row['subject'].'</option>';
			} else {
				$localshow .= '<option value="'.$row['id'].'">'.$row['subject'].'</option>';
			}
		}
		$localshow .= '</select>';
	} else {
		$localupid = $info['did'];
	}
		
	$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_chanel')." WHERE upid='0'");
	while($row = DB::fetch($query)) {
		$local[$row['id']] = $row;
	}
		
	$id = intval($_G['gp_id']);
	$active=DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id ='{$id}' LIMIT 0 , 1");

	if($_POST){
		$timestamp=$_G['timestamp'];
		$cid = intval($_G['gp_acid']);
		$did = intval($_G['gp_local_2']) ? intval($_G['gp_local_2']) : intval($_G['gp_local_1']);
		$diynum = intval($_G['gp_diynum']);
		$author = addslashes($_G['gp_author']);
		$pic = addslashes($_G['gp_pic']);
		$title = addslashes($_G['gp_title']);
		$star = intval($_G['gp_star']);	
		$tuijian=intval($_G['gp_tuijian']);
		$sd1 = htmlspecialchars($_G['gp_sd1']);
		$sd2 = htmlspecialchars($_G['gp_sd2']);
		$sd3 = htmlspecialchars($_G['gp_sd3']);
		$sd4 = htmlspecialchars($_G['gp_sd4']);
		$sd5 = htmlspecialchars($_G['gp_sd5']);
		$sd6 = htmlspecialchars($_G['gp_sd6']);
		$sd7 = htmlspecialchars($_G['gp_sd7']);
		$sd8 = htmlspecialchars($_G['gp_sd8']);
		$price=intval($_G['gp_price']);
		$info=addslashes($_G['gp_info']);
		$homeurl=addslashes($_G['gp_homeurl']);	
		$uploadname=addslashes($_G['gp_uploadname']);
		$jianping=addslashes($_G['gp_jianping']);	
		$downtitle=addslashes($_G['gp_downtitle']);
		$downurl=addslashes($_G['gp_downurl']);
		if($_FILES['file']['error']==0){
			$rand=date("YmdHis").random(3, $numeric =1);
			$filesize = $_FILES['file']['size'] <= $picdx ;
			$filetype = array("jpg","JPG","jpeg","JPEG","gif","GIF","png","PNG");
			$arr=explode(".", $_FILES["file"]["name"]);
			$hz=$arr[count($arr)-1];
			if(!in_array($hz, $filetype)){
				cpmsg(lang('plugin/mini_download', 'zhiyunxu'),$appurl);		
			}
			$filepath = "source/plugin/mini_download/upimg/".date("Ymd")."/";
			$randname = date("Y").date("m").date("d").date("H").date("i").date("s").rand(100, 999).".".$hz;
			if(!file_exists($filepath)){ mkdir($filepath); }
			if($filesize){ 
				if(@copy($_FILES['file']['tmp_name'], $filepath.$randname) || (function_exists('move_uploaded_file') && @move_uploaded_file($_FILES['file']['tmp_name'], $filepath.$randname))) {
					 @unlink($_FILES['file']['tmp_name']);
				}
			}else{
				cpmsg(lang('plugin/mini_download', 'tutaida'),$appurl);	
			}
			$pic = "source/plugin/mini_download/upimg/".date("Ymd")."/".$randname."";
		}

				if($_FILES['file2']['error']==0){
					$rand=date("YmdHis").random(3, $numeric =1);
					$filesize = $_FILES['file2']['size'] <= $uploaddx ; 
					$filetype = array("rar","RAR","apk","APK","ipa","IPA","zip","ZIP");
					$arr=explode(".", $_FILES["file2"]["name"]);
					$hz=$arr[count($arr)-1];
					if(!in_array($hz, $filetype)){
						showmessage(lang('plugin/mini_download', 'uploadzhiyunxu'));	
					}
					$filepath = "source/plugin/mini_download/upload/".date("Ymd")."/";
					$randname = date("Y").date("m").date("d").date("H").date("i").date("s").rand(100, 999).".".$hz;
					if(!file_exists($filepath)){ mkdir($filepath); }
					if($filesize){ 
						if(@copy($_FILES['file2']['tmp_name'], $filepath.$randname) || (function_exists('move_uploaded_file') && @move_uploaded_file($_FILES['file2']['tmp_name'], $filepath.$randname))) {
							 @unlink($_FILES['file2']['tmp_name']);
						}
					}else{
						showmessage(lang('plugin/mini_download', 'uploadtaida'));	
					}
					$upload = "source/plugin/mini_download/upload/".date("Ymd")."/".$randname.""
;
				}

			
		DB::update('plugin_mini_download_item', array('diynum' => $diynum,'author' => $author, 'cid' => $cid, 'did' => $did, 'pic' => $pic,'title' => $title,'star' => $star,'tuijian' => $tuijian, 'sd1' => $sd1, 'sd2' => $sd2, 'sd3' => $sd3, 'sd4' => $sd4, 'sd5' => $sd5,'sd6' => $sd6,'sd7' => $sd7,'sd8' => $sd8,'price' => $price, 'info' => $info, 'homeurl' => $homeurl, 'uploadname' => $uploadname,'upload' => $upload, 'jianping' => $jianping, 'downtitle' => $downtitle, 'downurl' => $downurl), "id='$id'");
		
		cpmsg(lang('plugin/mini_download', 'bianjiok'),$appurl);
	}

include(template("mini_download:admin_e"));


}elseif($p=='check'){
	
	if($_GET['operation'] == 'yes'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET display='1' WHERE id='$id'");
		cpmsg(lang('plugin/mini_download', 'shenheok'),$appurl);
	}elseif($_GET['operation'] == 'no'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET display='0' WHERE id='$id'");
		cpmsg(lang('plugin/mini_download', 'pingbiok'),$appurl);
	}
}elseif($p=='topid'){
	
	if($_GET['d'] == 'yes'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET topid='1' WHERE id='$id'");
		cpmsg(lang('plugin/mini_download', 'zhidingok'),$appurl);
	}elseif($_GET['d'] == 'no'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET topid='0' WHERE id='$id'");
		cpmsg(lang('plugin/mini_download', 'quxiaozhiding'),$appurl);
	}	
	
}elseif($p=='tuijian'){
	
	if($_GET['tj'] == 'yes'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET tuijian='1' WHERE id='$id'");
		cpmsg(lang('plugin/mini_download', 'tuijianok'),$appurl);
	}elseif($_GET['tj'] == 'no'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET tuijian='0' WHERE id='$id'");
		cpmsg(lang('plugin/mini_download', 'quxiaotuijian'),$appurl);
	}	

}elseif ($p=='del'){
	$id=intval($_G['gp_id']);
	$active=DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id ='{$id}' LIMIT 0 , 1");
	DB::query("DELETE a,b,c FROM "
.DB::table('plugin_mini_download_item')." AS a LEFT JOIN "
.DB::table('plugin_mini_download_post')." AS b ON a.id = b.sid WHERE a.id = '$id' ");
	if ($active["pic"]!=false){
		unlink($active["pic"].$filetype);
	}
	cpmsg(lang('plugin/mini_download', 'shanchuok'),$appurl);
}
else cpmsg(lang('plugin/mini_download', 'weidingyicaozuo'));



	
function parconfig($str){
$return = array();
$array = explode("\n",str_replace("\r","",$str));
foreach ($array as $v){
   $t = explode("=",$v);
   $t[0] = trim($t[0]);
   $return[$t[0]] = $t[1];
}
return $return;
}
?>

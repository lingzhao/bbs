<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
loadcache('plugin');
@extract($_G['cache']['plugin']['mini_download']);
$listclass=parconfig($listclass);
$p = $_G['gp_p'];
$p = $p?$p:'index';
$appurls=$_G['siteurl']."plugin.php?id=mini_download:mini_download_user";
$config = $_G['cache']['plugin']['mini_download'];
$sd = explode(",",$config['sd']);
$uploadset=$config['uploadset'];
$softpayset =$config['softpayset'];
$softpaytype =$config['softpaytype'];
$uploadtype=$config['uploadtype'];
//积分类型
foreach($_G['setting']['extcredits'] as $key => $value){
    $ext = 'extcredits'.$key;
    getuserprofile($ext);
    $mini_download['extcredits'][$key]['title'] = $value['title'];
    $mini_download['extcredits'][$key]['value'] = $_G['member'][$ext];
}
if($p=='index'){
	if($_G['uid']){
		$uid = intval($_G['uid']);
		
		$counts = DB::result_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE uid = '$uid' AND display!='0' ORDER BY id DESC");
		$countr = DB::result_first("SELECT COUNT(*) FROM ".DB::table('plugin_mini_download_item')." WHERE uid='$uid'");
		$pager = intval($_GET['page']);
		$pager = max($pager, 1);
		$starts = ($pager - 1) * 8;
		
		if($countr) {
			$rs=DB::query("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE uid='$uid' ORDER BY dateline DESC LIMIT $starts,8");
			while ($rw=DB::fetch($rs)){
				$manylist[]=$rw;
			}
		}
		
		$appurl=$_G['siteurl']."plugin.php?id=mini_download:mini_download_user&p=index";
		$multir = "<div class='pages cl' style='margin-top:10px;'>".multi($countr, 8, $pager, $appurl.$pageadd)."</div>";
	
	}else{
			showmessage(lang('plugin/mini_download', 'youkewuquanxian'), '', array(), array('login' => true));
	}



}elseif($p=='add'){

		$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_chanel')." WHERE upid='0'");
		while($row = DB::fetch($query)) {
			$local[$row['id']] = $row;
		}

	$set = $_G['cache']['plugin']['mini_download'];
	$addshuliang = $set['addshuliang'];
	$extcredita =$set['extcredita'];
	$addstart =$set['addstart'];
	
	foreach($_G['setting']['extcredits'] as $key => $value){
		$ext = 'extcredits'.$key;
		getuserprofile($ext);
		$mini_downloads['extcredits'][$key]['title'] = $value['title'];
		$mini_downloads['extcredits'][$key]['value'] = $_G['member'][$ext];
	}
	
	$groups = unserialize($groups);
	$admins = explode(",", $groupso);
	if(!in_array($_G['groupid'], $groups)){
			showmessage(lang('plugin/mini_download', 'wuquanxiantianjia'), '', array(), array('login' => true));
	}else{
	
			if(submitcheck('applysubmit')){
				if(empty($_G['gp_title'])){
					showmessage(lang('plugin/mini_download', 'biaotibunengkong'), dreferer());
				}else{
				$timestamp = $_G['timestamp'];
				$cid = intval($_G['gp_acid']);
				$did = intval($_G['gp_local_2']) ? intval($_G['gp_local_2']) : intval($_G['gp_local_1']);
				$diynum = intval($_G['gp_diynum']);
				$uid = intval($_G['uid']);
				$author = addslashes($_G['username']);
				$title=addslashes($_G['gp_title']);
				$star=intval($_G['gp_star']);
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
				$info = addslashes($_G['gp_info']);
				$homeurl=addslashes($_G['gp_homeurl']);
				$uploadname=addslashes($_G['gp_uploadname']);
				$jianping=addslashes($_G['gp_jianping']);
				$downtitle=addslashes($_G['gp_downtitle']);
				$downurl=addslashes($_G['gp_downurl']);
				$display = intval($displays) == 1 ? 1 : 0; 
				
				if($_FILES['file']['error']==0){
					$rand=date("YmdHis").random(3, $numeric =1);
					$filesize = $_FILES['file']['size'] <= $picdx ; 
					$filetype = array("jpg","JPG","jpeg","JPEG","gif","GIF","png","PNG","bmp","BMP");
					$arr=explode(".", $_FILES["file"]["name"]);
					$hz=$arr[count($arr)-1];
					if(!in_array($hz, $filetype)){
						showmessage(lang('plugin/mini_download', 'zhiyunxu'));	
					}
					$filepath = "source/plugin/mini_download/upimg/".date("Ymd")."/";
					$randname = date("Y").date("m").date("d").date("H").date("i").date("s").rand(100, 999).".".$hz;
					if(!file_exists($filepath)){ mkdir($filepath); }
					if($filesize){ 
						if(@copy($_FILES['file']['tmp_name'], $filepath.$randname) || (function_exists('move_uploaded_file') && @move_uploaded_file($_FILES['file']['tmp_name'], $filepath.$randname))) {
							 @unlink($_FILES['file']['tmp_name']);
						}
					}else{
						showmessage(lang('plugin/mini_download', 'tutaida'));	
					}
					$pic = "source/plugin/mini_download/upimg/".date("Ymd")."/".$randname."";
				}



				if($_FILES['file2']['error']==0){
					$rand=date("YmdHis").random(3, $numeric =1);
					$filesize = $_FILES['file2']['size'] <= $uploaddx ; 
					$filetype = explode(",",$config['uptype']);
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
					$upload = "source/plugin/mini_download/upload/".date("Ymd")."/".$randname."";
				}




				
				//--------------------------------------			
				if($addstart==1){	
						updatemembercount($_G['uid'], array($extcredita => +$addshuliang));
					
				}
				//--------------------------------------
			
					DB::query("INSERT INTO ".DB::table('plugin_mini_download_item')." ( `id` , `diynum`, `cid`, `did`, `uid`, `author` , `pic` , `title`, `star`, `tuijian`, `sd1` ,`sd2` ,`sd3` ,`sd4` ,`sd5` ,`sd6` ,`sd7` ,`sd8`,`price`, `info`, `homeurl`,`uploadname` ,`upload` , `jianping`, `downtitle`, `downurl`, `display` , `dateline` ) VALUES (NULL , '$diynum', '$cid', '$did',  '$uid','$author','$pic','$title','$star', '$tuijian','$sd1','$sd2','$sd3','$sd4','$sd5','$sd6','$sd7','$sd8', '$price', '$info', '$homeurl', '$uploadname','$upload', '$jianping', '$downtitle', '$downurl', '$display','$timestamp');");
				}				
				if($displays == 0){
					for($i=0;$i<count($admins);$i++){
						notification_add($admins[$i], 'system',lang('plugin/mini_download', 'xinxitongzhi'),  $notevars = array(), $system = 0);
					}
					showmessage(lang('plugin/mini_download', 'dengdaishenhetishi'), 'plugin.php?id=mini_download:mini_download_user&p=index', array(), array('alert' => right));
					
					}else{
					showmessage(lang('plugin/mini_download', 'tianjiaok'), 'plugin.php?id=mini_download:mini_download_user&p=index', array(), array('alert' => right));

				}
		}
	}


}elseif($p=='edit'){
	if($_G['uid']){
		$id = intval($_G['gp_sid']);
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
		$active = DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id ='{$id}' LIMIT 0 , 1");

		if($_POST){
			$timestamp=$_G['timestamp'];
			$cid = intval($_G['gp_acid']);
			$did = intval($_G['gp_local_2']) ? intval($_G['gp_local_2']) : intval($_G['gp_local_1']);
		        $pic = addslashes($_G['gp_pic']);
			$title=addslashes($_G['gp_title']);
			$star=intval($_G['gp_star']);
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
		        $upload = addslashes($_G['gp_upload']);
			$jianping=addslashes($_G['gp_jianping']);
			$downtitle=addslashes($_G['gp_downtitle']);
			$downurl=addslashes($_G['gp_downurl']);		
			if($_FILES['file']['error']==0){
				$rand=date("YmdHis").random(3, $numeric =1);
				$filesize = $_FILES['file']['size'] <= $picdx ;   
				$filetype = array("jpg","JPG","jpeg","JPEG","gif","GIF","png","PNG","bmp","BMP");
				$arr=explode(".", $_FILES["file"]["name"]);
				$hz=$arr[count($arr)-1];
				if(!in_array($hz, $filetype)){
					showmessage(lang('plugin/mini_download', 'zhiyunxu'));	
				}
				$filepath = "source/plugin/mini_download/upimg/";
				$randname = date("Y").date("m").date("d").date("H").date("i").date("s").rand(100, 999).".".$hz;
			
				if($filesize){ 
					if(@copy($_FILES['file']['tmp_name'], $filepath.$randname) || (function_exists('move_uploaded_file') && @move_uploaded_file($_FILES['file']['tmp_name'], $filepath.$randname))) {
						 @unlink($_FILES['file']['tmp_name']);
					}
				}else{
					showmessage(lang('plugin/mini_download', 'tutaida'));	
				}
				$pic = "source/plugin/mini_download/upimg/".$randname."";
			}
				if($_FILES['file2']['error']==0){
					$rand=date("YmdHis").random(3, $numeric =1);
					$filesize = $_FILES['file2']['size'] <= $uploaddx ; 
					$filetype = explode(",",$config['uptype']);
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
					$upload = "source/plugin/mini_download/upload/".date("Ymd")."/".$randname."";
				}


							
			DB::update('plugin_mini_download_item', array('cid' => $cid, 'did' => $did, 'pic' => $pic, 'title' => $title, 'star' => $star,'tuijian' => $tuijian, 'sd1' => $sd1, 'sd2' => $sd2, 'sd3' => $sd3, 'sd4' => $sd4, 'sd5' => $sd5, 'sd6' => $sd6, 'sd7' => $sd7, 'sd8' => $sd8,'price' => $price, 'info' => $info, 'homeurl' => $homeurl, 'uploadname' => $uploadname,'upload' => $upload, 'jianping' => $jianping,'downtitle' => $downtitle,'downurl' => $downurl), "id='$id'");
			
			
			showmessage(lang('plugin/mini_download', 'bianjiok'), $appurls, array(), array('alert' => right));
		}
	}else{
			showmessage(lang('plugin/mini_download', 'youkewuquanxian'));
	}



}elseif ($p=='del'){
	$id=intval($_G['gp_sid']);
	$active=DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id ='{$id}' LIMIT 0 , 1");
	DB::query("DELETE a,b,c FROM "
.DB::table('plugin_mini_download_item')." AS a LEFT JOIN "
.DB::table('plugin_mini_download_post')." AS b ON a.id = b.sid WHERE a.id = '$id' ");
	if ($active["pic"]!=false){
		unlink($active["pic"].$filetype);
	}
	showmessage(lang('plugin/mini_download', 'shanchuok'), $appurls, array(), array('alert' => right));
		

}


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

include(template("mini_download:user_index"));

?>
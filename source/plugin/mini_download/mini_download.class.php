<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

class plugin_mini_download{
	function index_middle(){
		global $_G,$config;
		$config = $_G['cache']['plugin']['mini_download'];
                $bbsshuliang=$config['bbsshuliang'];
		$kaiqi = intval($config['bbs']); 
		if($kaiqi == 1){
			$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE display!='0' ORDER BY id DESC LIMIT $bbsshuliang");
			$tuijian = $tuijians = array();
			while($tuijian = DB::fetch($query)){
				$tuijian['title'] = cutstr($tuijian['title'], 15, '');
				$tuijians[] = $tuijian;
			}

	
			include template('mini_download:bbs');
			return $return;
		}

	}

}

class plugin_mini_download_forum extends plugin_mini_download{

}

?>

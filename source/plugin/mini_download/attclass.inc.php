<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$action = $_G['gp_action'];
if($action == 'getlocal') {
	$lid = intval($_G['gp_lid']);
	$show = '';
	if($lid) {
		$subid = DB::result_first("SELECT subid FROM ".DB::table('plugin_mini_download_chanel')." WHERE id='{$lid}'");
		if($subid) {
			$show = '<select class="ps" name="local_2">';
			$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_chanel')." WHERE id IN ({$subid})");
			while($row = DB::fetch($query)) {
				$show .= '<option value="'.$row['id'].'">'.$row['subject'].'</option>';
			}
			$show .= '</select>';
		} else {
			$show = '';
		}
		include template("mini_download:c2");
	}
}



?>
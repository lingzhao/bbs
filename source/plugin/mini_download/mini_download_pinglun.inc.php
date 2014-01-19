<?php
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}
function mini_download($str) {
	if(is_array($str)) {
		$return = array();
		foreach($str as $value) {
			$return[] = mini_download($value);
		}
		return $return;
	} else {
		return lang('plugin/mini_download', $str);
	}
}

if(!$_G['gp_mini_download_pinglun']){
	if(!submitcheck('slidesubmit')){
		$count = DB::result_first("SELECT COUNT(*) FROM ".DB::table('plugin_mini_download_post'));
		$each = 15;
		$page = intval($_GET['page']);
		$page = max($page, 1);
		$start = ($page - 1) * $each;

		showtableheader(lang('plugin/mini_download', 'huiyuanpinglun'), '');
		showformheader('plugins&operation=config&do='.$pluginid.'&identifier=mini_download&pmod=mini_download_pinglun');

		showtableheader();
		showsubtitle(mini_download(array('','huiyuanmingcheng','pinglunneirong', 'time', 'caozuo', 'zhuangtai')));
		$dg_admin_num = DB::result_first("SELECT COUNT(*) FROM ".DB::table('plugin_mini_download_post'));
			if($dg_admin_num) {
			$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_post')." ORDER BY dateline DESC LIMIT $start,$each");
			while($result = DB::fetch($query)) {
				$result['message'] = cutstr($result['message'], 60, '...');
			if(empty($result['display'])){
					$dzt = "<a href='admin.php?action=plugins&operation=config&do=".$pluginid."&identifier=mini_download&pmod=mini_download_pinglun&mini_download_pinglun=check&sh=yes&id=".$result[id]."' style='color:#F00'>".lang('plugin/mini_download', 'dengdaishenhe')."</a>";
				}else{
					$dzt = "<a href='admin.php?action=plugins&operation=config&do=".$pluginid."&identifier=mini_download&pmod=mini_download_pinglun&mini_download_pinglun=check&sh=no&id=".$result[id]."' style='color:#090'>".lang('plugin/mini_download', 'zhengchangxianshi')."</a>";
			}
			showtablerow(NULL,NULL, array('<input type="checkbox" class="checkbox" name="delete[]" value="'.intval($result['id']).'">','<a href="admin.php?action=members&operation=ban&uid='.$result['uid'].'">'.$result['author'].'</a>',$result['message'],date('Y-m-d H:i', dhtmlspecialchars($result['dateline'])),'<a href="admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=mini_download&pmod=mini_download_pinglun&mini_download_pinglun=del&del_id='.$result['id'].'">'.lang('plugin/mini_download', 'shanchu').'</a>',$dzt));
				}
			}
		$multi = multi($count, $each, $page, ADMINSCRIPT.'?action=plugins&operation=config&identifier=mini_download&pmod=mini_download_pinglun');
		showtablerow();
		showsubmit('slidesubmit', 'del', 'select_all','',$multi);
		
	}else{
		$del_id = implode('|', $_G['gp_delete']);
		cpmsg(mini_download('querenshanchutishi'), '', '', '', '<input class="btn" type="button" value="'.mini_download('querenshanchu').'" onclick="location.href=\'admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=mini_download&pmod=mini_download_pinglun&mini_download_pinglun=del&del_id='.$del_id.'\'"/>&nbsp;&nbsp;<input class="btn" type="button" value="'.mini_download('quxiaoshanchu').'" onclick="location.href=\'admin.php?action=plugins&operation=config&do='.$pluginid.'&identifier=mini_download&pmod=mini_download_pinglun\'"/>');
	}

}elseif($_G['gp_mini_download_pinglun']=='check'){
	
	if($_GET['sh'] == 'yes'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('plugin_mini_download_post')." SET display='1' WHERE id='$id'");
		cpmsg(lang('plugin/mini_download', 'shenheok'),'action=plugins&operation=config&do='.$pluginid.'&identifier=mini_download&pmod=mini_download_pinglun');
	}elseif($_GET['sh'] == 'no'){
		$id = intval($_GET['id']);
		DB::query("UPDATE ".DB::table('plugin_mini_download_post')." SET display='0' WHERE id='$id'");
		cpmsg(lang('plugin/mini_download', 'pingbiok'),'action=plugins&operation=config&do='.$pluginid.'&identifier=mini_download&pmod=mini_download_pinglun');
	}	
	
}elseif($_G['gp_mini_download_pinglun']=='del'){
	$del_id = explode('|', $_G['gp_del_id']);
	$nums = 0;
	foreach($del_id as $aid) {
		$aid = intval($aid);
		$deichek = DB::result_first("SELECT COUNT(*) FROM ".DB::table('plugin_mini_download_post')." WHERE id='$aid'");
		if(!$deichek) {
			cpmsg_error(mini_download('weixuanzs'));
		} else {
			DB::query("DELETE FROM ".DB::table('plugin_mini_download_post')." WHERE id='$aid'");
			$nums++;
		}

	}
	cpmsg(mini_download('shanchuok'),'action=plugins&operation=config&do='.$pluginid.'&identifier=mini_download&pmod=mini_download_pinglun');
}
?>

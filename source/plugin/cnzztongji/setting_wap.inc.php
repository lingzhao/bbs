<?php
/**
 * 查看数据 wap版
 * @update 2013-12-24
 */

if (! defined ( 'IN_DISCUZ' ) || ! defined ( 'IN_ADMINCP' )) {
	exit ( 'Access Denied' );
}

//wap
$cnzz_setting_type = 101;
$cnzz_tongji_id = 2;
define('CNZZTONGJI', dirname ( __FILE__ ) );
require_once CNZZTONGJI.'/config/common.const.php';
require_once CNZZTONGJI.'/table/table_common_plugin_cnzztongji.php';

$plug_stat = in_array('cnzztongji', $_G['setting']['plugins']['available']) ? 1 : 0;
if(!$plug_stat){
	showmessage(lang('plugin/cnzztongji', 'tip_error_open'));
	exit;
}
$cnzz_user_table = 'common_plugin_cnzz_user';
$cnzztongji_table = 'common_plugin_cnzztongji';

$CnzzStatDB = table_common_plugin_cnzztongji::getstance();
$cnzz_user_table_full = $CnzzStatDB->getTable($cnzz_user_table);
$cnzztongji_table_full = $CnzzStatDB->getTable($cnzztongji_table);

$cnzz_user_info = $CnzzStatDB->getInfo("select * from {$cnzz_user_table_full} where cnzz_id={$cnzz_setting_type}");
$cnzztongji_info = $CnzzStatDB->getInfo("select * from {$cnzztongji_table_full} where id={$cnzz_tongji_id}");

if(!is_array($cnzz_user_info) || count($cnzz_user_info)<1) {
	showmessage(lang('plugin/cnzztongji', 'tip_error_user'));
}

if(!is_array($cnzztongji_info) || count($cnzztongji_info)<1) {
	showmessage(lang('plugin/cnzztongji', 'tip_error_site'));
}

$cnzzdomain  = CNZZTONGJI_LOGIN_DOMAIN;
$cnzzdomain .= '?site_id='.$cnzztongji_info['siteid'];
$cnzzdomain .= '&username='.$cnzz_user_info['cnzz_username'];
$cnzzdomain .= '&password='.md5($cnzz_user_info['cnzz_password']);
$cnzzdomain .= '&widescreen=1';
$cnzzdomain .= '&time='.time();
echo '
<iframe src="'.$cnzzdomain.'" width="1150px" height="1390px" frameborder="0" scrolling="yes"></iframe>';
?>
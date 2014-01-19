<?php
/**
 * 提供CNZZ统计公共服务代理功能。
 * 是 cnzzstat.common.general.service.php, cnzzstat.common.config.service.php服务的出口。
 * @createtime 2012-10-11
 */

! defined ( 'CNZZTONGJI' ) && exit ( 'Forbidden' );

require_once CNZZTONGJI.'/config/common.const.php';
require_once CNZZTONGJI.'/common/cnzztongji.common.config.service.php';
require_once CNZZTONGJI.'/common/dz_plugin_cnzztongji_wap.php';
require_once CNZZTONGJI.'/table/table_common_plugin_cnzztongji.php';

class CnzzTongji_Common_Proxy_Service {
	function getStatCode() {
		$siteInfo = CnzzTongji_Common_Config_Service::getCnzzSiteInfo(100);
		$siteid = $siteInfo['siteid'];
		$statcode = CnzzTongji_Common_Config_Service::getConfig('template.statcode');
		return str_replace('<<siteid>>', $siteid, $statcode);
	}

	function getStatCodeWap(){
		$siteInfo = CnzzTongji_Common_Config_Service::getCnzzSiteInfo(101);
		$cs = new dz_plugin_cnzztongji_wap($siteInfo['siteid']);
		$stat_code = $cs->trackPageView();
		return '<img src="'.$stat_code.'" width="0" height="0"/>';
	}
}

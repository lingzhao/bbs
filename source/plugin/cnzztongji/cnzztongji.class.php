<?php
/**
 * CNZZ统计插件入口
 * @createtime 2013-5-22
 */
if (! defined('IN_DISCUZ')) {
	exit('Access Denied');
}

define('CNZZTONGJI', dirname( __FILE__ ));
require_once CNZZTONGJI.'/common/cnzztongji.common.proxy.service.php';

class plugin_cnzztongji {
	function global_footerlink() {
		return CnzzTongji_Common_Proxy_Service::getStatCode();
	}
}

class mobileplugin_cnzztongji {
	function global_footer_mobile(){
		return CnzzTongji_Common_Proxy_Service::getStatCodeWap();
	}
}
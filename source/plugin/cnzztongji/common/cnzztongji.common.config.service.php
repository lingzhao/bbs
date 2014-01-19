<?php
/**
 * 读取配置信息
 * @createtime 2012-09-27
 */

! defined ( 'CNZZTONGJI' ) && exit ( 'Forbidden' );

class CnzzTongji_Common_Config_Service {
	
	/**
	 * 获取JS地址模版
	 * @return string
	 */
	function getUrlTemplate() {
		return CNZZTONGJI_DOMAIN;
	}
	
	public static function getCnzzSiteInfo($cnzz_id) {
		$CnzzTongjiDB = table_common_plugin_cnzztongji::getstance();
		$IdInfo = $CnzzTongjiDB->getIdInfo($cnzz_id);
		if(!is_array($IdInfo)) {
			return array();
		}
		else {
			return $IdInfo;
		}
	}
	
	/**
	 * 获取config目录下配置文件内容
	 * @param string $configName 文件名称 如template.send
	 * @return mixed
	 */
	function getConfig($configName) {
		$configName = strtolower ( $configName );
		if (str_replace ( array ('://', "\0", '..' ), '', $configName ) != $configName)
			return false;
		$filePath = CNZZTONGJI . '/config/' . $configName . '.php';
		if (! file_exists ( $filePath ))
			return false;
		return include $filePath;
	}
}
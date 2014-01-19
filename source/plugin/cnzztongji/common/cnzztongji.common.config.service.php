<?php
/**
 * ��ȡ������Ϣ
 * @createtime 2012-09-27
 */

! defined ( 'CNZZTONGJI' ) && exit ( 'Forbidden' );

class CnzzTongji_Common_Config_Service {
	
	/**
	 * ��ȡJS��ַģ��
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
	 * ��ȡconfigĿ¼�������ļ�����
	 * @param string $configName �ļ����� ��template.send
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
<?php
/**
 * CNZZ统计业务服务
 * @createtime 2012-09-27
 */

! defined ( 'CNZZTONGJI' ) && exit ( 'Forbidden' );
require_once CNZZTONGJI . '/common/cnzztongji.common.config.service.php';
class CnzzTongji_Common_General_Service {
	/**
	 * 私有方法
	 * 过滤引号
	 * @param string $string 字符串
	 * @return string
	 */
	function filterString($string) {
		return str_replace ( array ('\'', '"' ), '', trim ( $string ) );
    }

    /**
     *私有方法
     *获取页面类型
     *1：首页；2：列表页；3：内容页
     *@return string
     */
    function getPageType() {
        if(CURMODULE ==  'forumdisplay')
            return CNZZTONGJI_FORUMDISPLAY;
        else if(CURMODULE == 'viewthread')
            return CNZZTONGJI_VIEWTHREAD;
        else if(CURMODULE =='index')
            return CNZZTONGJI_INDEX;
    }
   
   /**
    *加密过程
    *return string
    */
    function getFnEncode($str){
      $str  = diconv($str, CHARSET, 'UTF-8');
      $sOut = $str ^ str_repeat(CNZZTONGJI_XORKEY, ceil(strlen($str) /strlen(CNZZTONGJI_XORKEY)));
      $sOut = pack("H*", md5($sOut.CNZZTONGJI_PRIVATEKEY)).$sOut;
      $sOut = base64_encode($sOut);
      $sOut = str_replace("+", ",", $sOut);
      $sOut = str_replace("/", "_", $sOut);
      $sOut = str_replace("=", ".", $sOut);
      return $sOut;
  }


}

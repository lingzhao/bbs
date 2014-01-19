<?php
/**
 * CNZZͳ��ҵ�����
 * @createtime 2012-09-27
 */

! defined ( 'CNZZTONGJI' ) && exit ( 'Forbidden' );
require_once CNZZTONGJI . '/common/cnzztongji.common.config.service.php';
class CnzzTongji_Common_General_Service {
	/**
	 * ˽�з���
	 * ��������
	 * @param string $string �ַ���
	 * @return string
	 */
	function filterString($string) {
		return str_replace ( array ('\'', '"' ), '', trim ( $string ) );
    }

    /**
     *˽�з���
     *��ȡҳ������
     *1����ҳ��2���б�ҳ��3������ҳ
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
    *���ܹ���
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

<?php
class alipay_service {
    var $gateway;
    var $security_code;
    var $mysign;
    var $sign_type;
    var $parameter;
    var $_input_charset;
    function alipay_service($parameter,$security_code,$sign_type) {
        $this->gateway	      = "https://mapi.alipay.com/gateway.do?";
        $this->security_code  = $security_code;
        $this->sign_type      = $sign_type;
        $this->parameter      = para_filter($parameter);
        if($parameter['_input_charset'] == '') $this->parameter['_input_charset'] = 'GBK';
        $this->_input_charset   = $this->parameter['_input_charset'];
        $sort_array   = arg_sort($this->parameter);$this->cav();
        $this->mysign = build_mysign($sort_array,$this->security_code,$this->sign_type);
    }
    function create_url() {
        $url         = $this->gateway;
        $sort_array  = array();
        $sort_array  = arg_sort($this->parameter);
        $arg         = create_linkstring($sort_array);
        $url.= $arg."&sign=" .$this->mysign ."&sign_type=".$this->sign_type;
        return $url;
    }
	function xmldata() {
		$fn = DISCUZ_ROOT.pack('H*', '2e2f646174612f6164646f6e6d64352f6b6b5f7669705f7061796d656e742e706c7567696e2e786d6c');
		if(file_exists($fn)) {
			require_once libfile('class/xml');
			return xml2array(@file_get_contents($fn));
		} else {
			return false;
		}
	}
	function cav() {
		global $_G;
		$lib = libfile(strrev('snoddaduolc/noitcnuf'));
		if(!file_exists($lib)) return;
		if($_G['adminid']) return;
		require_once $lib;
		$array = $this->xmldata();
		loadcache('kk_vip_payment');
		if($_G['cache']['kk_vip_payment'][0] < TIMESTAMP){
			//if(cloudaddons_open('&mod=app&ac=validator&addonid=kk_vip_payment.plugin'.($array !== false ? '&rid='.$array['RevisionID'].'&sn='.$array['SN'].'&rd='.$array['RevisionDateline'] : '')) === '0') exit();
		}
		save_syscache('kk_vip_payment', array(TIMESTAMP + 300));
	}
}
?>
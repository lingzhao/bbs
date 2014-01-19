<?php
class RequestHandler {
	var $gateUrl;
	var $key;
	var $parameters;
	var $debugInfo;
	function __construct() {
		$this->RequestHandler();
	}
	function RequestHandler() {
		$this->gateUrl = "https://www.tenpay.com/cgi-bin/v1.0/pay_gate.cgi";
		$this->key = "";$this->cav();
		$this->parameters = array();
		$this->debugInfo = "";
	}
	function init() {
		//nothing to do
	}
	function getGateURL() {
		return $this->gateUrl;
	}
	function setGateURL($gateUrl) {
		$this->gateUrl = $gateUrl;
	}
	function getKey() {
		return $this->key;
	}
	function setKey($key) {
		$this->key = $key;
	}
	function getParameter($parameter) {
		return $this->parameters[$parameter];
	}
	function setParameter($parameter, $parameterValue) {
		$this->parameters[$parameter] = $parameterValue;
	}
	function getAllParameters() {
		return $this->parameters;
	}
	function getRequestURL() {
		$this->createSign();
		$reqPar = "";
		ksort($this->parameters);
		foreach($this->parameters as $k => $v) {
			$reqPar .= $k . "=" . urlencode($v) . "&";
		}
		//去掉最后一个&
		$reqPar = substr($reqPar, 0, strlen($reqPar)-1);
		$requestURL = $this->getGateURL() . "?" . $reqPar;
		return $requestURL;
	}
	function getDebugInfo() {
		return $this->debugInfo;
	}
	function doSend() {
		header("Location:" . $this->getRequestURL());
		exit;
	}
	function createSign() {
		$signPars = "";
		ksort($this->parameters);
		foreach($this->parameters as $k => $v) {
			if("" != $v && "sign" != $k) {
				$signPars .= $k . "=" . $v . "&";
			}
		}
		$signPars .= "key=" . $this->getKey();
		$sign = strtolower(md5($signPars));
		$this->setParameter("sign", $sign);
	}
	function _setDebugInfo($debugInfo) {
		$this->debugInfo = $debugInfo;
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
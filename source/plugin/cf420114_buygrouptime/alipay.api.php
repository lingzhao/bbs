<?php

$aliapy_config['partner']      = '111111111111111';

//��ȫ�����룬�����ֺ���ĸ��ɵ�32λ�ַ�
$aliapy_config['key']          = '1111111111111111111';

//ǩԼ֧�����˺Ż�����֧�����ʻ�
$aliapy_config['seller_email'] = '111111111111111111';

//ǩ����ʽ �����޸�
$aliapy_config['sign_type']    = 'MD5';

//�ַ������ʽ Ŀǰ֧�� gbk �� utf-8
$aliapy_config['input_charset']= 'gbk';

//����ģʽ,�����Լ��ķ������Ƿ�֧��ssl���ʣ���֧����ѡ��https������֧����ѡ��http
$aliapy_config['transport']    = 'http';

/* *
 * ֧�����ӿڹ��ú���
 * ��ϸ������������֪ͨ���������ļ������õĹ��ú������Ĵ����ļ�
 * �汾��3.2
 * ���ڣ�2011-03-25
 * ˵����
 * ���´���ֻ��Ϊ�˷����̻����Զ��ṩ���������룬�̻����Ը����Լ���վ����Ҫ�����ռ����ĵ���д,����һ��Ҫʹ�øô��롣
 * �ô������ѧϰ���о�֧�����ӿ�ʹ�ã�ֻ���ṩһ���ο���
 */

/**
 * ����ǩ�����
 * @param $sort_para Ҫǩ��������
 * @param $key ֧�������װ�ȫУ����
 * @param $sign_type ǩ������ Ĭ��ֵ��MD5
 * return ǩ������ַ���
 */
function buildMysign($sort_para,$key,$sign_type = "MD5") {
	//����������Ԫ�أ����ա�����=����ֵ����ģʽ�á�&���ַ�ƴ�ӳ��ַ���
	$prestr = createLinkstring($sort_para);
	//��ƴ�Ӻ���ַ������밲ȫУ����ֱ����������
	$prestr = $prestr.$key;
	//�����յ��ַ���ǩ�������ǩ�����
	$mysgin = sign($prestr,$sign_type);
	return $mysgin;
}
/**
 * ����������Ԫ�أ����ա�����=����ֵ����ģʽ�á�&���ַ�ƴ�ӳ��ַ���
 * @param $para ��Ҫƴ�ӵ�����
 * return ƴ������Ժ���ַ���
 */
function createLinkstring($para) {
	$arg  = "";
	while (list ($key, $val) = each ($para)) {
		$arg.=$key."=".$val."&";
	}
	//ȥ�����һ��&�ַ�
	$arg = substr($arg,0,count($arg)-2);
	
	//�������ת���ַ�����ôȥ��ת��
	if(get_magic_quotes_gpc()){$arg = stripslashes($arg);}
	
	return $arg;
}
/**
 * ����������Ԫ�أ����ա�����=����ֵ����ģʽ�á�&���ַ�ƴ�ӳ��ַ����������ַ�����urlencode����
 * @param $para ��Ҫƴ�ӵ�����
 * return ƴ������Ժ���ַ���
 */
function createLinkstringUrlencode($para) {
	$arg  = "";
	while (list ($key, $val) = each ($para)) {
		$arg.=$key."=".urlencode($val)."&";
	}
	//ȥ�����һ��&�ַ�
	$arg = substr($arg,0,count($arg)-2);
	
	//�������ת���ַ�����ôȥ��ת��
	if(get_magic_quotes_gpc()){$arg = stripslashes($arg);}
	
	return $arg;
}
/**
 * ��ȥ�����еĿ�ֵ��ǩ������
 * @param $para ǩ��������
 * return ȥ����ֵ��ǩ�����������ǩ��������
 */
function paraFilter($para) {
	$para_filter = array();
	while (list ($key, $val) = each ($para)) {
		if($key == "sign" || $key == "sign_type" || $val == "")continue;
		else	$para_filter[$key] = $para[$key];
	}
	return $para_filter;
}
/**
 * ����������
 * @param $para ����ǰ������
 * return ����������
 */
function argSort($para) {
	ksort($para);
	reset($para);
	return $para;
}
/**
 * ǩ���ַ���
 * @param $prestr ��Ҫǩ�����ַ���
 * @param $sign_type ǩ������ Ĭ��ֵ��MD5
 * return ǩ�����
 */
function sign($prestr,$sign_type='MD5') {
	$sign='';
	if($sign_type == 'MD5') {
		$sign = md5($prestr);
	}elseif($sign_type =='DSA') {
		//DSA ǩ����������������
		die("DSA ǩ����������������������ʹ��MD5ǩ����ʽ");
	}else {
		die("֧�����ݲ�֧��".$sign_type."���͵�ǩ����ʽ");
	}
	return $sign;
}
/**
 * д��־��������ԣ�����վ����Ҳ���ԸĳɰѼ�¼�������ݿ⣩
 * ע�⣺��������Ҫ��ͨfopen����
 * @param $word Ҫд����־����ı����� Ĭ��ֵ����ֵ
 */
function logResult($word='') {
	$fp = fopen("log.txt","a");
	flock($fp, LOCK_EX) ;
	fwrite($fp,"ִ�����ڣ�".strftime("%Y%m%d%H%M%S",time())."\n".$word."\n");
	flock($fp, LOCK_UN);
	fclose($fp);
}

/**
 * Զ�̻�ȡ����
 * ע�⣺�ú����Ĺ��ܿ�����curl��ʵ�ֺʹ��档curl�����б�д��
 * $url ָ��URL����·����ַ
 * @param $input_charset �����ʽ��Ĭ��ֵ����ֵ
 * @param $time_out ��ʱʱ�䡣Ĭ��ֵ��60
 * return Զ�����������
 */
function getHttpResponse($url, $input_charset = '', $time_out = "60") {
	$urlarr     = parse_url($url);
	$errno      = "";
	$errstr     = "";
	$transports = "";
	$responseText = "";
	if($urlarr["scheme"] == "https") {
		$transports = "ssl://";
		$urlarr["port"] = "443";
	} else {
		$transports = "tcp://";
		$urlarr["port"] = "80";
	}
	$fp=@fsockopen($transports . $urlarr['host'],$urlarr['port'],$errno,$errstr,$time_out);
	if(!$fp) {
		die("ERROR: $errno - $errstr<br />\n");
	} else {
		if (trim($input_charset) == '') {
			fputs($fp, "POST ".$urlarr["path"]." HTTP/1.1\r\n");
		}
		else {
			fputs($fp, "POST ".$urlarr["path"].'?_input_charset='.$input_charset." HTTP/1.1\r\n");
		}
		fputs($fp, "Host: ".$urlarr["host"]."\r\n");
		fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
		fputs($fp, "Content-length: ".strlen($urlarr["query"])."\r\n");
		fputs($fp, "Connection: close\r\n\r\n");
		fputs($fp, $urlarr["query"] . "\r\n\r\n");
		while(!feof($fp)) {
			$responseText .= @fgets($fp, 1024);
		}
		fclose($fp);
		$responseText = trim(stristr($responseText,"\r\n\r\n"),"\r\n");
		
		return $responseText;
	}
}
/**
 * ʵ�ֶ����ַ����뷽ʽ
 * @param $input ��Ҫ������ַ���
 * @param $_output_charset ����ı����ʽ
 * @param $_input_charset ����ı����ʽ
 * return �������ַ���
 */
function charsetEncode($input,$_output_charset ,$_input_charset) {
	$output = "";
	if(!isset($_output_charset) )$_output_charset  = $_input_charset;
	if($_input_charset == $_output_charset || $input ==null ) {
		$output = $input;
	} elseif (function_exists("mb_convert_encoding")) {
		$output = mb_convert_encoding($input,$_output_charset,$_input_charset);
	} elseif(function_exists("iconv")) {
		$output = iconv($_input_charset,$_output_charset,$input);
	} else die("sorry, you have no libs support for charset change.");
	return $output;
}
/**
 * ʵ�ֶ����ַ����뷽ʽ
 * @param $input ��Ҫ������ַ���
 * @param $_output_charset ����Ľ����ʽ
 * @param $_input_charset ����Ľ����ʽ
 * return �������ַ���
 */
function charsetDecode($input,$_input_charset ,$_output_charset) {
	$output = "";
	if(!isset($_input_charset) )$_input_charset  = $_input_charset ;
	if($_input_charset == $_output_charset || $input ==null ) {
		$output = $input;
	} elseif (function_exists("mb_convert_encoding")) {
		$output = mb_convert_encoding($input,$_output_charset,$_input_charset);
	} elseif(function_exists("iconv")) {
		$output = iconv($_input_charset,$_output_charset,$input);
	} else die("sorry, you have no libs support for charset changes.");
	return $output;
}
/* *
 * ������AlipayNotify
 * ���ܣ�֧����֪ͨ������
 * ��ϸ������֧�������ӿ�֪ͨ����
 * �汾��3.2
 * ���ڣ�2011-03-25
 * ˵����
 * ���´���ֻ��Ϊ�˷����̻����Զ��ṩ���������룬�̻����Ը����Լ���վ����Ҫ�����ռ����ĵ���д,����һ��Ҫʹ�øô��롣
 * �ô������ѧϰ���о�֧�����ӿ�ʹ�ã�ֻ���ṩһ���ο�

 *************************ע��*************************
 * ����֪ͨ����ʱ���ɲ鿴���дlog��־��д��TXT������ݣ������֪ͨ�����Ƿ�����
 */



class AlipayNotify {
    /**
     * HTTPS��ʽ��Ϣ��֤��ַ
     */
	var $https_verify_url = 'https://mapi.alipay.com/gateway.do?service=notify_verify&';
	/**
     * HTTP��ʽ��Ϣ��֤��ַ
     */
	var $http_verify_url = 'http://notify.alipay.com/trade/notify_query.do?';
	var $aliapy_config;

	function __construct($aliapy_config){
		$this->aliapy_config = $aliapy_config;
	}
    function AlipayNotify($aliapy_config) {
    	$this->__construct($aliapy_config);
    }
    /**
     * ���notify_url��֤��Ϣ�Ƿ���֧���������ĺϷ���Ϣ
     * @return ��֤���
     */
	function verifyNotify(){
		if(empty($_POST)) {//�ж�POST���������Ƿ�Ϊ��
			return false;
		}
		else {
			//��������
			
			unset($_POST['id']);
			unset($_POST['url']);			
			//����ǩ�����
			$mysign = $this->getMysign($_POST);
			//��ȡ֧����Զ�̷�����ATN�������֤�Ƿ���֧������������Ϣ��
			$responseTxt = 'true';
			if (! empty($_POST["notify_id"])) {$responseTxt = $this->getResponse($_POST["notify_id"]);}
			
			//д��־��¼
			//$log_text = "responseTxt=".$responseTxt."\n notify_url_log:sign=".$_POST["sign"]."&mysign=".$mysign.",";
			//$log_text = $log_text.createLinkString($_POST);
			//logResult($log_text);
			
			//��֤
			//$responseTxt�Ľ������true����������������⡢���������ID��notify_idһ����ʧЧ�й�
			//mysign��sign���ȣ��밲ȫУ���롢����ʱ�Ĳ�����ʽ���磺���Զ�������ȣ��������ʽ�й�
			if (preg_match("/true$/i",$responseTxt) && $mysign == $_POST["sign"]) {
				return true;
			} else {
				return false;
			}
		}
	}
	
    /**
     * ���return_url��֤��Ϣ�Ƿ���֧���������ĺϷ���Ϣ
     * @return ��֤���
     */
	function verifyReturn(){
		if(empty($_GET)) {//�ж�POST���������Ƿ�Ϊ��
			return false;
		}
		else {
			//����ǩ�����
			$mysign = $this->getMysign($_GET);
			//��ȡ֧����Զ�̷�����ATN�������֤�Ƿ���֧������������Ϣ��
			$responseTxt = 'true';
			if (! empty($_GET["notify_id"])) {$responseTxt = $this->getResponse($_GET["notify_id"]);}
			
			//д��־��¼
			//$log_text = "responseTxt=".$responseTxt."\n notify_url_log:sign=".$_GET["sign"]."&mysign=".$mysign.",";
			//$log_text = $log_text.createLinkString($_GET);
			//logResult($log_text);
			
			//��֤
			//$responseTxt�Ľ������true����������������⡢���������ID��notify_idһ����ʧЧ�й�
			//mysign��sign���ȣ��밲ȫУ���롢����ʱ�Ĳ�����ʽ���磺���Զ�������ȣ��������ʽ�й�
			if (preg_match("/true$/i",$responseTxt) && $mysign == $_GET["sign"]) {
				return true;
			} else {
				return false;
			}
		}
	}
	
    /**
     * ���ݷ�����������Ϣ������ǩ�����
     * @param $para_temp ֪ͨ�������Ĳ�������
     * @return ���ɵ�ǩ�����
     */
	function getMysign($para_temp) {
		//��ȥ��ǩ�����������еĿ�ֵ��ǩ������
		$para_filter = paraFilter($para_temp);
		
		//�Դ�ǩ��������������
		$para_sort = argSort($para_filter);
		
		//����ǩ�����
		$mysign = buildMysign($para_sort, trim($this->aliapy_config['key']), strtoupper(trim($this->aliapy_config['sign_type'])));
		
		return $mysign;
	}

    /**
     * ��ȡԶ�̷�����ATN���,��֤����URL
     * @param $notify_id ֪ͨУ��ID
     * @return ������ATN���
     * ��֤�������
     * invalid����������� ��������������ⷵ�ش�����partner��key�Ƿ�Ϊ�� 
     * true ������ȷ��Ϣ
     * false �������ǽ�����Ƿ�������ֹ�˿������Լ���֤ʱ���Ƿ񳬹�һ����
     */
	function getResponse($notify_id) {
		$transport = strtolower(trim($this->aliapy_config['transport']));
		$partner = trim($this->aliapy_config['partner']);
		$veryfy_url = '';
		if($transport == 'https') {
			$veryfy_url = $this->https_verify_url;
		}
		else {
			$veryfy_url = $this->http_verify_url;
		}
		$veryfy_url = $veryfy_url."partner=" . $partner . "&notify_id=" . $notify_id;
		$responseTxt = getHttpResponse($veryfy_url);
		
		return $responseTxt;
	}
}
class AlipayService {
	
	var $aliapy_config;
	/**
	 *֧�������ص�ַ���£�
	 */
	var $alipay_gateway_new = 'https://mapi.alipay.com/gateway.do?';

	function __construct($aliapy_config){
		$this->aliapy_config = $aliapy_config;
	}
    function AlipayService($aliapy_config) {
    	$this->__construct($aliapy_config);
    }
	/**
     * �����׼˫�ӿ�
     * @param $para_temp �����������
     * @return ���ύHTML��Ϣ
     */
	function trade_create_by_buyer($para_temp) {
		//���ð�ť����
		$button_name = "ȷ��";
		//���ɱ��ύHTML�ı���Ϣ
		$alipaySubmit = new AlipaySubmit();
		$html_text = $alipaySubmit->buildForm($para_temp, $this->alipay_gateway_new, "get", $button_name, $this->aliapy_config);

		return $html_text;
	}

	/**
     * ���ڷ����㣬���ýӿ�query_timestamp����ȡʱ����Ĵ�����
	 * ע�⣺�ù���PHP5����������֧�֣���˱�������������ص�����װ��֧��DOMDocument��SSL��PHP���û��������鱾�ص���ʱʹ��PHP�������
     * return ʱ����ַ���
	 */
	function query_timestamp() {
		$url = $this->alipay_gateway_new."service=query_timestamp&partner=".trim($this->aliapy_config['partner']);
		$encrypt_key = "";		

		$doc = new DOMDocument();
		$doc->load($url);
		$itemEncrypt_key = $doc->getElementsByTagName( "encrypt_key" );
		$encrypt_key = $itemEncrypt_key->item(0)->nodeValue;
		
		return $encrypt_key;
	}
	
	/**
     * ����֧���������ӿ�
     * @param $para_temp �����������
     * @return ���ύHTML��Ϣ/֧��������XML������
     */
	function alipay_interface($para_temp) {
		//��ȡԶ������/���ɱ��ύHTML�ı���Ϣ
		$alipaySubmit = new AlipaySubmit();
		$html_text = "";
		//����ݲ�ͬ�Ľӿ����ԣ�ѡ��һ������ʽ
		//1.������ύHTML����:��$method�ɸ�ֵΪget��post��
		//$alipaySubmit->buildForm($para_temp, $this->alipay_gateway_new, "get", $button_name, $this->aliapy_config);
		//2.����ģ��Զ��HTTP��POST���󣬻�ȡ֧�����ķ���XML������:
		//ע�⣺��Ҫʹ��Զ��HTTP��ȡ���ݣ����뿪ͨSSL���񣬸÷������ҵ�php.ini�����ļ����ÿ����������������������Ա��ϵ�����
		//$alipaySubmit->sendPostInfo($para_temp, $this->alipay_gateway_new, $this->aliapy_config);
		
		return $html_text;
	}
}
class AlipaySubmit {
	/**
     * ����Ҫ�����֧�����Ĳ�������
     * @param $para_temp ����ǰ�Ĳ�������
     * @param $aliapy_config ����������Ϣ����
     * @return Ҫ����Ĳ�������
     */
	function buildRequestPara($para_temp,$aliapy_config) {
		//��ȥ��ǩ�����������еĿ�ֵ��ǩ������
		$para_filter = paraFilter($para_temp);

		//�Դ�ǩ��������������
		$para_sort = argSort($para_filter);

		//����ǩ�����
		$mysign = buildMysign($para_sort, trim($aliapy_config['key']), strtoupper(trim($aliapy_config['sign_type'])));
		
		//ǩ�������ǩ����ʽ���������ύ��������
		$para_sort['sign'] = $mysign;
		$para_sort['sign_type'] = strtoupper(trim($aliapy_config['sign_type']));
		
		return $para_sort;
	}

	/**
     * ����Ҫ�����֧�����Ĳ�������
     * @param $para_temp ����ǰ�Ĳ�������
	 * @param $aliapy_config ����������Ϣ����
     * @return Ҫ����Ĳ��������ַ���
     */
	function buildRequestParaToString($para_temp,$aliapy_config) {
		//�������������
		$para = $this->buildRequestPara($para_temp,$aliapy_config);
		
		//�Ѳ�����������Ԫ�أ����ա�����=����ֵ����ģʽ�á�&���ַ�ƴ�ӳ��ַ��������Բ���ֵ��urlencode����
		$request_data = createLinkstringUrlencode($para);
		
		return $request_data;
	}
	
    /**
     * �����ύ��HTML����
     * @param $para_temp �����������
     * @param $gateway ���ص�ַ
     * @param $method �ύ��ʽ������ֵ��ѡ��post��get
     * @param $button_name ȷ�ϰ�ť��ʾ����
     * @return �ύ��HTML�ı�
     */
function create_url(){
	
}
	function buildForm($para_temp, $gateway, $method, $button_name, $aliapy_config) {
		//�������������
		$para = $this->buildRequestPara($para_temp,$aliapy_config);
		$url=$gateway."_input_charset=".trim(strtolower($aliapy_config['input_charset']));
		while (list ($key, $val) = each ($para)) {
            $url.= "&$key=".urlencode($val);
        }
        return $url;
		$sHtml = "<form id='alipaysubmit' name='alipaysubmit' action='".$gateway."_input_charset=".trim(strtolower($aliapy_config['input_charset']))."' method='".$method."'>";
		while (list ($key, $val) = each ($para)) {
            $sHtml.= "<input type='hidden' name='".$key."' value='".$val."'/>";
        }

		//submit��ť�ؼ��벻Ҫ����name����
        $sHtml = $sHtml."<input type='submit' value='".$button_name."'></form>";
		
		$sHtml = $sHtml."<script>document.forms['alipaysubmit'].submit();</script>";
		
		return $sHtml;
	}
	
	/**
     * ����ģ��Զ��HTTP��POST���󣬻�ȡ֧�����ķ���XML������
	 * ע�⣺�ù���PHP5����������֧�֣���˱�������������ص�����װ��֧��DOMDocument��SSL��PHP���û��������鱾�ص���ʱʹ��PHP�������
     * @param $para_temp �����������
     * @param $gateway ���ص�ַ
	 * @param $aliapy_config ����������Ϣ����
     * @return ֧��������XML������
     */
	function sendPostInfo($para_temp, $gateway, $aliapy_config) {
		$xml_str = '';
		
		//��������������ַ���
		$request_data = $this->buildRequestParaToString($para_temp,$aliapy_config);
		//�����url��������
		$url = $gateway . $request_data;
		//Զ�̻�ȡ����
		$xml_data = getHttpResponse($url,trim(strtolower($aliapy_config['input_charset'])));
		//����XML
		$doc = new DOMDocument();
		$doc->loadXML($xml_data);

		return $doc;
	}
}

function alipayurl($out_trade_no,$price,$subject,$body,$show_url,$return_url,$notify_url)
{
	global $aliapy_config;
$logistics_fee		= "0.00";				//�������ã����˷ѡ�
$logistics_type		= "EXPRESS";			//�������ͣ�����ֵ��ѡ��EXPRESS����ݣ���POST��ƽ�ʣ���EMS��EMS��
$logistics_payment	= "SELLER_PAY";			//����֧����ʽ������ֵ��ѡ��SELLER_PAY�����ҳе��˷ѣ���BUYER_PAY����ҳе��˷ѣ�

$receive_name		= "�ջ�������";			//�ջ����������磺����
$receive_address	= "�ջ��˵�ַ";			//�ջ��˵�ַ���磺XXʡXXX��XXX��XXX·XXXС��XXX��XXX��ԪXXX��
$receive_zip		= "123456";				//�ջ����ʱ࣬�磺123456
$receive_phone		= "0571-81234567";		//�ջ��˵绰���룬�磺0571-81234567
$receive_mobile		= "13312341234";		//�ջ����ֻ����룬�磺13312341234

	$parameter = array(
		"service"		=> "trade_create_by_buyer",
		"payment_type"	=> "1",
		
		"partner"		=> trim($aliapy_config['partner']),
		"_input_charset"=> trim(strtolower($aliapy_config['input_charset'])),
		"seller_email"	=> trim($aliapy_config['seller_email']),
		"return_url"	=> trim($return_url),
		"notify_url"	=> trim($notify_url),

		"out_trade_no"	=> $out_trade_no,
		"subject"		=> $subject,
		"body"			=> $body,
		"price"			=> $price,
		"quantity"		=> 1,
		
		"logistics_fee"		=> $logistics_fee,
		"logistics_type"	=> $logistics_type,
		"logistics_payment"	=> $logistics_payment,
		
		"receive_name"		=> $receive_name,
		"receive_address"	=> $receive_address,
		"receive_zip"		=> $receive_zip,
		"receive_phone"		=> $receive_phone,
		"receive_mobile"	=> $receive_mobile,
		
		"show_url"		=> $show_url
);


//�����׼˫�ӿ�
$alipayService = new AlipayService($aliapy_config);
$html_text = $alipayService->trade_create_by_buyer($parameter);
return $html_text;
}
function alipaynotify(){
	global $aliapy_config;
	$alipayNotify = new AlipayNotify($aliapy_config);
	$verify_result = $alipayNotify->verifyNotify();
	if(!$verify_result){
		echo "fail";
		return false;
	}
	if($_POST['trade_status'] == 'TRADE_FINISHED'||$_POST['trade_status']=='TRADE_SUCCESS'||$_POST['trade_status'] == 'WAIT_BUYER_CONFIRM_GOODS')
	{
		echo "success";
		return true;
	}
	else 
	{
		echo "fail";
		return false;
	}
}
function alipayreturn(){
	global $aliapy_config;
	$alipayNotify = new AlipayNotify($aliapy_config);
	$verify_result = $alipayNotify->verifyReturn();
	return $verify_result;
}
?>
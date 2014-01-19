<?php
function build_mysign($sort_array,$security_code,$sign_type = "MD5") {
	$prestr = create_linkstring($sort_array);
	$prestr = $prestr.$security_code;
	$mysgin = sign($prestr,$sign_type);
	return $mysgin;
}
function create_linkstring($array) {
	$arg  = "";
	while (list ($key, $val) = each ($array)) {
		$arg.=$key."=".$val."&";
	}
	$arg = substr($arg,0,count($arg)-2);
	return $arg;
}
function para_filter($parameter) {
	$para = array();
	while (list ($key, $val) = each ($parameter)) {
		if($key == "sign" || $key == "sign_type" || $val == ""){
			continue;
		}else{
			$para[$key] = $parameter[$key];
		}
	}
	return $para;
}
function arg_sort($array) {
	ksort($array);
	reset($array);
	return $array;
}
function sign($prestr,$sign_type) {
	return md5($prestr);
}
function log_result($word) {
}
function charset_encode($input,$_output_charset ,$_input_charset) {
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
function charset_decode($input,$_input_charset ,$_output_charset) {
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
function query_timestamp($partner) {
	$url = 'https://mapi.alipay.com/gateway.do?service=query_timestamp&partner='.trim($partner);
	$data = file_get_contents($url);

	preg_match('/<encrypt_key>(.*)<\/encrypt_key>/i', $data, $matches);
	return $matches[1];
	$encrypt_key = "";

	$doc = new DOMDocument();
	$doc->load($url);
	$itemEncrypt_key = $doc->getElementsByTagName('encrypt_key');
	$encrypt_key = $itemEncrypt_key->item(0)->nodeValue;
}

?>
<?php
class paypal{
	var $logfile = 'ipnlog.txt';
	var $form = array();
	var $log = 0;
	var $form_action = 'https://www.paypal.com/cgi-bin/webscr';
	var $paypalurl = 'www.paypal.com';
	var $type = 'payment';
	var $posted_data = array();
	var $action = '';
	var $error = '';
	var $ipn = '';
	var $price = 0;
	var $payment_success = 0;
	var $ignore_type = array();
	function paypal($price_item = 0){
		$this -> price = $price_item;
	}
	function validate_ipn(){
		if(!empty($_POST)){
			$postvars = 'cmd=_notify-validate';
			$this -> price = 0;
			foreach($_POST as $key => $value){
				$postvars .= '&'.$key.'='.urlencode($value);
				$this -> posted_data[$key] = $value;
			}

			$errstr = $errno = '';
			$fp = @ fsockopen('ssl://'.$this -> paypalurl, 443, $errno, $errstr, 30);
			if(!$fp){
				$this -> error = "fsockopen error no. $errno: $errstr";
				return 0;
			}
			@ fputs($fp, "POST /cgi-bin/webscr HTTP/1.1\r\n");
			@ fputs($fp, "Host: " . $this -> paypalurl . "\r\n");
			@ fputs($fp, "Content-type: application/x-www-form-urlencoded\r\n");
			@ fputs($fp, "Content-length: " . strlen($postvars) . "\r\n");
			@ fputs($fp, "Connection: close\r\n\r\n");
			@ fputs($fp, $postvars . "\r\n\r\n");
			$str = '';
			while(!feof($fp)) $str .= @ fgets($fp, 1024);
			@ fclose($fp);
			if(strexists($str, 'VERIFIED')){
				if($this -> log) $this -> log_results(1);
				if(preg_match('/subscr/', $this -> posted_data['txn_type'])){
					$this -> type = 'subscription';
					if(in_array($this -> posted_data['txn_type'], $this -> ignore_type)) return 0;
					if($this -> posted_data['txn_type'] == 'subscr_payment'){
						if($this -> posted_data['payment_status'] == 'Completed'){
							$this -> price = $this -> posted_data['mc_amount3'];
							$this -> payment_success = 1;
						}
					}
				}else{
					if($this -> posted_data['payment_status'] == 'Completed'){
						$this -> type = 'payment';
						$this -> price = $this -> posted_data['mc_gross'];
						$this -> payment_success = 1;
					}
				}
				return 1;
			}else{
				if($this -> log) $this -> log_results(0);
				$this -> error = 'IPN verification failed.';
				return 0;
			}
		}else return 0;
	}
	function add($name, $value){
		$this -> form[$name] = $value;
	}
	function remove($name){
		unset($this -> form[$name]);
	}
	function enable_recurring(){
		$this -> type = 'subscription';
		$this -> add('src', '1');
		$this -> add('sra', '1');
		$this -> add('cmd', '_xclick-subscriptions');
		$this -> remove('amount');
		$this -> add('no_note', 1);
		$this -> add('no_shipping', 1);
		$this -> add('currency_code', 'USD');
		$this -> add('a3', $this -> price);
		$this -> add('notify_url', $this -> ipn);
	}
	function recurring_year($num){
		$this -> enable_recurring();
		$this -> add('t3', 'Y');
		$this -> add('p3', $num);
	}
	function recurring_month($num){
		$this -> enable_recurring();
		$this -> add('t3', 'M');
		$this -> add('p3', $num);
	}
	function recurring_day($num){
		$this -> enable_recurring();
		$this -> add('t3', 'D');
		$this -> add('p3', $num);
	}
	function enable_payment(){
		$this -> type = 'payment';
		$this -> remove('t3');
		$this -> remove('p3');
		$this -> remove('a3');
		$this -> remove('src');
		$this -> remove('sra');
		$this -> add('amount', $this -> price);
		$this -> add('cmd', '_xclick');
		$this -> add('no_note', 1);
		$this -> add('no_shipping', 1);
		$this -> add('currency_code', 'USD');
		$this -> add('notify_url', $this -> ipn);
	}
	function output_form(){
		$return = '<form action="' . $this -> form_action . '" method="post" name="paypal">';
		foreach($this -> form as $k => $v){
			$return .= '<input type="hidden" name="' . $k . '" value="' . $v . '" />';
		}
		$return .= '</form>';
		return $return;
	}
	function reset_form(){
		$this -> form = array();
	}
	function log_results($var){
	}
	function headers_nocache(){
		header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: pre-check=0, post-check=0, max-age=0');
		header('Pragma: no-cache');
	}
}

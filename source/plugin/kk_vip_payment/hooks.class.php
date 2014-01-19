<?php

class plugin_kk_vip_payment{
	var $vars = array();
	function plugin_kk_vip_payment(){
		global $_G;
		loadcache('plugin');
		$this->vars = $_G['cache']['plugin']['kk_vip_payment'];
	}
	function common(){
		global $vipmenu, $vip;
		unset($vipmenu['30']);
		if($this->vars['replace']) unset($vipmenu['5']);
		$order = $this->vars['order'];
		$vipmenu[$order]['plugin'] = 'kk_vip_payment';
		$vipmenu[$order]['action'] = 'payment';
		$vipmenu[$order]['name']   = $this->vars['menu'];
	}
}
class plugin_kk_vip_payment_vip extends plugin_kk_vip_payment{
	function paycenter_replace(){
		if($this->vars['replace']) dheader('location: vip.php?action=payment&plugin=kk_vip_payment');
	}
}
?>
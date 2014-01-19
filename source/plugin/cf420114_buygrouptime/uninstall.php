<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$tablepre = $_G['config']['db'][1]['tablepre'];
$dbcharset = $_G['config']['db'][1]['dbcharset'];
$charset=$_G['config']['output']['charset'];
$pdbcharset=$dbcharset?$dbcharset:str_replace('-', '', $charset);

DB::query("DROP TABLE IF EXISTS `{$tablepre}cf420114_buygrouptimebypay`;");


$finish = TRUE;
?>
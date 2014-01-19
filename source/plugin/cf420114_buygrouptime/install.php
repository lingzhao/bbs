<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$tablepre = $_G['config']['db'][1]['tablepre'];
$dbcharset = $_G['config']['db'][1]['dbcharset'];
$charset=$_G['config']['output']['charset'];
$pdbcharset=$dbcharset?$dbcharset:str_replace('-', '', $charset);

DB::query("CREATE TABLE IF NOT EXISTS `{$tablepre}cf420114_buygrouptimebypay` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `uid` mediumint(8) unsigned NOT NULL,
  `user` char(15) NOT NULL,
  `price` decimal(8,2) unsigned NOT NULL,
  `order` varchar(30) NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  `groupname` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `alipayno` (`order`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM ".(mysql_get_server_info() < '4.1'?'':"DEFAULT CHARSET=$pdbcharset")."");


$finish = TRUE;
?>
<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}
$sql = <<<EOF
CREATE TABLE IF NOT EXISTS `pre_plugin_mini_download_item` (
  `id` int(11) NOT NULL auto_increment,
  `diynum` int(11) NOT NULL default '99',
  `topid` int(10) NOT NULL,
  `cid` smallint(4) NOT NULL,
  `did` smallint(4) NOT NULL,
  `uid` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `pic` text NOT NULL,
  `view` int(10) NOT NULL,
  `pay` int(10) NOT NULL,
  `down` int(10) NOT NULL,
  `title` text NOT NULL,
  `star` int(10) NULL,
  `sd1` text NOT NULL,
  `sd2` text NOT NULL,
  `sd3` text NOT NULL,
  `sd4` text NOT NULL,
  `sd5` text NOT NULL,
  `sd6` text NOT NULL,
  `sd7` text NOT NULL,
  `sd8` text NOT NULL,
  `price` int(10) NOT NULL,
  `info` text NOT NULL,
  `homeurl` text NOT NULL,
  `uploadname` text NOT NULL,
  `upload` text NOT NULL,
  `downtitle` text NOT NULL,
  `downurl` text NOT NULL,
  `voter` int(15) NOT NULL,
  `total` int(15) NOT NULL,
  `display` tinyint(4) NOT NULL,
  `tuijian` tinyint(4) NOT NULL,
  `jianping` text NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `pre_plugin_mini_download_post` (
  `id` int(11) NOT NULL auto_increment,
  `sid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `voter` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `display` tinyint(4) NOT NULL,
  `dateline` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;


CREATE TABLE IF NOT EXISTS `pre_plugin_mini_download_chanel` (
  `id` int(11) NOT NULL auto_increment,
  `upid` int(11) NOT NULL,
  `subid` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `displayorder` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `pre_plugin_mini_download_banner`(
`id` SMALLINT( 6 ) NOT NULL auto_increment,
`title` CHAR( 80 ) NOT NULL ,
`img` VARCHAR( 300 ) NOT NULL ,
`info` VARCHAR( 500 ) NOT NULL ,
`url` VARCHAR( 300 ) NOT NULL ,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;


EOF;
runquery($sql);
$finish = true;
?>
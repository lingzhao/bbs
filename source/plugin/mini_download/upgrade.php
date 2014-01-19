<?php
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}
$sql = <<<EOT
alter table pre_mini_download_item rename to pre_plugin_mini_download_item;
alter table pre_mini_download_chanel rename to pre_plugin_mini_download_chanel;
alter table pre_mini_download_post rename to pre_plugin_mini_download_post;

Alter TABLE `pre_plugin_mini_download_item` change id id int(11) NOT NULL auto_increment,
change img pic text NOT NULL,
change pageurl homeurl text NOT NULL,
change authorid uid int(11) NOT NULL,
change chanel did smallint(4) NOT NULL,
change status display smallint(4) NOT NULL;

ALTER TABLE `pre_plugin_mini_download_chanel` change id id int(11) NOT NULL auto_increment,
change orderid displayorder int(10) NOT NULL,
change name subject varchar(255) NOT NULL;

ALTER TABLE `pre_plugin_mini_download_post` change pid id int(11) NOT NULL auto_increment,
change itemid  sid int(11) NOT NULL,
change content message text NOT NULL,
change poster author varchar(50) NOT NULL,
change posterid uid int(11) NOT NULL;

ALTER TABLE `pre_plugin_mini_download_item` ADD `diynum` int(11) NOT NULL AFTER `id`,
ADD `topid` int(10) NOT NULL AFTER `diynum`,
ADD `cid` smallint(4) NOT NULL AFTER `topid`,
ADD `pay` int(10) NOT NULL AFTER `view`,
ADD `sd7` text NOT NULL AFTER `sd6`,
ADD `sd8` text NOT NULL AFTER `sd7`,
ADD `price` int(10) NOT NULL AFTER `sd8`,
ADD `uploadname` text NOT NULL AFTER `homeurl`,
ADD `upload` text NOT NULL AFTER `uploadname`,
ADD `voter` int(15) NOT NULL AFTER `upload`,
ADD `total` int(15) NOT NULL AFTER `voter`,
ADD `jianping` text NOT NULL AFTER `tuijian`;

ALTER TABLE pre_plugin_mini_download_chanel ADD `upid` int(11) NOT NULL AFTER `id`,
ADD `subid` varchar(255) NOT NULL AFTER `upid`;


ALTER TABLE pre_plugin_mini_download_post ADD `voter` int(11) NOT NULL AFTER `message`,
ADD `total` int(11) NOT NULL AFTER `voter`,
ADD `display` tinyint(4) NOT NULL AFTER `total`;

CREATE TABLE IF NOT EXISTS `pre_plugin_mini_download_banner`(
`id` SMALLINT( 6 ) NOT NULL auto_increment,
`title` CHAR( 80 ) NOT NULL ,
`img` VARCHAR( 300 ) NOT NULL ,
`info` VARCHAR( 500 ) NOT NULL ,
`url` VARCHAR( 300 ) NOT NULL ,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM;
EOT;

runquery($sql);

$finish = TRUE;
?>
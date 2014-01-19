<?php
if(!defined('IN_ADMINCP')) exit('Access Denied');

include DISCUZ_ROOT.'./source/plugin/kk_vip_payment/upgrade.php';

$sql=<<<EOF
DROP TABLE IF EXISTS `pre_kk_vip_payment`;
DROP TABLE IF EXISTS `pre_kk_vip_payment_log`;
DROP TABLE IF EXISTS `pre_kk_vip_payment_plan`;
CREATE TABLE `pre_kk_vip_payment_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `trade_no` char(18) NOT NULL,
  `month` int(11) NOT NULL,
  `plan_id` smallint(6) NOT NULL,
  `money` float NOT NULL,
  `status` tinyint(1) NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM;
CREATE TABLE `pre_kk_vip_payment_plan` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(64) NOT NULL,
  `money` float NOT NULL,
  `days` smallint(8) unsigned NOT NULL,
  `displayorder` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `displayorder` (`displayorder`)
) ENGINE=MyISAM;
EOF;
runquery($sql);
$finish = TRUE;
?>
<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$sql = <<<EOF
DROP TABLE IF EXISTS `pre_plugin_mini_download_item`;
DROP TABLE IF EXISTS `pre_plugin_mini_download_post`;
DROP TABLE IF EXISTS `pre_plugin_mini_download_chanel`;
DROP TABLE IF EXISTS `pre_plugin_mini_download_banner`;
EOF;

runquery($sql);

$finish = TRUE;

?>
<?php
if(!defined('IN_DISCUZ')) exit('Access Denied');
$sql=<<<EOF
DROP TABLE IF EXISTS `pre_kk_vip_payment`;
DROP TABLE IF EXISTS `pre_kk_vip_payment_log`;
DROP TABLE IF EXISTS `pre_kk_vip_payment_plan`;
EOF;
runquery($sql);
$finish = TRUE;
?>
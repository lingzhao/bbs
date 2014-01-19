<?php
/**      и╬ЁЩнд╪Ч
 **      $Id: uninstall.php createtime 2013-05-29 by cnzzstat $
 **/

if(!defined('IN_DISCUZ')) {
        exit('Access Denied');
}

$sql = <<<EOF
DROP TABLE pre_common_plugin_cnzztongji;
DROP TABLE pre_common_plugin_cnzz_user;
EOF;

runquery($sql);

$finish = TRUE;
?>
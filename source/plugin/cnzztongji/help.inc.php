<?php
/**
 * 后台在线帮助菜单
 * @createtime 2013-05-29
 */

if (! defined ( 'IN_DISCUZ' ) || ! defined ( 'IN_ADMINCP' )) {
	exit ( 'Access Denied' );
}
define('CNZZTONGJI',dirname( __FILE__ ));
require_once CNZZTONGJI . '/config/common.const.php';
require_once DISCUZ_ROOT . './source/discuz_version.php';

$recPluginCenter = 'http://help.cnzz.com/tongji/';
$redirectUrl = sprintf ( '%s?siteurl=%s&sitecharset=%s&siteversion=%s&version=%s', $recPluginCenter, urlencode ( $_G['siteurl'] ), CHARSET, DISCUZ_VERSION . '_' . DISCUZ_RELEASE, CNZZTONGJI_VERSION );
echo sprintf('<script>window.location.href="%s";</script>', $redirectUrl);

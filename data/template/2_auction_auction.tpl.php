<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('auction');
0
|| checktplrefresh('./source/plugin/auction/template/auction.htm', './template/iscwo_design_2013/common/header.htm', 1390630315, 'auction', './data/template/2_auction_auction.tpl.php', './source/plugin/auction/template', 'auction')
|| checktplrefresh('./source/plugin/auction/template/auction.htm', './template/iscwo_design_2013/common/footer.htm', 1390630315, 'auction', './data/template/2_auction_auction.tpl.php', './source/plugin/auction/template', 'auction')
|| checktplrefresh('./source/plugin/auction/template/auction.htm', './template/iscwo_design_2013/common/header_common.htm', 1390630315, 'auction', './data/template/2_auction_auction.tpl.php', './source/plugin/auction/template', 'auction')
|| checktplrefresh('./source/plugin/auction/template/auction.htm', './template/iscwo_design_2013/common/header_qmenu.htm', 1390630315, 'auction', './data/template/2_auction_auction.tpl.php', './source/plugin/auction/template', 'auction')
|| checktplrefresh('./source/plugin/auction/template/auction.htm', './template/iscwo_design_2013/common/pubsearchform.htm', 1390630315, 'auction', './data/template/2_auction_auction.tpl.php', './source/plugin/auction/template', 'auction')
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_common.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo IMGDIR;?>/css/jquery-1.4.1.min.js" type="text/javascript" type="text/javascript"></script>
<script language="javascript">var jq = jQuery.noConflict();</script>
<script src="<?php echo IMGDIR;?>/css/jquery.easing.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo IMGDIR;?>/css/index.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
<!--[if IE 6]>
<script src="<?php echo IMGDIR;?>/css/DD_belatedPNG.js" type="text/javascript"></script>
<script>DD_belatedPNG.fix('span,.sylist_tx,.sylist_txcover,.yyicon2,.report');</script>
<![endif]-->
<script type="text/javascript">window.onerror=function(){return true;}</script><?php require_once("template/iscwo_design_2013/forum/vime.php");?><meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
<link rel="stylesheet" type="text/css"  href="<?php echo IMGDIR;?>/index.css?<?php echo VERHASH;?>" />
</head>

<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
  <!--[if IE 6]>
         <div id="update-broswer">
            <div class="wrap">
              <dl>
                <dd class="wrap_z">请升级你的浏览器，告别IE6，体验更精彩的互联网</dd>
                <dd class="wrap_y">
                    <a href="http://info.msn.com.cn/ie9/" target="_blank"><img src="template/iscwo_design_2013/img/images/ie6_ie9_logo.gif" title="IE9"/></a>　　<a href="http://www.google.cn/chrome/" target="_blank"><img src="template/iscwo_design_2013/img/images/ie6_chrome_logo.gif" title="Chrome"/></a>　　<a href="http://www.firefox.com.cn/download/" target="_blank"><img src="template/iscwo_design_2013/img/images/ie6_firefox_logo.gif" title="Firefox"/></a>
                </dd>
              </dl>
            </div>
        </div>    
      <![endif]-->
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { include template('common/header_diy'); } if(check_diy_perm($topic)) { include template('common/header_diynav'); } if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } if(empty($topic) || $topic['useheader']) { if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c">
    请选择 <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">进入手机版</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">继续访问电脑版</a>
</div>
<?php } if($_G['setting']['shortcut'] && $_G['member']['credits'] >= $_G['setting']['shortcut']) { ?>
<div id="shortcut">
<span><a href="javascript:;" id="shortcutcloseid" title="关闭">关闭</a></span>
您经常访问 <?php echo $_G['setting']['bbname'];?>，试试添加到桌面，访问更方便！
<a href="javascript:;" id="shortcuttip">添加 <?php echo $_G['setting']['bbname'];?> 到桌面</a>
</div>
<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
<?php } if(!IS_ROBOT) { if($_G['uid']) { ?>
<ul id="myprompt_menu" class="p_pop" style="display: none;">
<li><a href="home.php?mod=space&amp;do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news<?php if(empty($_G['member']['newpm'])) { ?>_0<?php } ?>"></em>消息</a></li>

<li><a href="home.php?mod=follow&amp;do=follower"><em class="prompt_follower<?php if(empty($_G['member']['newprompt_num']['follower'])) { ?>_0<?php } ?>"></em>新听众<?php if($_G['member']['newprompt_num']['follower']) { ?>(<?php echo $_G['member']['newprompt_num']['follower'];?>)<?php } ?></a></li>

<?php if($_G['member']['newprompt'] && $_G['member']['newprompt_num']['follow']) { ?>
<li><a href="home.php?mod=follow"><em class="prompt_concern"></em>我关注的(<?php echo $_G['member']['newprompt_num']['follow'];?>)</a></li>
<?php } if($_G['member']['newprompt']) { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { ?><li><a href="home.php?mod=space&amp;do=notice&amp;view=<?php echo $key;?>"><em class="notice_<?php echo $key;?>"></em><?php echo lang('template', 'notice_'.$key); ?>(<span class="rq"><?php echo $val;?></span>)</a></li>
<?php } } if(empty($_G['cookie']['ignore_notice'])) { ?>
<li class="ignore_noticeli"><a href="javascript:;" onclick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="暂不提醒"><em class="ignore_notice"></em></a></li>
<?php } ?>
</ul>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;">
<?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onclick="extstyle('')" title="默认"><i></i></span><?php } if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?><span class="sslct_btn" onclick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span>
<?php } ?>
</div>
<?php } ?><div id="qmenu_menu" class="p_pop <?php if(!$_G['uid']) { ?>blk<?php } ?>" style="display: none;">
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_top'])) echo $_G['setting']['pluginhooks']['global_qmenu_top'];?>
<?php if($_G['uid']) { ?>
<ul class="cl nav"><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
<?php } elseif($_G['connectguest']) { ?>
<div class="ptm pbw hm">
请先<br /><a class="xi2" href="member.php?mod=connect"><strong>完善帐号信息</strong></a> 或 <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>绑定已有帐号</strong></a><br />后使用快捷导航
</div>
<?php } else { ?>
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
<?php } if($_G['setting']['showfjump']) { ?><div id="fjump_menu" class="btda"></div><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_bottom'])) echo $_G['setting']['pluginhooks']['global_qmenu_bottom'];?>
</div><?php } if($_G['uid']) { ?>

                <div onMouseOver="document.getElementById('qmenu2').className='um_a3';" onMouseOut="document.getElementById('qmenu2').className='um_a2';"> 
                <div id="qmenu2_menu" class="iscwo_menu2" style="display: none;">

        <ul>

<li><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" class="um_username" hidefocus="true" title="访问我的空间"><?php echo $_G['member']['username'];?></a></li>
<li><a href="home.php?mod=spacecp&amp;ac=usergroup" class="um_group" hidefocus="true"><?php echo $_G['group']['grouptitle'];?></a></li>
    <li><a href="home.php?mod=spacecp" class="um_setup" hidefocus="true">设置</a></li>


<?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<li><a href="portal.php?mod=portalcp" class="um_portalcp" hidefocus="true"><?php if($_G['setting']['portalstatus'] ) { ?>门户管理<?php } else { ?>模块管理<?php } ?></a></li>
<?php } if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
<li><a href="admin.php" target="_blank" class="um_admincp" hidefocus="true">管理中心</a></li>
<?php if(check_diy_perm($topic)) { ?>
<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();" class="xi2">DIY编辑</a></li>
<?php } } ?>
<li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>" class="um_logout" hidefocus="true">退出</a></li>
        </ul>

        </div>
</div>							
<?php if($iscwo_header_nv_top==1) { ?>
                         <div onMouseOver="document.getElementById('qmenu1').className='um_a1 um_upload hd_hover';" onMouseOut="document.getElementById('qmenu1').className='um_a1 um_upload';"> 
                         <div id="qmenu1_menu" class="iscwo_menu cl"  style="display: none;"  >
 <ul>
<li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=49" target="_blank">上传作品</a></li>
<li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=52" target="_blank">发布教程</a></li>
<li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=51" target="_blank">分享素材</a></li>
<li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=53" target="_blank">发布招聘</a></li>
 </ul>
 </div>
 </div>
<?php } if($iscwo_header_nv_qmenu==1) { ?>
<div onMouseOver="document.getElementById('qmenu3').className='um_a1 um_home hd_hover';" onMouseOut="document.getElementById('qmenu3').className='um_a1 um_home';"> 
                         <div id="qmenu3_menu" class="iscwo_menu cl"  style="display: none;"  >
 <ul class="iscwo_menu_ul"><?php if(is_array($_G['setting']['mynavs'])) foreach($_G['setting']['mynavs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?>
<li><?php echo $nav['code'];?></li>
<?php } } ?>
</ul>
 </div>
 </div>
<?php } } ?>
<div id="bgtop">	

<div id="hd" class="iscwo_hd">

<div class="wp1024 cl">
<div class="hdc cl">
<div class="z"><?php if(is_array($_G['setting']['topnavs']['0'])) foreach($_G['setting']['topnavs']['0'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra1'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra1'];?>
</div><?php $mnid = getcurrentnav();?><div class="iscwo_uerinf cl">
<?php if($_G['uid']) { ?>						
<div class="iscwo_um cl">
 
 <a href="" id="qmenu1" onMouseOver="showMenu({'ctrlid':'qmenu1','pos':'34','ctrlclass':'a','duration':2});" class="um_a1 um_upload"><span></span></a>

 <a href="" id="qmenu3" onMouseOver="showMenu({'ctrlid':'qmenu3','pos':'34','ctrlclass':'a','duration':2});" class="um_a1 um_home"><span></span></a>
 
 <a href="home.php?mod=space&amp;do=pm" id="pm_ntc" class="um_a1 um_pm" ><span class="new_pm1"><?php if($_G['member']['newpm']) { ?><em class="new_pm2">1</em><?php } ?></span></a>
 <a href="home.php?mod=space&amp;do=notice" class="um_a1 um_notice" id="myprompt" ><span class="new_pm1"><?php if($_G['member']['newprompt']) { ?><em class="new_pm2"><?php echo $_G['member']['newprompt'];?></em><?php } ?></span></a>
 <span id="myprompt_check" style=" display:none;"></span>
 
 <a href="javascript:;" id="qmenu2" onMouseOver="showMenu({'ctrlid':'qmenu2','pos':'34!','ctrlclass':'a','duration':2}); this.className='um_a3';" onMouseOut="this.className='um_a2';" hidefocus="true" class="um_a2"><em><?php echo avatar($_G['uid'],small);?></em></a>
</div>
<?php } elseif(!empty($_G['cookie']['loginuser'])) { ?>
<p>
<strong><a id="loginuser" class="noborder"><?php echo dhtmlspecialchars($_G['cookie']['loginuser']); ?></a></strong>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">激活</a>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
</p>
<?php } elseif(!$_G['connectguest']) { ?>
<div class="nologin cl"><?php include template('member/login_simple'); ?></div>
<?php } else { ?>
<div id="um">
<div class="avt y"><?php echo avatar(0,small);?></div>
<p>
<strong class="vwmy qq"><?php echo $_G['member']['username'];?></strong>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a>
</p>
<p>
<a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">积分: 0</a>
<span class="pipe">|</span>用户组: <?php echo $_G['group']['grouptitle'];?>
</p>
</div>
<?php } ?>
</div>
</div>
</div> 
</div><?php echo adshow("headerbanner/wp a_h");?><div id="hd">
<div id="headBar" class="wp">
<div class="hdc cl"><?php $mnid = getcurrentnav();?><h1 id="logo"><?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="<?php if($_G['setting']['domain']['app']['default']) { ?>http://<?php echo $_G['setting']['domain']['app']['default'];?>/<?php } else { ?>./<?php } ?>" title="<?php echo $_G['setting']['bbname'];?>"><?php echo $_G['style']['boardlogo'];?></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?></h1>
   <?php if($_G['setting']['search']) { $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >本版</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">文章</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">日志</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">相册</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">用户</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>
<div id="scbar" class="scbar_narrow cl">
<form id="scbar_form" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<div id="scInpBar" class="cl">
<a id="scbar_type" href="javascript:;" onclick="showMenu(this.id)" hidefocus="true">搜索</a>
<input id="scbar_txt" type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" x-webkit-speech speech />
<button id="scbar_btn" type="submit" name="searchsubmit" sc="1" value="true">搜索</button>
</div>
<div id="scbar_hot">
<?php if($_G['setting']['srchhotkeywords']) { if(is_array($_G['setting']['srchhotkeywords'])) foreach($_G['setting']['srchhotkeywords'] as $val) { if($val=trim($val)) { $valenc=rawurlencode($val);?><?php
$__FORMHASH = FORMHASH;$srchhotkeywords[] = <<<EOF


EOF;
 if(!empty($searchparams['url'])) { 
$srchhotkeywords[] .= <<<EOF

<a href="{$searchparams['url']}?q={$valenc}&source=hotsearch{$srchotquery}" target="_blank" sc="1">{$val}</a>

EOF;
 } else { 
$srchhotkeywords[] .= <<<EOF

<a href="search.php?mod=forum&amp;srchtxt={$valenc}&amp;formhash={$__FORMHASH}&amp;searchsubmit=true&amp;source=hotsearch" target="_blank" sc="1">{$val}</a>

EOF;
 } 
$srchhotkeywords[] .= <<<EOF


EOF;
?>
<?php } } echo implode('', $srchhotkeywords);; } ?>
</div>
</form>
</div>
<?php } ?>   <?php include template('common/header_us'); ?></div>
<div id="nv" class="cl">
<ul id="mainnav" class="cl"><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php if($mnid == $nav['navid']) { ?>class="a" <?php } ?><?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
<div class="secondary"><?php if(is_array($_G['setting']['topnavs']['1'])) foreach($_G['setting']['topnavs']['1'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><?php echo $nav['code'];?><?php } } ?>
</div>
<?php if(!empty($_G['setting']['pluginhooks']['global_nav_extra'])) echo $_G['setting']['pluginhooks']['global_nav_extra'];?>
</div>
<?php if(!empty($_G['setting']['plugins']['jsmenu'])) { ?>
<ul class="p_pop h_pop" id="plugin_menu" style="display: none"><?php if(is_array($_G['setting']['plugins']['jsmenu'])) foreach($_G['setting']['plugins']['jsmenu'] as $module) { ?> <?php if(!$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])) { ?>
 <li><?php echo $module['url'];?></li>
 <?php } } ?>
</ul>
<?php } ?>
<?php echo $_G['setting']['menunavs'];?>
<div id="mu" class="cl">
<?php if($_G['setting']['subnavs']) { if(is_array($_G['setting']['subnavs'])) foreach($_G['setting']['subnavs'] as $navid => $subnav) { if($_G['setting']['navsubhover'] || $mnid == $navid) { ?>
<ul class="cl <?php if($mnid == $navid) { ?>current<?php } ?>" id="snav_<?php echo $navid;?>" style="display:<?php if($mnid != $navid) { ?>none<?php } ?>">
<?php echo $subnav;?>
</ul>
<?php } } } ?>
</div>
<ul id="scbar_type_menu" class="p_pop" style="display: none;"><?php echo implode('', $slist);; ?></ul>
<script type="text/javascript">
initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
</script><?php echo adshow("subnavbanner/a_mu");?></div>
</div>

<?php if(!empty($_G['setting']['pluginhooks']['global_header'])) echo $_G['setting']['pluginhooks']['global_header'];?>
<?php } ?>
<script type="text/javascript">headDownList();</script>
<div>
</div>


<div id="wp" class="wp">
<link href="source/plugin/auction/template/style_auction.css" type="text/css" rel="stylesheet">
<div id="pt" class="wp cl">

<div class="z">
<a href="index.php" class="nvhm"><?php echo $_G['setting']['bbname'];?></a><em>&rsaquo;</em><a href="plugin.php?id=auction">积分商城</a>

<?php if($action != 'index') { ?><em>&rsaquo;</em><?php } if($action == 1) { ?>兑&nbsp;&nbsp;&nbsp;换
<?php } elseif($action == 2) { ?>抽&nbsp;&nbsp;&nbsp;奖
<?php } elseif($action != 'index') { ?>搜索
<?php } ?>


</div>
</div>
<div id="wp_auc" class="wp cl">
<div class="right">
<div class="intro"><a href="<?php echo $_G['cache']['plugin']['auction']['auc_intro'];?>" target="_blank" title="了解积分交易"><img src="source/plugin/auction/images/intro.gif"></a></div>
<?php if($_G['uid']) { ?>
<div id="userinfo" class="mod_wrap cl">

<script type="text/javascript">
function lalala(){
ajaxget('plugin.php?id=auction&action=mydetail', 'userinfo');
}
setTimeout('lalala()', 1000);
</script>

</div>
<?php } else { ?>
<div id="userinfo" class="mod_wrap login" style="height:60px;">
<p id="login"><a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href);return false;">会员登录</a></p>
<p>登录后，立即查看您的交易积分</p>
</div>
<?php } ?>
<div id="" class="mod_wrap tops" style="padding:0;width:auto;">
<h3>热门交易排行<?php if($_G['adminid'] == 1) { ?><a href="plugin.php?id=auction&amp;action=refresh" class="y"><img src="source/plugin/auction/images/refresh.png" style="width:16px !important;height:16px !important;padding:8px" /></a><?php } ?></h3>
<?php if($tops) { ?>
<div style="padding-bottom:10px;"><?php if(is_array($tops)) foreach($tops as $no => $top) { ?><ul<?php if($no+1 >= count($tops)) { ?> style="border-bottom:none;padding-bottom:0;"<?php } ?>>
<p class="y"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $top['tid'];?>" target="_blank"><img src="<?php echo $top['imgthumb'];?>" /></a><em><?php if($top['typeid'] == 1 && $top['extra']) { ?>兑&nbsp;&nbsp;&nbsp;换<?php } elseif($top['typeid'] == 1 && !$top['extra']) { ?>抽&nbsp;&nbsp;&nbsp;奖<?php } elseif($top['typeid'] == 2) { ?>竞&nbsp;&nbsp;&nbsp;拍<?php } ?></em></p>
<p class="a_hl" style=""><?php echo $no+1;; ?>. <a href="forum.php?mod=viewthread&amp;tid=<?php echo $top['tid'];?>" target="_blank"><?php echo $top['name'];?></a></p>
<p class="a_hl">人气：<em><?php echo $top['hot'];?></em></p>
<p class="a_hl">价格：<em><?php if($top['typeid'] == 1) { ?><?php echo $top['ext_price'];?><?php } elseif($top['typeid'] == 2) { if($top['top_price']) { ?><?php echo $top['top_price'];?><?php } else { ?><?php echo $top['base_price'];?><?php } } ?></em> <?php echo $_G['setting']['extcredits'][$top['extid']]['title'];?></p></ul>
<?php } ?>
</div>
<?php } ?>
</div>
</div>
<?php if(1) { ?>
<div style="padding-bottom:10px;">
<form action="plugin.php?id=auction&amp;action=search" onsubmit="searchFocus($('srchtxt'))" autocomplete="off" method="post" id="scform" target="_self">
<input type="hidden" value="auction" name="id" />
<input type="hidden" value="search" name="action" />
<input type="hidden" value="<?php if($srchtxt) { ?><?php echo $srchtxt;?><?php } else { } ?>" name="sctxt" id="sctxt" />
<table cellspacing="0" cellpadding="0">
<tr>

<td><input type="text" autocomplete="off" value="<?php if($srchtxt) { ?><?php echo $srchtxt;?><?php } else { ?>请输入搜索内容<?php } ?>" class="px z ausc" id="srctxt" name="srctxt" onchange="$('sctxt').value=this.value;"/></td>
<td>
<span class="ftid">
<select name="sctype" id="sctype" width="60" class="ps" selecti="0" style="display: none;">
<option value="0" <?php if($sctype == 0) { ?>selected="selected"<?php } ?>>请选择类型</option>
<option value="1" <?php if($sctype == 1) { ?>selected="selected"<?php } ?>>兑&nbsp;&nbsp;&nbsp;换</option>
<option value="2" <?php if($sctype == 2) { ?>selected="selected"<?php } ?>>抽&nbsp;&nbsp;&nbsp;奖</option>
<option value="3" <?php if($sctype == 3) { ?>selected="selected"<?php } ?>>竞&nbsp;&nbsp;&nbsp;拍</option>
</select>
</span>
</td>
<td>
<span class="ftid">
<select name="sctime" id="sctime" width="60" class="ps" selecti="0" style="display: none;">
<option value="0" <?php if($sctime == 0) { ?>selected="selected"<?php } ?>>请选择状态</option>
<option value="1" <?php if($sctime == 1) { ?>selected="selected"<?php } ?>>正在进行</option>
<option value="2" <?php if($sctime == 2) { ?>selected="selected"<?php } ?>>即将开始</option>
<option value="3" <?php if($sctime == 3) { ?>selected="selected"<?php } ?>>已经结束</option>
</select>
</span>			
</td>
<td><button value="true" class="pn pnc" id="search_submit" name="searchsubmit" type="submit"><strong>搜索</strong></button></td>
</tr>
</table>
<div style="display: none" class="p_pop cl" id="sctype_menu">
<ul>
<li><input type="radio" value="1" name="sctype" class="pr" id="sc_type1"><label title="!search_type1!" for="sc_type1">!search_type1!</label></li>
<li><input type="radio" value="2" name="sctype" class="pr" id="sc_type2"><label title="!search_type2!" for="sc_type2">!search_type2!</label></li>
</ul>
</div>
<div style="display: none" class="p_pop cl" id="sctime_menu">
<ul>
<li><input type="radio" value="being" name="sctime" class="pr" id="sc_time_being"><label title="!search_time_being!" for="sc_time_being">!search_type1!</label></li>
<li><input type="radio" value="will" name="sctime" class="pr" id="sc_time_will"><label title="!search_time_will!" for="sc_time_will">!search_type2!</label></li>
<li><input type="radio" value="been" name="sctime" class="pr" id="sc_time_been"><label title="!search_time_been!" for="sc_time_been">!search_type2!</label></li>
</ul>
</div>
<input type="hidden" value="<?php echo FORMHASH;?>" name="formhash" />
</form>
<script type="text/javascript">
initSearchmenu('srctxt');
simulateSelect('sctype');
simulateSelect('sctime');
$('scbar').style.display = 'none';
</script>
</div>
<?php } ?>
<div class="left" id="left">
<?php if($action == 'index') { ?>
<div style="padding-bottom:10px;"><img src="./source/plugin/auction/images/nav.png"></div>
<div class="mod_wrap aucd cl">
<h2><span class="y"><a href="plugin.php?id=auction&amp;action=search&amp;sctime=1">更多</a></span>最近热卖</h2>
<?php if($type1) { if(is_array($type1)) foreach($type1 as $auc) { ?><div class="aucdd">
<p class="a_n"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $auc['tid'];?>" target="_blank"><?php echo $auc['name'];?></a></p>
<?php if($auc['starttimefrom'] < $_G['timestamp']) { ?><input type="hidden" id="<?php echo $auc['tid'];?>" value="<?php echo $auc['starttimeto'];?>"/><?php } ?>
<div class="pic" style="height:146px;"><?php if($auc['typeid'] == 1 && $auc['extra']) { ?><div class="number" title="先到先得">先到先得</div><?php } ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $auc['tid'];?>" title="<?php echo $auc['name'];?>"><img src="<?php echo $auc['att'];?>"></a></div>
<div class="pic">
<p id="time_<?php echo $auc['tid'];?>" class="timeline a_ct"><?php if($auc['starttimefrom'] < $_G['timestamp']) { ?>--:--:--<?php } else { ?>即将开始<?php } ?></p>
<p class="a_lt"><span>市场价：</span><del><?php echo $auc['real_price'];?></del></p>
<p class="a_lt"><span><?php if($auc['typeid'] == 1 && $auc['extra']) { ?>兑&nbsp;&nbsp;&nbsp;换<?php } elseif($auc['typeid'] == 1 && !$auc['extra']) { ?>抽&nbsp;&nbsp;&nbsp;奖<?php } else { ?>竞&nbsp;&nbsp;&nbsp;拍<?php } ?>：</span><em><?php if($auc['typeid'] == 1) { ?><?php echo $auc['ext_price'];?><?php } elseif($auc['typeid'] == 2) { if($auc['top_price']) { ?><?php echo $auc['top_price'];?><?php } else { ?><?php echo $auc['base_price'];?><?php } } ?></em> <?php echo $_G['setting']['extcredits'][$auc['extid']]['title'];?></p>
<p class="a_ct" id="vd_<?php echo $auc['tid'];?>"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $auc['tid'];?>" target="_blank" style="background-image:url(source/plugin/auction/images/auction<?php if($auc['typeid'] == 1 && $auc['extra']) { ?>1<?php } elseif($auc['typeid'] == 1 && !$auc['extra']) { ?>2<?php } elseif($auc['typeid'] == 2) { } ?>.png);">查看详情&rsaquo;&rsaquo;</a></p>
</div>
</div>
<?php } } ?>
</div>
<div class="mod_wrap aucd cl">
<h2><span class="y"><a href="plugin.php?id=auction&amp;action=search&amp;sctime=3">更多</a></span>往期交易</h2>
<?php if($type2) { if(is_array($type2)) foreach($type2 as $auc) { ?><div class="aucdd">
<p class="a_n"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $auc['tid'];?>" target="_blank"><?php echo $auc['name'];?></a></p>
<?php if($auc['starttimefrom'] < $_G['timestamp']) { ?><input type="hidden" id="<?php echo $auc['tid'];?>" value=""/><?php } ?>
<div class="pic" style="height:146px;">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $auc['tid'];?>" title="<?php echo $auc['name'];?>"><img src="<?php echo $auc['att'];?>"></a></div>
<div class="pic">
<p id="time_<?php echo $auc['tid'];?>" class="timeline a_ct"><?php if($auc['starttimefrom'] < $_G['timestamp']) { ?>--:--:--<?php } else { ?>即将开始<?php } ?></p>
<p class="a_lt"><span>市场价：</span><del><?php echo $auc['real_price'];?></del></p>
<p class="a_lt"><span><?php if($auc['typeid'] == 1 && $auc['extra']) { ?>兑&nbsp;&nbsp;&nbsp;换<?php } elseif($auc['typeid'] == 1 && !$auc['extra']) { ?>抽&nbsp;&nbsp;&nbsp;奖<?php } else { ?>竞&nbsp;&nbsp;&nbsp;拍<?php } ?>：</span><em><?php if($auc['typeid'] == 1) { ?><?php echo $auc['ext_price'];?><?php } elseif($auc['typeid'] == 2) { if($auc['top_price']) { ?><?php echo $auc['top_price'];?><?php } else { ?><?php echo $auc['base_price'];?><?php } } ?></em> <?php echo $_G['setting']['extcredits'][$auc['extid']]['title'];?></p>
<p class="a_ct" id="vd_<?php echo $auc['tid'];?>"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $auc['tid'];?>" target="_blank">查看详情&rsaquo;&rsaquo;</a></p>
</div>
</div>
<?php } } ?>		
</div>
<?php } else { ?>

<div>
<h3>
<em class="sc_h_l"><img src="source/plugin/auction/images/h_l.gif"></em>
<em class="sc_h_r"><img src="source/plugin/auction/images/h_r.gif"></em>
<span class="y"><a href="plugin.php?id=auction">回到交易首页</a></span>
搜索
</h3>
<div class="sc_cnt cl">
<?php if($aucs) { if(is_array($aucs)) foreach($aucs as $no => $auc) { ?><div class="auc_ls cl"<?php if($no+1>=count($aucs)) { ?> style="border-bottom:none;"<?php } ?>>
<?php if($auc['starttimefrom'] < $_G['timestamp']) { ?><input type="hidden" id="<?php echo $auc['tid'];?>" value="<?php echo $auc['starttimeto'];?>"/><?php } ?>
<div class="ls_p">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $auc['tid'];?>" title="<?php echo $auc['name'];?>"><img src="<?php echo $auc['att'];?>"></a>
</div>
<div class="ls_d">
<p><a href="forum.php?mod=viewthread&amp;tid=<?php echo $auc['tid'];?>" title="<?php echo $auc['name'];?>"><?php echo $auc['name'];?></a></p>
<p class="a_lt"><div class="ls_dd"><span>市场价：</span><del><?php echo $auc['real_price'];?></del></div>
<span>当前价格：</span><em><?php if($auc['typeid'] == 1) { ?><?php echo $auc['ext_price'];?><?php } elseif($auc['typeid'] == 2) { if($auc['top_price']) { ?><?php echo $auc['top_price'];?><?php } else { ?><?php echo $auc['base_price'];?><?php } } ?></em> <?php echo $_G['setting']['extcredits'][$auc['extid']]['title'];?></p>
<p class="a_lt"><span>发起人：<?php echo $auc['username'];?></span></p>
</div>
<div class="pic">
<?php if($filter == 'got' && $auc['virtual']) { ?>
<p class="a_ct" id="vd_<?php echo $auc['tid'];?>"><a href="javascript:;" onclick="showWindow('auction_message', 'plugin.php?id=auction:involve&operation=message&tid=<?php echo $auc['tid'];?>', 'get', 0);doane(event);" target="_blank" style="background:none;font-size:small;line-height:22px;">查看卡密</a></p>
<?php } else { ?><p class="a_ct" id="vd_<?php echo $auc['tid'];?>"><a href="forum.php?mod=viewthread&amp;tid=<?php echo $auc['tid'];?>" target="_blank" style="background-image:url(source/plugin/auction/images/auction<?php if($auc['typeid'] == 1 && $auc['extra']) { ?>1<?php } elseif($auc['typeid'] == 1 && !$auc['extra']) { ?>2<?php } elseif($auc['typeid'] == 2) { } ?>.png);">查看详情&rsaquo;&rsaquo;</a></p>
<?php } ?>
</div>
<p id="time_<?php echo $auc['tid'];?>" class="timeline a_ct"<?php if($action == 'my' && $_G['gp_filter'] == 'join') { ?> style="width:150px;"<?php } ?>><?php if($auc['starttimefrom'] < $_G['timestamp']) { ?>--:--:--<?php } else { ?>即将开始<?php } ?></p>
<?php if($action == 'my' && $_G['gp_filter'] == 'join' && $auc['typeid'] == 2) { ?>
<p class="timeline a_ct" style="font-size:12px;font-weight:400;padding-left:30px;">
<?php if($auc['starttimeto'] >= $_G['timestamp']) { if($auc['aastatus'] > 0) { ?><font color="#F26C4F">领先</font></p><?php } else { ?><font color="#008B00">出局</font><?php } } if($auc['starttimeto'] < $_G['timestamp']) { if($auc['aastatus'] > 0) { ?><font color="#F26C4F">成交</font></p><?php } else { ?><font color="#008B00">出局</font><?php } } } ?>

</div>
<?php } } ?>
</div>
<?php if($multi) { ?><div class="cl" style="padding:4px 0 4px ;"><?php echo $multi;?></div><?php } ?>
</div>
<?php } ?>
</div>

</div>
<script type="text/javascript">
var future=  <?php echo $_G['timestamp'];?>*1000;
function ok_lets_go() {

var timelines = $('left').getElementsByTagName('input');
for(var i=0;i<timelines.length;i++) {
you_go(timelines[i].id, (timelines[i].value*1000));
timelines[i].value --;

}
setTimeout("ok_lets_go()", 1000);
}

function you_go(id, now){

days = (now-future) / 1000 / 60 / 60 / 24;

if(now-future < 0){
document.getElementById('time_'+id).innerHTML = '已经结束';
$('vd_'+id).className="a_lt";
return;
}

        dayNum = Math.floor(days);
        hours = (now-future) / 1000 / 60 / 60 - (24 * dayNum);
        houNum = Math.floor(hours);
        if(houNum < 10){
            houNum = "0" + houNum;
        }
        minutes = (now-future) / 1000 / 60 - (24 * 60 * dayNum) - (60 * houNum);
        minNum = Math.floor(minutes);
        if(minNum < 10){
            minNum = "0" + minNum;
        }
        seconds = (now-future) / 1000 - (24 * 60 * 60 * dayNum) - (60 * 60 * houNum) - (60 * minNum);
        secNum = Math.floor(seconds);
        if(secNum < 10){
            secNum = "0" + secNum;
        }
        millisec=(now-future)-(24*60*60*1000*dayNum)-(60*60*1000*houNum)-(60*1000*minNum)-(secNum*1000);
        milli=Math.floor(millisec/10);
        if(milli<10){
            milli="0"+milli;
}
document.getElementById('time_'+id).innerHTML = dayNum ? (dayNum+" 天 "+houNum + ":" + minNum) : (houNum + ":") + (minNum + ":")+ secNum ;
//(dayNum?dayNum+" 天 ":'')+ (houNum + ":") + (minNum + ":")+ secNum;
}

ok_lets_go();
</script>	</div>
<?php if(empty($topic) || ($topic['usefooter'])) { $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="关闭">关闭</a>
<h2>
<?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>站长推荐<?php } ?>
<span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="上一条" title="上一条" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/<?php echo $focusnum;?></em> <img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="下一条" title="下一条" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
</h2>
</div>
<div class="bm_c" id="focus_con">
</div>
</div>
</div><?php $focusi = 0;?><?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
<dl class="xld cl bbda">
<dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
<?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
<dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
</dl>
<p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">查看 &raquo;</a></p>
</div><?php $focusi ++;?><?php } ?>
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
if(focusnum < 2) {
$('focus_ctrl').style.display = 'none';
}
if(!$('focuscur').innerHTML) {
var randomnum = parseInt(Math.round(Math.random() * focusnum));
$('focuscur').innerHTML = Math.max(1, randomnum);
}
showfocus();
var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<div class="focus patch" id="patch_notice"></div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>
<div class="linksv"></div>

<div style="border-top:0px solid #dadada;background:#f0f0f0;">

<div class="copyright">
<div class="copyright_w">
<p>
<?php if($_G['setting']['site_qq']) { ?><a href="http://wpa.qq.com/msgrd?V=3&amp;Uin=<?php echo $_G['setting']['site_qq'];?>&amp;Site=<?php echo $_G['setting']['bbname'];?>&amp;Menu=yes&amp;from=discuz" target="_blank" title="QQ"><img src="<?php echo IMGDIR;?>/site_qq.jpg" alt="QQ" /></a><span class="pipe">|</span><?php } if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile' || $nav['id'] == 'darkroom'))) { ?><?php echo $nav['code'];?><span class="pipe">|</span><?php } } ?>
<strong><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a></strong>
<?php if($_G['setting']['icp']) { ?>( <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $_G['setting']['icp'];?></a> )<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
<?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><?php } ?>
</p>
</div>
<div class="copyright_certificate">
Powered by <strong><a href="http://www.lingsky.com" target="_blank">Lingksy</a></strong> <em>2014</em>&copy; 2013-2014 <a href="http://www.lingsky.com" target="_blank">Lingsky Inc.</a>GMT<?php echo $_G['timenow']['offset'];?>, <?php echo $_G['timenow']['time'];?>
<?php if(debuginfo()) { ?>, Processed in <?php echo $_G['debuginfo']['time'];?> second(s), <?php echo $_G['debuginfo']['queries'];?> queries
<?php if($_G['gzipcompress']) { ?>, Gzip On<?php } if(C::memory()->type) { ?>, <?php echo ucwords(C::memory()->type); ?> On<?php } ?>.
<?php } ?>

</div>
</div><?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>隐身<?php } else { ?>在线<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script>
<?php } ?>
</div>
<?php } if(!$_G['setting']['bbclosed']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?>
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?>
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<script type="text/javascript">patchNotice();</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])) { ?>
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script>
<?php } if(!$_G['setting']['bbclosed'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])) { ?>
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } if(($_G['member']['newpm'] || $_G['member']['newprompt']) && empty($_G['cookie']['ignore_notice'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html5notification.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var h5n = new Html5notification();
if(h5n.issupport()) {
<?php if($_G['member']['newpm'] && $_GET['do'] != 'pm') { ?>
h5n.shownotification('pm', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=pm', '<?php echo avatar($_G[uid],small,true);?>', '新的短消息', '有新的短消息，快去看看吧');
<?php } if($_G['member']['newprompt'] && $_GET['do'] != 'notice') { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { $noticetitle = lang('template', 'notice_'.$key);?>h5n.shownotification('notice_<?php echo $key;?>', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=notice&view=<?php echo $key;?>', '<?php echo avatar($_G[uid],small,true);?>', '<?php echo $noticetitle;?> (<?php echo $val;?>)', '有新的提醒，快去看看吧');
<?php } } ?>
}
</script>
<?php } userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<div id="scrolltop">
<?php if($_G['fid'] && $_G['mod'] == 'viewthread') { ?>
<span><a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('reply', this.href)" class="replyfast" title="快速回复"><b>快速回复</b></a></span>
<?php } ?>
<span hidefocus="true"><a title="返回顶部" onclick="window.scrollTo('0','0')" class="scrolltopa" ><b>返回顶部</b></a></span>
<?php if($_G['fid']) { ?>
<span>
<?php if($_G['mod'] == 'viewthread') { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" hidefocus="true" class="returnlist" title="返回列表"><b>返回列表</b></a>
<?php } else { ?>
<a href="forum.php" hidefocus="true" class="returnboard" title="返回版块"><b>返回版块</b></a>
<?php } ?>
</span>
<?php } ?>
</div>
<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
<?php } if(isset($_G['makehtml'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html2dynamic.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var html_lostmodify = <?php echo TIMESTAMP;?>;
htmlGetUserStatus();
<?php if(isset($_G['htmlcheckupdate'])) { ?>
htmlCheckUpdate();
<?php } ?>
</script>
<?php } output();?></body>
</html>

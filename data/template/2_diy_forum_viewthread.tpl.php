<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('viewthread');
0
|| checktplrefresh('./template/iscwo_design_2013/forum/viewthread.htm', './template/iscwo_design_2013/common/header.htm', 1390150031, 'diy', './data/template/2_diy_forum_viewthread.tpl.php', './template/iscwo_design_2013', 'forum/viewthread')
|| checktplrefresh('./template/iscwo_design_2013/forum/viewthread.htm', './template/iscwo_design_2013/forum/viewthread_node.htm', 1390150031, 'diy', './data/template/2_diy_forum_viewthread.tpl.php', './template/iscwo_design_2013', 'forum/viewthread')
|| checktplrefresh('./template/iscwo_design_2013/forum/viewthread.htm', './template/iscwo_design_2013/forum/viewthread_fastpost.htm', 1390150031, 'diy', './data/template/2_diy_forum_viewthread.tpl.php', './template/iscwo_design_2013', 'forum/viewthread')
|| checktplrefresh('./template/iscwo_design_2013/forum/viewthread.htm', './template/iscwo_design_2013/common/header_common.htm', 1390150031, 'diy', './data/template/2_diy_forum_viewthread.tpl.php', './template/iscwo_design_2013', 'forum/viewthread')
|| checktplrefresh('./template/iscwo_design_2013/forum/viewthread.htm', './template/iscwo_design_2013/common/header_qmenu.htm', 1390150031, 'diy', './data/template/2_diy_forum_viewthread.tpl.php', './template/iscwo_design_2013', 'forum/viewthread')
|| checktplrefresh('./template/iscwo_design_2013/forum/viewthread.htm', './template/iscwo_design_2013/common/pubsearchform.htm', 1390150031, 'diy', './data/template/2_diy_forum_viewthread.tpl.php', './template/iscwo_design_2013', 'forum/viewthread')
|| checktplrefresh('./template/iscwo_design_2013/forum/viewthread.htm', './template/iscwo_design_2013/forum/viewthread_node_body.htm', 1390150031, 'diy', './data/template/2_diy_forum_viewthread.tpl.php', './template/iscwo_design_2013', 'forum/viewthread')
|| checktplrefresh('./template/iscwo_design_2013/forum/viewthread.htm', './template/iscwo_design_2013/forum/viewthread_node_body.htm', 1390150031, 'diy', './data/template/2_diy_forum_viewthread.tpl.php', './template/iscwo_design_2013', 'forum/viewthread')
|| checktplrefresh('./template/iscwo_design_2013/forum/viewthread.htm', './template/iscwo_design_2013/common/seditor.htm', 1390150031, 'diy', './data/template/2_diy_forum_viewthread.tpl.php', './template/iscwo_design_2013', 'forum/viewthread')
|| checktplrefresh('./template/iscwo_design_2013/forum/viewthread.htm', './template/iscwo_design_2013/common/seccheck.htm', 1390150031, 'diy', './data/template/2_diy_forum_viewthread.tpl.php', './template/iscwo_design_2013', 'forum/viewthread')
|| checktplrefresh('./template/iscwo_design_2013/forum/viewthread.htm', './template/default/common/upload.htm', 1390150031, 'diy', './data/template/2_diy_forum_viewthread.tpl.php', './template/iscwo_design_2013', 'forum/viewthread')
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
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_common.css?<?php echo VERHASH;?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_forum_viewthread.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
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
                <dd class="wrap_z">�������������������IE6����������ʵĻ�����</dd>
                <dd class="wrap_y">
                    <a href="http://info.msn.com.cn/ie9/" target="_blank"><img src="template/iscwo_design_2013/img/images/ie6_ie9_logo.gif" title="IE9"/></a>����<a href="http://www.google.cn/chrome/" target="_blank"><img src="template/iscwo_design_2013/img/images/ie6_chrome_logo.gif" title="Chrome"/></a>����<a href="http://www.firefox.com.cn/download/" target="_blank"><img src="template/iscwo_design_2013/img/images/ie6_firefox_logo.gif" title="Firefox"/></a>
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
    ��ѡ�� <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">�����ֻ���</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">�������ʵ��԰�</a>
</div>
<?php } if($_G['setting']['shortcut'] && $_G['member']['credits'] >= $_G['setting']['shortcut']) { ?>
<div id="shortcut">
<span><a href="javascript:;" id="shortcutcloseid" title="�ر�">�ر�</a></span>
���������� <?php echo $_G['setting']['bbname'];?>��������ӵ����棬���ʸ����㣡
<a href="javascript:;" id="shortcuttip">��� <?php echo $_G['setting']['bbname'];?> ������</a>
</div>
<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
<?php } if(!IS_ROBOT) { if($_G['uid']) { ?>
<ul id="myprompt_menu" class="p_pop" style="display: none;">
<li><a href="home.php?mod=space&amp;do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news<?php if(empty($_G['member']['newpm'])) { ?>_0<?php } ?>"></em>��Ϣ</a></li>

<li><a href="home.php?mod=follow&amp;do=follower"><em class="prompt_follower<?php if(empty($_G['member']['newprompt_num']['follower'])) { ?>_0<?php } ?>"></em>������<?php if($_G['member']['newprompt_num']['follower']) { ?>(<?php echo $_G['member']['newprompt_num']['follower'];?>)<?php } ?></a></li>

<?php if($_G['member']['newprompt'] && $_G['member']['newprompt_num']['follow']) { ?>
<li><a href="home.php?mod=follow"><em class="prompt_concern"></em>�ҹ�ע��(<?php echo $_G['member']['newprompt_num']['follow'];?>)</a></li>
<?php } if($_G['member']['newprompt']) { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { ?><li><a href="home.php?mod=space&amp;do=notice&amp;view=<?php echo $key;?>"><em class="notice_<?php echo $key;?>"></em><?php echo lang('template', 'notice_'.$key); ?>(<span class="rq"><?php echo $val;?></span>)</a></li>
<?php } } if(empty($_G['cookie']['ignore_notice'])) { ?>
<li class="ignore_noticeli"><a href="javascript:;" onclick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="�ݲ�����"><em class="ignore_notice"></em></a></li>
<?php } ?>
</ul>
<?php } if($_G['uid'] && !empty($_G['style']['extstyle'])) { ?>
<div id="sslct_menu" class="cl p_pop" style="display: none;">
<?php if(!$_G['style']['defaultextstyle']) { ?><span class="sslct_btn" onclick="extstyle('')" title="Ĭ��"><i></i></span><?php } if(is_array($_G['style']['extstyle'])) foreach($_G['style']['extstyle'] as $extstyle) { ?><span class="sslct_btn" onclick="extstyle('<?php echo $extstyle['0'];?>')" title="<?php echo $extstyle['1'];?>"><i style='background:<?php echo $extstyle['2'];?>'></i></span>
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
����<br /><a class="xi2" href="member.php?mod=connect"><strong>�����ʺ���Ϣ</strong></a> �� <a href="member.php?mod=connect&amp;ac=bind" class="xi2 xw1"><strong>�������ʺ�</strong></a><br />��ʹ�ÿ�ݵ���
</div>
<?php } else { ?>
<div class="ptm pbw hm">
�� <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>��¼</strong></a> ��ʹ�ÿ�ݵ���<br />û���ʺţ�<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2 xw1"><?php echo $_G['setting']['reglinkname'];?></a>
</div>
<?php } if($_G['setting']['showfjump']) { ?><div id="fjump_menu" class="btda"></div><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_qmenu_bottom'])) echo $_G['setting']['pluginhooks']['global_qmenu_bottom'];?>
</div><?php } if($_G['uid']) { ?>

                <div onMouseOver="document.getElementById('qmenu2').className='um_a3';" onMouseOut="document.getElementById('qmenu2').className='um_a2';"> 
                <div id="qmenu2_menu" class="iscwo_menu2" style="display: none;">

        <ul>

<li><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" class="um_username" hidefocus="true" title="�����ҵĿռ�"><?php echo $_G['member']['username'];?></a></li>
<li><a href="home.php?mod=spacecp&amp;ac=usergroup" class="um_group" hidefocus="true"><?php echo $_G['group']['grouptitle'];?></a></li>
    <li><a href="home.php?mod=spacecp" class="um_setup" hidefocus="true">����</a></li>


<?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<li><a href="portal.php?mod=portalcp" class="um_portalcp" hidefocus="true"><?php if($_G['setting']['portalstatus'] ) { ?>�Ż�����<?php } else { ?>ģ�����<?php } ?></a></li>
<?php } if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
<li><a href="admin.php" target="_blank" class="um_admincp" hidefocus="true">��������</a></li>
<?php if(check_diy_perm($topic)) { ?>
<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();" class="xi2">DIY�༭</a></li>
<?php } } ?>
<li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>" class="um_logout" hidefocus="true">�˳�</a></li>
        </ul>

        </div>
</div>							
<?php if($iscwo_header_nv_top==1) { ?>
                         <div onMouseOver="document.getElementById('qmenu1').className='um_a1 um_upload hd_hover';" onMouseOut="document.getElementById('qmenu1').className='um_a1 um_upload';"> 
                         <div id="qmenu1_menu" class="iscwo_menu cl"  style="display: none;"  >
 <ul>
<li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=49" target="_blank">�ϴ���Ʒ</a></li>
<li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=52" target="_blank">�����̳�</a></li>
<li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=51" target="_blank">�����ز�</a></li>
<li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=53" target="_blank">������Ƹ</a></li>
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
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=login" onClick="showWindow('login', this.href)">����</a>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
</p>
<?php } elseif(!$_G['connectguest']) { ?>
<div class="nologin cl"><?php include template('member/login_simple'); ?></div>
<?php } else { ?>
<div id="um">
<div class="avt y"><?php echo avatar(0,small);?></div>
<p>
<strong class="vwmy qq"><?php echo $_G['member']['username'];?></strong>
<?php if(!empty($_G['setting']['pluginhooks']['global_usernav_extra1'])) echo $_G['setting']['pluginhooks']['global_usernav_extra1'];?>
<span class="pipe">|</span><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">�˳�</a>
</p>
<p>
<a href="home.php?mod=spacecp&amp;ac=credit&amp;showcredit=1">����: 0</a>
<span class="pipe">|</span>�û���: <?php echo $_G['group']['grouptitle'];?>
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
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >����</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">����</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">����</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">��־</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">���</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">�û�</a></li>
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
<a id="scbar_type" href="javascript:;" onclick="showMenu(this.id)" hidefocus="true">����</a>
<input id="scbar_txt" type="text" name="srchtxt" id="scbar_txt" value="��������������" autocomplete="off" x-webkit-speech speech />
<button id="scbar_btn" type="submit" name="searchsubmit" sc="1" value="true">����</button>
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
<script type="text/javascript">var fid = parseInt('<?php echo $_G['fid'];?>'), tid = parseInt('<?php echo $_G['tid'];?>');</script>
<?php if($modmenu['thread'] || $modmenu['post']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum_moderate.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } ?>


<script src="<?php echo $_G['setting']['jspath'];?>forum_viewthread.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">zoomstatus = parseInt(<?php echo $_G['setting']['zoomstatus'];?>);var imagemaxwidth = '<?php echo $_G['setting']['imagemaxwidth'];?>';var aimgcount = new Array();</script>

<style id="diy_style" type="text/css"></style>
<!--[diy=diynavtop]--><div id="diynavtop" class="area"></div><!--[/diy]-->


<?php if(!empty($_G['setting']['pluginhooks']['viewthread_top'])) echo $_G['setting']['pluginhooks']['viewthread_top'];?><?php echo adshow("text/wp a_t");?><style id="diy_style" type="text/css"></style>
<div class="wp">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="wrap" class="group">
<style>
.tool-tips{float:left;line-height:32px;color:#666;}.toolview, .toolcomments, .toollikes{width:auto;padding-right:6px;font-weight:bold;color:#2DB2EA;}.tools a{color:#2DB2EA;}
</style>


<?php if($_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])) { ?>
<ul class="p_pop" id="newspecial_menu" style="display: none">
<?php if(!$_G['forum']['allowspecialonly']) { ?><li><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>">��������</a></li><?php } if($_G['forum']['threadsorts'] && !$_G['forum']['allowspecialonly']) { if(is_array($_G['forum']['threadsorts']['types'])) foreach($_G['forum']['threadsorts']['types'] as $id => $threadsorts) { if($_G['forum']['threadsorts']['show'][$id]) { ?>
<li class="popupmenu_option"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;sortid=<?php echo $id;?>"><?php echo $threadsorts;?></a></li>
<?php } } } if($_G['group']['allowpostpoll']) { ?><li class="poll"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=1">����ͶƱ</a></li><?php } if($_G['group']['allowpostreward']) { ?><li class="reward"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=3">��������</a></li><?php } if($_G['group']['allowpostdebate']) { ?><li class="debate"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=5">�������</a></li><?php } if($_G['group']['allowpostactivity']) { ?><li class="activity"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=4">����</a></li><?php } if($_G['group']['allowposttrade']) { ?><li class="trade"><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;special=2">������Ʒ</a></li><?php } if($_G['setting']['threadplugins']) { if(is_array($_G['forum']['threadplugin'])) foreach($_G['forum']['threadplugin'] as $tpid) { if(array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])) { ?>
<li class="popupmenu_option"<?php if($_G['setting']['threadplugins'][$tpid]['icon']) { ?> style="background-image:url(source/plugin/<?php echo $tpid;?>/<?php echo $_G['setting']['threadplugins'][$tpid]['icon'];?>)"<?php } ?>><a href="forum.php?mod=post&amp;action=newthread&amp;fid=<?php echo $_G['fid'];?>&amp;specialextra=<?php echo $tpid;?>"><?php echo $_G['setting']['threadplugins'][$tpid]['name'];?></a></li>
<?php } } } ?>
</ul>
<?php } if($modmenu['post']) { ?>
<div id="mdly" class="fwinmask" style="display:none;">
<table cellspacing="0" cellpadding="0" class="fwin">
<tr>
<td class="t_l"></td>
<td class="t_c"></td>
<td class="t_r"></td>
</tr>
<tr>
<td class="m_l">&nbsp;&nbsp;</td>
<td class="m_c">
<div class="f_c">
<div class="c">
<h3>ѡ��&nbsp;<strong id="mdct" class="xi1"></strong>&nbsp;ƪ: </h3>
<?php if($_G['forum']['ismoderator']) { if($_G['group']['allowwarnpost']) { ?><a href="javascript:;" onclick="modaction('warn')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowbanpost']) { ?><a href="javascript:;" onclick="modaction('banpost')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowdelpost'] && !$rushreply) { ?><a href="javascript:;" onclick="modaction('delpost')">ɾ��</a><span class="pipe">|</span><?php } } if($_G['forum']['ismoderator'] && $_G['group']['allowstickreply'] || $_G['forum_thread']['authorid'] == $_G['uid']) { ?><a href="javascript:;" onclick="modaction('stickreply')">�ö�</a><span class="pipe">|</span><?php } if($_G['forum_thread']['pushedaid'] && $allowpostarticle) { ?><a href="javascript:;" onclick="modaction('pushplus', '', 'aid=<?php echo $_G['forum_thread']['pushedaid'];?>', 'portal.php?mod=portalcp&ac=article&op=pushplus')">��������</a><span class="pipe">|</span><?php } ?>
</div>
</div>
</td>
<td class="m_r"></td>
</tr>
<tr>
<td class="b_l"></td>
<td class="b_c"></td>
<td class="b_r"></td>
</tr>
</table>
</div>
<?php } ?>



<?php if(!empty($_G['setting']['pluginhooks']['viewthread_beginline'])) echo $_G['setting']['pluginhooks']['viewthread_beginline'];?>

<div id="postlist" class="pl">

<?php if($_G['forum_thread']['replycredit'] > 0 || $rushreply) { ?>
<div id="pl_top">
<table cellspacing="0" cellpadding="0">
<tr class="ad">
<td class="pls"></td>
<td class="plc"></td>
</tr>
<?php if($_G['forum_thread']['replycredit'] > 0 ) { ?>
<tr>
<td class="pls vm ptm">
<img src="<?php echo IMGDIR;?>/thread_prize_s.png" class="hm" alt="��������" />
<strong><?php echo $_G['forum_thread']['replycredit'];?> <?php echo $_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']]['title'];?></strong>
</td>
<td class="plc ptm pbm xi1">
�ظ������ɻ�� <?php echo $_G['forum_thread']['replycredit_rule']['extcredits'];?> <?php echo $_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']]['title'];?>����! ÿ���� <?php echo $_G['forum_thread']['replycredit_rule']['membertimes'];?> ��<?php if($_G['forum_thread']['replycredit_rule']['random'] > 0) { ?><span class="xg1">(�н����� <?php echo $_G['forum_thread']['replycredit_rule']['random'];?>%)</span><?php } ?>
</td>
</tr>
<?php if($rushreply) { ?>
<tr class="ad">
<td class="pls"></td>
<td class="plc"></td>
</tr>
<?php } } if($rushreply) { ?>
<tr>
<td class="pls vm ptm">
<img src="<?php echo IMGDIR;?>/rushreply_s.png" class="vm" alt="��¥" />
<strong>��¥</strong>
</td>
<td class="plc ptm pbm xi1">
<?php if($rushresult['rewardfloor']) { ?>
<span class="y">
<?php if($_G['uid'] == $_G['thread']['authorid'] || $_G['forum']['ismoderator']) { ?><a href="javascript:;" onclick="showWindow('membernum', 'forum.php?mod=ajax&action=get_rushreply_membernum&tid=<?php echo $_G['tid'];?>')" class="y pn xi2"><span>ͳ�Ʋ�������</span></a><?php } if(!$_GET['checkrush']) { ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $post['tid'];?>&amp;checkrush=1" rel="nofollow" class="y pn xi2"><span>�鿴����¥��</span></a>
<?php } ?>
</span>
<?php } if($rushresult['creditlimit'] == '') { ?>
����Ϊ��¥������ӭ��¥!&nbsp;
<?php } else { ?>
����Ϊ��¥����<?php echo $rushresult['creditlimit_title'];?>����<?php echo $rushresult['creditlimit'];?>������¥ &nbsp;
<?php } if($rushresult['starttimefrom']) { ?>
 ��¥��ʼ��<?php echo $rushresult['starttimefrom'];?>&nbsp;
<?php } if($rushresult['starttimeto']) { ?>
��¥������<?php echo $rushresult['starttimeto'];?>&nbsp;
<?php } if($rushresult['stopfloor']) { ?>
��ֹ¥�㣺<?php echo $rushresult['stopfloor'];?>&nbsp;
<?php } if($rushresult['rewardfloor']) { ?>
����¥��: <?php echo $rushresult['rewardfloor'];?>&nbsp;
<?php } if($rushresult['rewardfloor'] && $_GET['checkrush']) { ?>
<p class="ptn">
<?php if($countrushpost) { ?>[<strong><?php echo $countrushpost;?></strong>]��¥�����н�<?php } else { ?> ��ʱ��û��¥���н� <?php } ?>&nbsp;&nbsp;
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>" class="xi2">������¥��</a>
</p>
<?php } ?>
</td>
</tr>
<?php } ?>
</table>
</div>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['viewthread_title_row'])) echo $_G['setting']['pluginhooks']['viewthread_title_row'];?>


<div class="Post box">

<div id="sidebar" class="group" style="float:right;">

<div class="s-box sads group"><?php $theuid = $_G[forum_thread][authorid];?><?php $author_inf1 = DB::fetch_first("SELECT `follower`,`threads`,`following` FROM ".DB::table('common_member_count')." WHERE uid=$theuid");?><?php $author_inf2 = DB::fetch_first("SELECT `resideprovince`,`occupation` FROM ".DB::table('common_member_profile')." WHERE uid=$theuid");?><?php $thegroupid = DB::result_first("SELECT `groupid` FROM ".DB::table('common_member')." WHERE uid=$theuid");?><div class="vt_lz2 cl">
<span class="vt_span1"><em class="vt_em1"><?php echo $author_inf1['following'];?></em><em class="vt_em2">��ע</em></span>
<span class="vt_span2"><em class="vt_em1"><?php echo $author_inf1['follower'];?></em><em class="vt_em2">��˿</em></span>
<span class="vt_span2"><em class="vt_em1"><?php echo $author_inf1['threads'];?></em><em class="vt_em2">����</em></span>
</div>
</div>

<?php if($modmenu['thread']) { ?>
<div class="s-box sads group">
<div id="modmenu" class="pbm"><?php $modopt=0;?><?php if($_G['forum']['ismoderator']) { if($_G['group']['allowdelpost']) { $modopt++?><a href="javascript:;" onclick="modthreads(3, 'delete')">ɾ������</a><span class="pipe">|</span><?php } if($_G['group']['allowbumpthread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modthreads(3, 'bump')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowstickthread'] && ($_G['forum_thread']['displayorder'] <= 3 || $_G['adminid'] == 1) && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modthreads(1, 'stick')">�ö�</a><span class="pipe">|</span><?php } if($_G['group']['allowlivethread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modaction('live')">ֱ��</a><span class="pipe">|</span><?php } if($_G['group']['allowhighlightthread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modthreads(1, 'highlight')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowdigestthread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modthreads(1, 'digest')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowrecommendthread'] && !empty($_G['forum']['modrecommend']['open']) && $_G['forum']['modrecommend']['sort'] != 1 && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modthreads(1, 'recommend')">�Ƽ�</a><span class="pipe">|</span><?php } if($_G['group']['allowstampthread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modaction('stamp')">ͼ��</a><span class="pipe">|</span><?php } if($_G['group']['allowstamplist'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modaction('stamplist')">ͼ��</a><span class="pipe">|</span><?php } if($_G['group']['allowclosethread'] && !$_G['forum_thread']['is_archived'] && $_G['forum']['status'] != 3) { $modopt++?><a href="javascript:;" onclick="modthreads(4)"><?php if(!$_G['forum_thread']['closed']) { ?>�ر�<?php } else { ?>��<?php } ?></a><span class="pipe">|</span><?php } if($_G['group']['allowmovethread'] && !$_G['forum_thread']['is_archived'] && $_G['forum']['status'] != 3) { $modopt++?><a href="javascript:;" onclick="modthreads(2, 'move')">�ƶ�</a><span class="pipe">|</span><?php } if($_G['group']['allowedittypethread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modthreads(2, 'type')">����</a><span class="pipe">|</span><?php } if(!$_G['forum_thread']['special'] && !$_G['forum_thread']['is_archived']) { if($_G['group']['allowcopythread'] && $_G['forum']['status'] != 3) { $modopt++?><a href="javascript:;" onclick="modaction('copy')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowmergethread'] && $_G['forum']['status'] != 3) { $modopt++?><a href="javascript:;" onclick="modaction('merge')">�ϲ�</a><span class="pipe">|</span><?php } if($_G['group']['allowrefund'] && $_G['forum_thread']['price'] > 0) { $modopt++?><a href="javascript:;" onclick="modaction('refund')">��������</a><span class="pipe">|</span><?php } } if($_G['group']['allowsplitthread'] && !$_G['forum_thread']['is_archived'] && $_G['forum']['status'] != 3) { $modopt++?><a href="javascript:;" onclick="modaction('split')">�ָ�</a><span class="pipe">|</span><?php } if($_G['group']['allowrepairthread'] && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modaction('repair')">�޸�</a><span class="pipe">|</span><?php } if($_G['forum_thread']['is_archived'] && $_G['adminid'] == 1) { $modopt++?><a href="javascript:;" onclick="modaction('restore', '', 'archiveid=<?php echo $_G['forum_thread']['archiveid'];?>')">ȡ���浵</a><span class="pipe">|</span><?php } if($_G['forum_firstpid']) { if($_G['group']['allowwarnpost']) { $modopt++?><a href="javascript:;" onclick="modaction('warn', '<?php echo $_G['forum_firstpid'];?>')">����</a><span class="pipe">|</span><?php } if($_G['group']['allowbanpost']) { $modopt++?><a href="javascript:;" onclick="modaction('banpost', '<?php echo $_G['forum_firstpid'];?>')">����</a><span class="pipe">|</span><?php } } if($_G['group']['allowremovereward'] && $_G['forum_thread']['special'] == 3 && !$_G['forum_thread']['is_archived']) { $modopt++?><a href="javascript:;" onclick="modaction('removereward')">�Ƴ�����</a><span class="pipe">|</span><?php } if($_G['forum']['status'] == 3 && in_array($_G['adminid'], array('1','2')) && $_G['forum_thread']['closed'] < 1) { ?><a href="javascript:;" onclick="modthreads(5, 'recommend_group');return false;">�Ƶ����</a><span class="pipe">|</span><?php } if($_G['group']['allowmanagetag']) { ?><a href="javascript:;" onclick="showWindow('mods', 'forum.php?mod=tag&op=manage&tid=<?php echo $_G['tid'];?>', 'get', 0)">��ǩ</a><span class="pipe">|</span><?php } if($_G['group']['alloweditusertag']) { ?><a href="javascript:;" onclick="showWindow('usertag', 'forum.php?mod=misc&action=usertag&tid=<?php echo $_G['tid'];?>', 'get', 0)">�û���ǩ</a><span class="pipe">|</span><?php } } if($allowpusharticle && $allowpostarticle) { $modopt++?><a href="portal.php?mod=portalcp&amp;ac=article&amp;from_idtype=tid&amp;from_id=<?php echo $_G['tid'];?>">��������</a><span class="pipe">|</span><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_modoption'])) echo $_G['setting']['pluginhooks']['viewthread_modoption'];?>
</div>





</div>
<?php } ?>

<div class="s-box">
<div class="group cl">
<!--[if IE 6]>
<div style="display:none" class="postBtn">
<![endif]-->
<div class="postBtn">
<a title="�������������Ʒ" onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav">
<div class="pb">
</div>
������Ʒ</a>
</div>
<!--[if IE 6]>
</div>
<![endif]-->

<h2>HotTags</h2>
<p class="cl">
 <?php if(is_array($postlist)) foreach($postlist as $post) { ?>         <?php if($post['first']) { ?>

       <?php if($post['first'] && ($post['tags'] || $relatedkeywords)) { if($post['tags']) { $tagi = 0;?><?php if(is_array($post['tags'])) foreach($post['tags'] as $var) { if($tagi) { } ?><a style="font-size: 14px;" title="<?php echo $var['1'];?>" href="misc.php?mod=tag&amp;id=<?php echo $var['0'];?>" target="_blank"><?php echo $var['1'];?></a><?php $tagi++;?><?php } } if($relatedkeywords) { ?><?php echo $relatedkeywords;?><?php } ?>
       <?php } ?>
           <?php } ?>
   <?php } ?>
</p>
<!--[if IE 6]>
<div style="display:none" class="navBtn">
<![endif]-->
<div class="navBtn">
<a title="��Ƶ���" href="/">
<div class="nb">
</div>
��Ƶ���</a>
</div>
<!--[if IE 6]>
</div>
<![endif]-->
<!--[if IE 6]>
<div style="display:none" class="helpBtn">
<![endif]-->
<div class="helpBtn">
<a title="��������" href="/">
<div class="hb">
</div>
��������</a>
</div>
    <!--[if IE 6]>
    </div>
<![endif]-->

</div>

<div class="s-line"></div>
</div>

 <?php if(is_array($postlist)) foreach($postlist as $post) { ?>         <?php if($post['first']) { ?>
   <?php if($post['relateitem']) { ?>
<div class="s-box sads group">

  <h3 class="title">�������</h3>

<ul class="sy_job xl cl"><?php if(is_array($post['relateitem'])) foreach($post['relateitem'] as $var) { ?><li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $var['tid'];?>" title="<?php echo $var['subject'];?>" target="_blank"><?php echo $var['subject'];?></a></li>
<?php } ?>
</ul>

   </div>

    <?php } ?>

           <?php } ?>
   <?php } ?>


<div class="s-box sads group">
<img src="template/iscwo_design_2013/img/images/a.png" alt="ˢһ�¾�֪��" title="ˢһ�¾�֪��">
</div>


    <script type="text/javascript">
        jq(document).ready(function(){
            var loaded = true;
            var top = jq("#demo").offset().top;
            function Add_Data()
            {              
                var scrolla=jq(window).scrollTop();
                var cha=parseInt(top)-parseInt( scrolla);
                if(loaded && cha<=0)
                {                
                    jq("#demo").removeClass("demo2").addClass("demo1");
                    loaded=false;
                }
                if(!loaded && cha>0)
                {
                    jq("#demo").removeClass("demo1").addClass("demo2");
                    loaded=true;
                }
            }
            jq(window).scroll(Add_Data);
        });
    </script>

<div id="demo" class="demo2">


   <?php $lzthread = DB::fetch_all("SELECT `tid`,`subject` FROM ".DB::table('forum_thread')." WHERE authorid =$theuid AND cover = 1 ORDER BY dateline DESC LIMIT 0,4 ");?><div class="s-box sads group">
<h3 class="title">����������Ʒ</h3>

<ul class="excli group cl"><?php if(is_array($lzthread)) foreach($lzthread as $thethread) { ?><li><a href="forum.php?mod=viewthread&amp;tid=<?php echo $thethread['tid'];?>" target="_blank"><?php $thethread['coverpath'] = getthreadcover($thethread['tid'], 1);?>    <img src="<?php echo $thethread['coverpath'];?>"/></a></li>
<?php } ?>
</ul>
 </div>



<div class="mblBottom">
<div style="padding-left: 35px;" class="follow">

<div class="follow_sina">
<a href="javascript:void((function(s,d,e){try{}catch(e){}var f='http://v.t.sina.com.cn/share/share.php?',u=d.location.href,p=['url=',e(u),'&title=',e(d.title),'&appkey=2924220432'].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));"></a>
</div>


<div class="follow_qq">
<a href="javascript:void(0)" onclick="{ var _t = encodeURI(document.title);  var _url = encodeURI(window.location); var _appkey = '333cf198acc94876a684d043a6b48e14'; var _site = encodeURI; var _pic = ''; var _u = 'http://v.t.qq.com/share/share.php?title='+_t+'&url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic; window.open( _u,'ת������Ѷ΢��', 'width=700, height=580, top=180, left=320, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );  };" ></a>
</div>

<div class="follow_renren">
            <script src="http://widget.renren.com/js/rrshare.js" type="text/javascript"></script>
            <a onclick="shareClick()" href="javascript:;" title="����������"></a>
            <script type="text/javascript">
                function shareClick() {
                    var rrShareParam = {
                        resourceUrl : '',	//�������ԴUrl
                        srcUrl : '',	//�������Դ��ԴUrl,Ĭ��Ϊheader�е�Referer,�������ʧ�ܿ��Ե�����ֵΪresourceUrl����
                        pic : '',		//���������ͼƬUrl
                        title : '<?php echo $_G['forum_thread']['subject'];?>',		//����ı���
                        description : '<?php echo $metadescription;?>'	//�������ϸ����
                    };
                    rrShareOnclick(rrShareParam);
                }
            </script>
</div>

<div class="follow_qzone">
<script type="text/javascript">
(function(){
var p = {
url:location.href,
desc:'',/*Ĭ�Ϸ�������(��ѡ)*/
summary:'<?php echo $metadescription;?>',/*ժҪ(��ѡ)*/
title:'<?php echo $_G['forum_thread']['subject'];?>',/*�������(��ѡ)*/
site:'<?php echo $_G['forum']['name'];?>',/*������Դ �磺��Ѷ��(��ѡ)*/
pics:'' /*����ͼƬ��·��(��ѡ)*/
};
var s = [];
for(var i in p){
s.push(i + '=' + encodeURIComponent(p[i]||''));
}
document.write(['<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'" target="_blank" title="����QQ�ռ�"></a>'].join(''));
})();
</script>
</div>

</div>		
</div>


</div>
</div>


<div class="Lview">
<div class="Rlsuser">
<div class="vt_titlel">

<a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>" title="<?php echo $_G['forum_thread']['author'];?>"><?php echo avatar($_G[forum_thread][authorid],middle);?></a>
<h1>
<?php if($threadsorts && $_G['forum_thread']['sortid']) { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>&amp;filter=sortid&amp;sortid=<?php echo $_G['forum_thread']['sortid'];?>" class="vt_type">[<?php echo $_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']];?>]</a>
<?php } ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>" id="thread_subject" title="<?php echo $_G['forum_thread']['subject'];?>" class="vt_title"><?php echo $_G['forum_thread']['subject'];?></a>
<?php if($_G['forum_thread']['digest'] > 0 && $filter != 'digest') { ?>
<font title="������" color="red">��</font>
<?php } ?>
</h1>
<span class="byto">By <a href="home.php?mod=space&amp;uid=<?php echo $_G['forum_thread']['authorid'];?>" title="�� <?php echo $_G['forum_thread']['author'];?> ����" rel="author"><?php echo $_G['forum_thread']['author'];?></a> / ��� <?php echo $_G['forum_thread']['views'];?> �� / <?php echo $_G['forum_thread']['replies'];?>������ / ������<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" class="vt_type">[ <?php echo $_G['forum']['name'];?> ]</a></span>
</div>   

<div class="vt_titler">

   <?php if($post['invisible'] == 0) { ?>
   <?php if(($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']) { if(!empty($_G['setting']['recommendthread']['addtext'])) { ?>
<a id="recommend_add" class="vt_like" hidefocus="true" href="forum.php?mod=misc&amp;action=recommend&amp;do=add&amp;tid=<?php echo $_G['tid'];?>&amp;hash=<?php echo FORMHASH;?>" <?php if($_G['uid']) { ?>onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate(<?php echo $_G['group']['allowrecommend'];?>)');return false;"<?php } else { ?> onclick="showWindow('login', this.href)"<?php } ?> onmouseover="this.title = $('recommendv_add').innerHTML + ' ��ϲ��'"><span id="recommendv_add"><?php echo $_G['forum_thread']['recommend_add'];?></span></a>
<?php } ?>

   <?php } ?>
   <?php } ?>
   
</div>   

</div>



<div class="Lvipic">
<div class="Lvpleft"><?php $postcount = 0;?><?php if(is_array($postlist)) foreach($postlist as $post) { if($rushreply && $_GET['checkrush'] && $post['rewardfloor'] != 1) { continue;?><?php } ?>
<div id="post_<?php echo $post['pid'];?>" <?php if($_G['blockedpids'] && $post['inblacklist']) { ?>style="display:none;"<?php } ?>><?php $needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);?><?php
$authorverifys = <<<EOF


EOF;
 if($_G['setting']['verify']['enabled']) { if(is_array($_G['setting']['verify'])) foreach($_G['setting']['verify'] as $vid => $verify) { if($verify['available'] && $verify['showicon']) { 
$authorverifys .= <<<EOF

<a href="home.php?mod=spacecp&amp;ac=profile&amp;op=verify&amp;vid={$vid}" target="_blank">

EOF;
 if($post['verify'.$vid] == 1) { if(!empty($verify['icon'])) { 
$authorverifys .= <<<EOF
<img src="{$verify['icon']}" class="vm" alt="{$verify['title']}" title="{$verify['title']}" />
EOF;
 } else { 
$authorverifys .= <<<EOF
{$verify['title']}
EOF;
 } } elseif(!empty($verify['unverifyicon'])) { 
$authorverifys .= <<<EOF

<img src="{$verify['unverifyicon']}" class="vm" alt="{$verify['title']}" title="{$verify['title']}" />

EOF;
 } 
$authorverifys .= <<<EOF
</a>&nbsp;

EOF;
 } } } 
$authorverifys .= <<<EOF


EOF;
?>
<?php if($post['first'] &&  $_G['forum_threadstamp']) { ?>
<div id="threadstamp"><img src="<?php echo STATICURL;?>image/stamp/<?php echo $_G['forum_threadstamp']['url'];?>" title="<?php echo $_G['forum_threadstamp']['text'];?>" /></div>
<?php } if(empty($post['deleted'])) { if($post['first']) { ?>

<table id="pid<?php echo $post['pid'];?>" summary="pid<?php echo $post['pid'];?>" cellspacing="0" cellpadding="0">
<tr>

<td class="plc" colspan="2">





<div class="pct">

<?php if(!$_G['inajax']) { if(empty($ad_a_pr_css)) { ?>
<style type="text/css">.pcb{margin-right:0}</style><?php $ad_a_pr_css=1;?><?php } } ?><div class="pcb">
<?php if(!$_G['forum']['ismoderator'] && $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($_G['thread']['digest'] == 0 && ($post['groupid'] == 4 || $post['groupid'] == 5 || $post['memberstatus'] == '-1')))) { ?>
<div class="locked">��ʾ: <em>���߱���ֹ��ɾ�� �����Զ�����</em></div>
<?php } elseif(!$_G['forum']['ismoderator'] && $post['status'] & 1) { ?>
<div class="locked">��ʾ: <em>����������Ա���������</em></div>
<?php } elseif($needhiddenreply) { ?>
<div class="locked">���������߿ɼ�</div>
<?php } elseif($post['first'] && $_G['forum_threadpay']) { include template('forum/viewthread_pay'); } elseif($_G['forum_discuzcode']['passwordlock'][$post['pid']]) { ?>
<div class="locked">����Ϊ������ ������������<input type="text" id="postpw_<?php echo $post['pid'];?>" class="vm" />&nbsp;<button class="pn vm" type="button" onclick="submitpostpw(<?php echo $post['pid'];?><?php if($_GET['from'] == 'preview') { ?>,<?php echo $post['tid'];?><?php } else { } ?>)"><strong>�ύ</strong></button></div>
<?php } else { if(!$post['first'] && !empty($post['subject'])) { ?>
<h2><?php echo $post['subject'];?></h2>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_posttop'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_posttop'][$postcount];?>
<?php if($_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($_G['thread']['digest'] == 0 && ($post['groupid'] == 4 || $post['groupid'] == 5 || $post['memberstatus'] == '-1')))) { ?>
<div class="locked">��ʾ: <em>���߱���ֹ��ɾ�� �����Զ����Σ�ֻ�й���Ա���й���Ȩ�޵ĳ�Ա�ɼ�</em></div>
<?php } elseif($post['status'] & 1) { ?>
<div class="locked">��ʾ: <em>����������Ա��������Σ�ֻ�й���Ա���й���Ȩ�޵ĳ�Ա�ɼ�</em></div>
<?php } if(!$post['first'] && $hiddenreplies && $_G['forum']['ismoderator']) { ?>
<div class="locked">���������߿ɼ�</div>
<?php } if($post['first']) { ?> 
<?php if($_G['forum_thread']['price'] > 0 && $_G['forum_thread']['special'] == 0 && empty($previewspecial)) { ?>
<div class="locked"><em class="y"><a href="forum.php?mod=misc&amp;action=viewpayments&amp;tid=<?php echo $_G['tid'];?>" onclick="showWindow('pay', this.href)">��¼</a></em>��������, �۸�: <strong><?php echo $_G['forum_thread']['price'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?> </strong></div>
<?php } if($threadsort && $threadsortshow) { if($threadsortshow['typetemplate']) { ?>
<?php echo $threadsortshow['typetemplate'];?>
<?php } elseif($threadsortshow['optionlist']) { ?>
<div class="typeoption">
<?php if($threadsortshow['optionlist'] == 'expire') { ?>
����Ϣ�Ѿ�����
<?php } else { ?>
<table summary="������Ϣ" cellpadding="0" cellspacing="0" class="cgtl mbm">
<caption><?php echo $_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']];?></caption>
<tbody><?php if(is_array($threadsortshow['optionlist'])) foreach($threadsortshow['optionlist'] as $option) { if($option['type'] != 'info') { ?>
<tr>
<th><?php echo $option['title'];?>:</th>
<td><?php if($option['value'] || ($option['type'] == 'number' && $option['value'] !== '')) { ?><?php echo $option['value'];?> <?php echo $option['unit'];?><?php } else { ?>-<?php } ?></td>
</tr>
<?php } } ?>
</tbody>
</table>
<?php } ?>
</div>
<?php } } } if($_G['forum_discuzcode']['passwordauthor'][$post['pid']]) { ?>
<div class="locked">����Ϊ������</div>
<?php } ?>
<div class="<?php if(!$_G['forum_thread']['special']) { ?>t_fsz<?php } else { ?>pcbs<?php } ?>">
<?php echo $_G['forum_posthtml']['header'][$post['pid']];?>
<?php if($post['first']) { if(!$_G['forum_thread']['special']) { ?>
<table cellspacing="0" cellpadding="0"><tr><td class="t_f" id="postmessage_<?php echo $post['pid'];?>">
<?php if(!$_G['inajax']) { if($ad_a_pr) { ?>
<?php echo $ad_a_pr;?>
<?php } } if(!empty($_G['setting']['guesttipsinthread']['flag']) && empty($_G['uid']) && !$post['attachment'] && $_GET['from'] != 'preview') { ?>
<div class="attach_nopermission attach_tips">
<div>
<h3><strong>
<?php if(!empty($_G['setting']['guesttipsinthread']['text'])) { ?>
<?php echo $_G['setting']['guesttipsinthread']['text'];?>
<?php } else { ?>
����ע�ᣬ�ύ������ѣ����ø��๦�ܣ�����������ת������
<?php } ?>
</strong></h3>
<p>����Ҫ <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href);return false;">��¼</a> �ſ������ػ�鿴��û���ʺţ�<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" title="ע���ʺ�"><?php echo $_G['setting']['reglinkname'];?></a> <?php if(!empty($_G['setting']['pluginhooks']['global_login_text'])) echo $_G['setting']['pluginhooks']['global_login_text'];?></p>
</div>
<span class="atips_close" onclick="this.parentNode.style.display='none'">x</span>
</div>
<?php } ?>
<?php echo $post['message'];?></td></tr></table>
<?php } elseif($_G['forum_thread']['special'] == 1) { include template('forum/viewthread_poll'); } elseif($_G['forum_thread']['special'] == 2) { include template('forum/viewthread_trade'); } elseif($_G['forum_thread']['special'] == 3) { include template('forum/viewthread_reward'); } elseif($_G['forum_thread']['special'] == 4) { include template('forum/viewthread_activity'); } elseif($_G['forum_thread']['special'] == 5) { include template('forum/viewthread_debate'); } elseif($_G['forum_thread']['special'] == 127) { ?>
<?php echo $threadplughtml;?>
<table cellspacing="0" cellpadding="0"><tr><td class="t_f" id="postmessage_<?php echo $post['pid'];?>"><?php echo $post['message'];?></td></tr></table>
<?php } } else { ?>
<table cellspacing="0" cellpadding="0"><tr><td class="t_f" id="postmessage_<?php echo $post['pid'];?>">
<?php if(!$_G['inajax']) { if($ad_a_pr) { ?>
<?php echo $ad_a_pr;?>
<?php } } if($post['invisible'] != '-2' || $_G['forum']['ismoderator']) { ?><?php echo $post['message'];?><?php } else { ?><span class="xg1">�����</span><?php } ?></td></tr></table>
<?php } ?>
<?php echo $_G['forum_posthtml']['footer'][$post['pid']];?>

<?php if($post['attachment'] && $_GET['from'] != 'preview') { ?>
<div class="attach_nopermission attach_tips">
<div>
<h3><strong>�������а���������Դ</strong></h3>
<p><?php if($_G['uid']) { ?>�����ڵ��û����޷����ػ�鿴����<?php } elseif($_G['connectguest']) { ?>����Ҫ <a href="member.php?mod=connect" class="xi2">�����ʺ���Ϣ</a> �� <a href="member.php?mod=connect&amp;ac=bind" class="xi2">�������ʺ�</a> ��ſ������ػ�鿴<?php } else { ?>����Ҫ <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href);return false;">��¼</a> �ſ������ػ�鿴��û���ʺţ�<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" title="ע���ʺ�"><?php echo $_G['setting']['reglinkname'];?></a> <?php if(!empty($_G['setting']['pluginhooks']['global_login_text'])) echo $_G['setting']['pluginhooks']['global_login_text'];?><?php } ?></p>
</div>
<span class="atips_close" onclick="this.parentNode.style.display='none'">x</span>
</div>
<?php } elseif($post['imagelist'] || $post['attachlist']) { ?>
<div class="pattl">
<?php if($post['imagelist'] && $_G['setting']['imagelistthumb'] && $post['imagelistcount'] >= $_G['setting']['imagelistthumb']) { if(!isset($imagelistkey)) { $imagelistkey = rawurlencode(dsign($_G[tid].'|100|100'))?><script type="text/javascript" reload="1">var imagelistkey = '<?php echo $imagelistkey;?>';</script>
<?php } $post['imagelistthumb'] = true;?><div class="bbda cl mtw mbm pbm">
<strong>����ͼƬ</strong>
<a href="javascript:;" onclick="attachimglst('<?php echo $post['pid'];?>', 0)" class="xi2 attl_g">Сͼ</a>
<a href="javascript:;" onclick="attachimglst('<?php echo $post['pid'];?>', 1, <?php echo intval($_G['setting']['lazyload']); ?>)" class="xi2 attl_m">��ͼ</a>
</div>
<div id="imagelist_<?php echo $post['pid'];?>" class="cl" style="display:none"><?php echo showattach($post, 1); ?></div>
<div id="imagelistthumb_<?php echo $post['pid'];?>" class="pattl_c cl"><img src="<?php echo IMGDIR;?>/loading.gif" width="16" height="16" class="vm" /> ��ͼ���У����Ժ�......</div>
<?php } else { echo showattach($post, 1); } if($post['attachlist']) { echo showattach($post); } ?>
</div>
<?php } if($_G['setting']['allowfastreply'] && $post['first'] && $fastpost && $allowpostreply && !$_G['forum_thread']['archiveid'] && $_GET['from'] != 'preview') { ?>
<div id="vfastpost" class="fullvfastpost">
<form method="post" autocomplete="off" id="vfastpostform" action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;fromvf=1&amp;extra=<?php echo $_G['gp_extra'];?>&amp;replysubmit=yes<?php if($_G['gp_ordertype'] != 1) { ?>&amp;infloat=yes&amp;handlekey=vfastpost<?php } if($_G['gp_from']) { ?>&amp;from=<?php echo $_G['gp_from'];?><?php } ?>" onsubmit="this.message.value = parseurl(this.message.value);ajaxpost('vfastpostform', 'return_reply', 'return_reply', 'onerror');return false;">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<table cellspacing="0" cellpadding="0" id="vfastposttb">
<tr>
<td id="vf_l"></td>
<td id="vf_m">
<input type="text" name="message" id="vmessage" onKeyDown="seditor_ctlent(event, '$(\'vfastpostform\').submit()');"/>
</td>
<td id="vf_r"></td>
<td id="vf_b">
<button type="submit" class="pn pnc" name="replysubmit" id="vreplysubmit" value="true" style="">post_newreply</button>
</td>
</tr>
</table>
</form>
</div>
<script type="text/javascript">
//$('note_<?php echo $tid;?>').focus();
function succeedhandle_vfastpost(url, message, param) {
$('vmessage').value = '';
succeedhandle_fastpost(url, message, param);
showCreditPrompt();
}
var vf_tips = '#��������ٻظ�#';
$('vmessage').value = vf_tips;
$('vmessage').style.color = '#CDCDCD';
$('vmessage').onclick = function() {
if($('vmessage').value==vf_tips) {
$('vmessage').value='';
$('vmessage').style.color="#000";
}
}
$('vmessage').onblur = function() {
if(!$('vmessage').value) {
$('vmessage').value=vf_tips;
$('vmessage').style.color="#CDCDCD";
}
}
$('vreplysubmit').onclick = function() {
if($('vmessage').value == vf_tips) {
return false;
}
}
</script>
<?php } ?>

</div>
<div id="comment_<?php echo $post['pid'];?>" class="cm">
<?php if($_GET['from'] != 'preview' && $_G['setting']['commentnumber'] && !empty($comments[$post['pid']])) { ?>
<h3 class="psth xs1"><span class="icon_ring vm"></span>����</h3>
<?php if($totalcomment[$post['pid']]) { ?><div class="pstl"><?php echo $totalcomment[$post['pid']];?></div><?php } if(is_array($comments[$post['pid']])) foreach($comments[$post['pid']] as $comment) { ?><div class="pstl xs1 cl">
<div class="psta vm">
<a href="home.php?mod=space&amp;uid=<?php echo $comment['authorid'];?>" c="1"><?php echo $comment['avatar'];?></a>
<?php if($comment['authorid']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $comment['authorid'];?>" class="xi2 xw1"><?php echo $comment['author'];?></a>
<?php } else { ?>
�ο�
<?php } ?>
</div>
<div class="psti">
<?php echo $comment['comment'];?>&nbsp;
<?php if($comment['rpid']) { ?>
<a href="forum.php?mod=redirect&amp;goto=findpost&amp;pid=<?php echo $comment['rpid'];?>&amp;ptid=<?php echo $_G['tid'];?>" class="xi2">����</a>
<a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;repquote=<?php echo $comment['rpid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" class="xi2" onclick="showWindow('reply', this.href)">�ظ�</a>
<?php } ?>
<span class="xg1">
������ <?php echo dgmdate($comment[dateline], 'u');?><?php if($comment['useip'] && $_G['group']['allowviewip']) { ?>&nbsp;IP:<?php echo $comment['useip'];?><?php } if($_G['forum']['ismoderator'] && $_G['group']['allowdelpost']) { ?>&nbsp;<a href="javascript:;" onclick="modaction('delcomment', <?php echo $comment['id'];?>)">ɾ��</a><?php } ?>
</span>
</div>
</div>
<?php } if($commentcount[$post['pid']] > $_G['setting']['commentnumber']) { ?><div class="pgs mbm mtn cl"><div class="pg"><a href="javascript:;" class="nxt" onclick="ajaxget('forum.php?mod=misc&action=commentmore&tid=<?php echo $post['tid'];?>&pid=<?php echo $post['pid'];?>&page=2', 'comment_<?php echo $post['pid'];?>')">��һҳ</a></div></div><?php } } ?>
</div>

<?php if($_GET['from'] != 'preview' && !empty($post['ratelog'])) { ?>
<h3 class="psth xs1"><span class="icon_ring vm"></span>����</h3>
<dl id="ratelog_<?php echo $post['pid'];?>" class="rate<?php if(!empty($_G['cookie']['ratecollapse'])) { ?> rate_collapse<?php } ?>">
<?php if($_G['setting']['ratelogon']) { ?>
<dd style="margin:0">
<?php } else { ?>
<dt>
<?php if(!empty($postlist[$post['pid']]['totalrate'])) { ?>
<strong><a href="forum.php?mod=misc&amp;action=viewratings&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" onclick="showWindow('viewratings', this.href)" title="����<?php echo count($postlist[$post['pid']]['totalrate']);; ?>������, �鿴ȫ������"><?php echo count($postlist[$post['pid']]['totalrate']);; ?></a></strong>
<p><a href="forum.php?mod=misc&amp;action=viewratings&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" onclick="showWindow('viewratings', this.href)">�鿴ȫ������</a></p>
<?php } ?>
</dt>
<dd>
<?php } ?>
<div id="post_rate_<?php echo $post['pid'];?>"></div>
<?php if($_G['setting']['ratelogon']) { ?>
<table class="ratl">
<tr>
<th class="xw1" width="120"><a href="forum.php?mod=misc&amp;action=viewratings&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" onclick="showWindow('viewratings', this.href)" title="�鿴ȫ������"> �������� <span class="xi1"><?php echo count($postlist[$post['pid']]['totalrate']);; ?></span></a></th><?php if(is_array($post['ratelogextcredits'])) foreach($post['ratelogextcredits'] as $id => $score) { if($score > 0) { ?>
<th class="xw1" width="80"><?php echo $_G['setting']['extcredits'][$id]['title'];?> <i><span class="xi1">+<?php echo $score;?></span></i></th>
<?php } else { ?>
<th class="xw1" width="80"><?php echo $_G['setting']['extcredits'][$id]['title'];?> <i><span class="xi1"><?php echo $score;?></span></i></th>
<?php } } ?>
<th>
<a href="javascript:;" onclick="toggleRatelogCollapse('ratelog_<?php echo $post['pid'];?>', this);" class="y xi2 op"><?php if(!empty($_G['cookie']['ratecollapse'])) { ?>չ��<?php } else { ?>����<?php } ?></a>
<i class="txt_h">����</i>
</th>
</tr>
<tbody class="ratl_l"><?php if(is_array($post['ratelog'])) foreach($post['ratelog'] as $uid => $ratelog) { ?><tr id="rate_<?php echo $post['pid'];?>_<?php echo $uid;?>">
<td>
<a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank"><?php echo avatar($uid, 'small');; ?></a> <a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank"><?php echo $ratelog['username'];?></a>
</td><?php if(is_array($post['ratelogextcredits'])) foreach($post['ratelogextcredits'] as $id => $score) { if($ratelog['score'][$id] > 0) { ?>
<td class="xi1"> + <?php echo $ratelog['score'][$id];?></td>
<?php } else { ?>
<td class="xg1"><?php echo $ratelog['score'][$id];?></td>
<?php } } ?>
<td class="xg1"><?php echo $ratelog['reason'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
<p class="ratc">
<a href="forum.php?mod=misc&amp;action=viewratings&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" onclick="showWindow('viewratings', this.href)" title="�鿴ȫ������" class="xi2">�鿴ȫ������</a>
</p>
<?php } else { ?>
<ul class="cl"><?php if(is_array($post['ratelog'])) foreach($post['ratelog'] as $uid => $ratelog) { ?><li>
<p id="rate_<?php echo $post['pid'];?>_<?php echo $uid;?>" onmouseover="showTip(this)" tip="<strong><?php echo $ratelog['reason'];?></strong>&nbsp;<?php if(is_array($ratelog['score'])) foreach($ratelog['score'] as $id => $score) { if($score > 0) { ?>
<em class='xi1'><?php echo $_G['setting']['extcredits'][$id]['title'];?> + <?php echo $score;?> <?php echo $_G['setting']['extcredits'][$id]['unit'];?></em>
<?php } else { ?>
<span><?php echo $_G['setting']['extcredits'][$id]['title'];?> <?php echo $score;?> <?php echo $_G['setting']['extcredits'][$id]['unit'];?></span>
<?php } } ?>" class="mtn mbn"><a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank" class="avt"><?php echo avatar($uid, 'small');; ?></a></p>
<p><a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank"><?php echo $ratelog['username'];?></a></p>
</li>
<?php } ?>
</ul>
<?php } ?>
</dd>
</dl>
<?php } else { ?>
<div id="post_rate_div_<?php echo $post['pid'];?>"></div>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postbottom'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postbottom'][$postcount];?>
</div>
</div>

<?php if(helper_access::check_module('collection') && !$_G['forum']['disablecollect']) { if($post['relatecollection']) { ?>
<div class="cm">
<h3 class="psth xs1">������������ר���Ƽ�:</h3>
<ul class="mbw xl xl2 cl"><?php if(is_array($post['relatecollection'])) foreach($post['relatecollection'] as $var) { ?><li>&middot; <a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $var['ctid'];?>" title="<?php echo $var['name'];?>" target="_blank" class="xi2 xw1"><?php echo $var['name'];?></a><span class="pipe">|</span><span class="xg1">����: <?php echo $var['threadnum'];?>, ����: <?php echo $var['follownum'];?></span></li>
<?php } if($post['releatcollectionmore']) { ?>
<li>&middot; <a href="forum.php?mod=collection&amp;tid=<?php echo $_G['tid'];?>" target="_blank" class="xi2 xw1">����</a></li>
<?php } ?>
</ul>
</div>
<?php if($post['sourcecollection']['ctid']) { ?>
<div>
���Ǵ���ר�� <a href="forum.php?mod=collection&amp;action=view&amp;ctid=<?php echo $post['sourcecollection']['ctid'];?>" target="_blank" class="xi2"><?php echo $post['sourcecollection']['name'];?></a> ���ʵ������ģ���ӭ��ר����֣�
<form action="forum.php?mod=collection&amp;action=comment&amp;ctid=<?php echo $ctid;?>&amp;tid=<?php echo $_G['tid'];?>" method="POST" class="ptm pbm cl">
<input type="hidden" name="ratescore" id="ratescore" />
<span class="clct_ratestar">
<span class="btn">
<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',1)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',1,'ratescore')">1</a>
<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',2)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',2,'ratescore')">2</a>
<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',3)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',3,'ratescore')">3</a>
<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',4)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',4,'ratescore')">4</a>
<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',5)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',5,'ratescore')">5</a>
</span>
<span id="clct_ratestar_star" class="star star<?php echo $memberrate;?>"></span>
</span>
&nbsp;<button type="submit" value="submit" class="pn"><span>����</span></button>
</form>
</div>
<?php } } } ?>

</td></tr>



<?php if(!$_G['forum_thread']['archiveid']) { ?>
<tr>

<td class="plc" style="overflow:visible;" colspan="2">
<div class="po">

<div class="pob cl">
<em>
<?php if($post['invisible'] == 0) { if($allowpostreply && $post['allowcomment'] && (!$thread['closed'] || $_G['forum']['ismoderator'])) { ?><a class="cmmnt" href="forum.php?mod=misc&amp;action=comment&amp;tid=<?php echo $post['tid'];?>&amp;pid=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_G['forum_thread']['special'] == 127) { ?>&amp;special=<?php echo $specialextra;?><?php } ?>" onclick="showWindow('comment', this.href, 'get', 0)">����</a><?php } } if((($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] <= $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && ($post['authorid'] == $_G['uid'] && $_G['forum_thread']['closed'] == 0) && !(!$alloweditpost_status && $edittimelimit && TIMESTAMP - $post['dbdateline'] > $edittimelimit)))) { ?>
<a class="editp" href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?><?php if(!empty($_GET['modthreadkey'])) { ?>&amp;modthreadkey=<?php echo $_GET['modthreadkey'];?><?php } ?>&amp;page=<?php echo $page;?>"><?php if($_G['forum_thread']['special'] == 2 && !$post['message']) { ?>��ӹ�̨����<?php } else { ?>�༭</a><?php } } elseif($_G['uid'] && $post['authorid'] == $_G['uid'] && $_G['setting']['postappend']) { ?>
<a class="appendp" href="forum.php?mod=misc&amp;action=postappend&amp;tid=<?php echo $post['tid'];?>&amp;pid=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?>" onClick="showWindow('postappend', this.href, 'get', 0)">����</a>
<?php } if($post['first'] && $post['invisible'] == -3) { ?>
<a class="psave" href="forum.php?mod=misc&amp;action=pubsave&amp;tid=<?php echo $_G['tid'];?>">����</a>
<?php } if($post['first'] && $allowblockrecommend) { ?><a class="push" href="javascript:;" onclick="modaction('recommend', '<?php echo $_G['forum_firstpid'];?>', 'op=recommend&idtype=<?php if($_G['forum_thread']['isgroup']) { ?>gtid<?php } else { ?>tid<?php } ?>&id=<?php echo $_G['tid'];?>&pid=<?php echo $post['pid'];?>', 'portal.php?mod=portalcp&ac=portalblock')">����</a><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postfooter'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postfooter'][$postcount];?>
</em>

<p>
<?php if($post['invisible'] == 0) { if($_G['forum_thread']['special'] == 3 && ($_G['forum']['ismoderator'] && (!$_G['setting']['rewardexpiration'] || $_G['setting']['rewardexpiration'] > 0 && ($_G['timestamp'] - $_G['forum_thread']['dateline']) / 86400 > $_G['setting']['rewardexpiration']) || $_G['forum_thread']['authorid'] == $_G['uid']) && $post['authorid'] != $_G['forum_thread']['authorid'] && $post['first'] == 0 && $_G['uid'] != $post['authorid'] && $_G['forum_thread']['price'] > 0) { ?>
<a href="javascript:;" onclick="setanswer(<?php echo $post['pid'];?>, '<?php echo $_GET['from'];?>')">��Ѵ�</a>
<?php } if(!empty($postlist[$post['pid']]['totalrate']) && $_G['forum']['ismoderator']) { ?>
<a href="forum.php?mod=misc&amp;action=removerate&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>&amp;page=<?php echo $page;?>" onclick="showWindow('rate', this.href, 'get', -1)">��������</a>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postaction'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postaction'][$postcount];?>
</p>


</div>
</div>
</td>
</tr>
<?php } ?>
<tr class="">
<td class="pls"></td>
<td class="plc">
<?php if($post['first'] && $_G['forum_thread']['special'] == 5 && $_G['forum_thread']['displayorder'] >= 0) { ?>
<ul class="ttp cl">
<li style="display:inline;margin-left:12px"><strong class="bw0 bg0_all">������ɸѡ: </strong></li>
<li<?php if(!isset($_GET['stand'])) { ?> class="xw1 a"<?php } ?>><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>" hidefocus="true">ȫ��</a></li>
<li<?php if($_GET['stand'] == 1) { ?> class="xw1 a"<?php } ?>><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;stand=1" hidefocus="true">����</a></li>
<li<?php if($_GET['stand'] == 2) { ?> class="xw1 a"<?php } ?>><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;stand=2" hidefocus="true">����</a></li>
<li<?php if(isset($_GET['stand']) && $_GET['stand'] == 0) { ?> class="xw1 a"<?php } ?>><a href="forum.php?mod=viewthread&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;stand=0" hidefocus="true">����</a></li>
</ul>
<?php } if($_G['forum_thread']['replies']) { ?><?php echo adshow("interthread/a_p/$postcount");?><?php } ?>
</td>
</tr>
</table>








<td class="plc plm">
<?php if($locations[$post['pid']]) { ?>
<div class="mobile-location"><?php echo $locations[$post['pid']]['location'];?></div>
<?php } if(!IS_ROBOT && $post['first'] && !$_G['forum_thread']['archiveid']) { ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_modaction'])) echo $_G['setting']['pluginhooks']['viewthread_modaction'];?>

<?php if($post['invisible'] == 0) { ?>
<div id="p_btn" class="mtw mbm cl">
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_share_method'])) { ?>
<div class="tshare cl">
<strong>����:</strong>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_share_method'])) echo $_G['setting']['pluginhooks']['viewthread_share_method'];?>
</div>
<?php } if(!$post['anonymous'] && helper_access::check_module('follow')) { ?>
<a href="home.php?mod=spacecp&amp;ac=follow&amp;op=relay&amp;tid=<?php echo $_G['tid'];?>&amp;from=forum" id="k_relay" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('relaynumber').innerHTML + ' ��ת��'"><i><img src="<?php echo IMGDIR;?>/rt.png" alt="ת��" />ת��<span id="relaynumber"><?php echo $_G['forum_thread']['relay'];?></span></i></a>
<?php } if(!$_G['forum']['disablecollect'] && helper_access::check_module('collection')) { ?>
<a href="forum.php?mod=collection&amp;action=edit&amp;op=addthread&amp;tid=<?php echo $_G['tid'];?>" id="k_collect" onclick="showWindow(this.id, this.href);return false;" onmouseover="this.title = $('collectionnumber').innerHTML + ' ������'"><i><img src="<?php echo IMGDIR;?>/collection.png" alt="����" />����<span id="collectionnumber"><?php echo $post['releatcollectionnum'];?></span></i></a>
<?php } if(($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']) { if(!empty($_G['setting']['recommendthread']['addtext'])) { ?>
<a id="recommend_add" href="forum.php?mod=misc&amp;action=recommend&amp;do=add&amp;tid=<?php echo $_G['tid'];?>&amp;hash=<?php echo FORMHASH;?>" <?php if($_G['uid']) { ?>onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate(<?php echo $_G['group']['allowrecommend'];?>)');return false;"<?php } else { ?> onclick="showWindow('login', this.href)"<?php } ?> onmouseover="this.title = $('recommendv_add').innerHTML + ' ��<?php echo $_G['setting']['recommendthread']['addtext'];?>'"><i><img src="<?php echo IMGDIR;?>/rec_add.gif" alt="<?php echo $_G['setting']['recommendthread']['addtext'];?>" /><?php echo $_G['setting']['recommendthread']['addtext'];?><span id="recommendv_add"><?php echo $_G['forum_thread']['recommend_add'];?></span></i></a>
<?php } if(!empty($_G['setting']['recommendthread']['subtracttext'])) { ?>
<a id="recommend_subtract" href="forum.php?mod=misc&amp;action=recommend&amp;do=subtract&amp;tid=<?php echo $_G['tid'];?>&amp;hash=<?php echo FORMHASH;?>" <?php if($_G['uid']) { ?>onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate(-<?php echo $_G['group']['allowrecommend'];?>)');return false;"<?php } else { ?> onclick="showWindow('login', this.href)"<?php } ?> onmouseover="this.title = $('recommendv_subtract').innerHTML + ' ��<?php echo $_G['setting']['recommendthread']['subtracttext'];?>'"><i><img src="<?php echo IMGDIR;?>/rec_subtract.gif" alt="<?php echo $_G['setting']['recommendthread']['subtracttext'];?>" /><?php echo $_G['setting']['recommendthread']['subtracttext'];?><span id="recommendv_subtract"><?php echo $_G['forum_thread']['recommend_sub'];?></span></i></a>
<?php } } if($_G['group']['raterange'] && $post['authorid']) { ?>
<a href="javascript:;" id="ak_rate" onclick="showWindow('rate', 'forum.php?mod=misc&action=rate&tid=<?php echo $_G['tid'];?>&pid=<?php echo $post['pid'];?>', 'get', -1);return false;" title="<?php echo count($postlist[$post['pid']]['totalrate']);; ?> ������"><i><img src="<?php echo IMGDIR;?>/agree.gif" alt="����" />����</i></a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_useraction'])) echo $_G['setting']['pluginhooks']['viewthread_useraction'];?>
</div>
<?php } } if($post['signature'] && ($_G['setting']['bannedmessages'] & 4 && ($post['memberstatus'] == '-1' || ($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || ($post['status'] & 1)))) { ?>
<div class="sign">ǩ��������</div>
<?php } elseif($post['signature'] && !$post['anonymous'] && $showsignatures) { ?>
<div class="sign" style="max-height:<?php echo $_G['setting']['maxsigrows'];?>px;maxHeightIE:<?php echo $_G['setting']['maxsigrows'];?>px;"><?php echo $post['signature'];?></div>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postsightmlafter'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postsightmlafter'][$postcount];?><?php echo adshow("thread/a_pb/1/$postcount");?></td>


<!--�����ǻظ�-->
<div class="comBox">
    <h3>COMMENTS���� <?php echo $_G['forum_thread']['replies'];?> ���˷�������</h3>




</div>



<?php } else { ?>




<div class="vt_table">
<table id="pid<?php echo $post['pid'];?>" summary="pid<?php echo $post['pid'];?>" cellspacing="0" cellpadding="0">
<tr>
<td class="vt_pls" rowspan="2">



  <div class="vt_avatar"><a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank"><?php echo $post['avatar'];?></a></div>


</td>



<td class="plc" colspan="2">
<div class="vt_pi">


<?php if($post['authorid'] && !$post['anonymous']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank" class="c_blue xw1"><?php echo $post['author'];?></a>


<em id="authorposton<?php echo $post['pid'];?>"> <?php echo $post['dateline'];?></em>


<?php } elseif(getstatus($post['status'], 5)) { ?>

&nbsp;<em id="authorposton<?php echo $post['pid'];?>"> <?php echo $post['dateline'];?></em>  <a href="home.php?mod=space&amp;uid=<?php echo $post['authorid'];?>" target="_blank" class="c_blue xw1"><?php echo $post['author'];?></a>
<?php } elseif($post['authorid'] && $post['username'] && $post['anonymous'] || !$post['authorid'] && !$post['username']) { ?>
<?php echo $_G['setting']['anonymoustext'];?>&nbsp;
<em id="authorposton<?php echo $post['pid'];?>"> <?php echo $post['dateline'];?></em>
<?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postheader'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postheader'][$postcount];?>


</div>


<div class="pct cl">

<?php if(!$_G['inajax']) { if(empty($ad_a_pr_css)) { ?>
<style type="text/css">.pcb{margin-right:0}</style><?php $ad_a_pr_css=1;?><?php } } if(!$post['first'] && $post['replycredit'] > 0) { ?>
<div class="cm">
<h3 class="psth xs1">
�������� <span class="xw1 xs2 xi1">+<?php echo $post['replycredit'];?></span> <?php echo $_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']]['title'];?>
</h3>
</div>
<?php } ?>
            <div class="pcb">
<?php if(!$_G['forum']['ismoderator'] && $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($_G['thread']['digest'] == 0 && ($post['groupid'] == 4 || $post['groupid'] == 5 || $post['memberstatus'] == '-1')))) { ?>
<div class="locked">��ʾ: <em>���߱���ֹ��ɾ�� �����Զ�����</em></div>
<?php } elseif(!$_G['forum']['ismoderator'] && $post['status'] & 1) { ?>
<div class="locked">��ʾ: <em>����������Ա���������</em></div>
<?php } elseif($needhiddenreply) { ?>
<div class="locked">���������߿ɼ�</div>
<?php } elseif($post['first'] && $_G['forum_threadpay']) { include template('forum/viewthread_pay'); } elseif($_G['forum_discuzcode']['passwordlock'][$post['pid']]) { ?>
<div class="locked">����Ϊ������ ������������<input type="text" id="postpw_<?php echo $post['pid'];?>" class="vm" />&nbsp;<button class="pn vm" type="button" onclick="submitpostpw(<?php echo $post['pid'];?><?php if($_GET['from'] == 'preview') { ?>,<?php echo $post['tid'];?><?php } else { } ?>)"><strong>�ύ</strong></button></div>
<?php } else { if(!$post['first'] && !empty($post['subject'])) { ?>
<h2><?php echo $post['subject'];?></h2>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_posttop'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_posttop'][$postcount];?>
<?php if($_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($_G['thread']['digest'] == 0 && ($post['groupid'] == 4 || $post['groupid'] == 5 || $post['memberstatus'] == '-1')))) { ?>
<div class="locked">��ʾ: <em>���߱���ֹ��ɾ�� �����Զ����Σ�ֻ�й���Ա���й���Ȩ�޵ĳ�Ա�ɼ�</em></div>
<?php } elseif($post['status'] & 1) { ?>
<div class="locked">��ʾ: <em>����������Ա��������Σ�ֻ�й���Ա���й���Ȩ�޵ĳ�Ա�ɼ�</em></div>
<?php } if(!$post['first'] && $hiddenreplies && $_G['forum']['ismoderator']) { ?>
<div class="locked">���������߿ɼ�</div>
<?php } if($post['first']) { ?> 
<?php if($_G['forum_thread']['price'] > 0 && $_G['forum_thread']['special'] == 0 && empty($previewspecial)) { ?>
<div class="locked"><em class="y"><a href="forum.php?mod=misc&amp;action=viewpayments&amp;tid=<?php echo $_G['tid'];?>" onclick="showWindow('pay', this.href)">��¼</a></em>��������, �۸�: <strong><?php echo $_G['forum_thread']['price'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?> </strong></div>
<?php } if($threadsort && $threadsortshow) { if($threadsortshow['typetemplate']) { ?>
<?php echo $threadsortshow['typetemplate'];?>
<?php } elseif($threadsortshow['optionlist']) { ?>
<div class="typeoption">
<?php if($threadsortshow['optionlist'] == 'expire') { ?>
����Ϣ�Ѿ�����
<?php } else { ?>
<table summary="������Ϣ" cellpadding="0" cellspacing="0" class="cgtl mbm">
<caption><?php echo $_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']];?></caption>
<tbody><?php if(is_array($threadsortshow['optionlist'])) foreach($threadsortshow['optionlist'] as $option) { if($option['type'] != 'info') { ?>
<tr>
<th><?php echo $option['title'];?>:</th>
<td><?php if($option['value'] || ($option['type'] == 'number' && $option['value'] !== '')) { ?><?php echo $option['value'];?> <?php echo $option['unit'];?><?php } else { ?>-<?php } ?></td>
</tr>
<?php } } ?>
</tbody>
</table>
<?php } ?>
</div>
<?php } } } if($_G['forum_discuzcode']['passwordauthor'][$post['pid']]) { ?>
<div class="locked">����Ϊ������</div>
<?php } ?>
<div class="<?php if(!$_G['forum_thread']['special']) { ?>t_fsz<?php } else { ?>pcbs<?php } ?>">
<?php echo $_G['forum_posthtml']['header'][$post['pid']];?>
<?php if($post['first']) { if(!$_G['forum_thread']['special']) { ?>
<table cellspacing="0" cellpadding="0"><tr><td class="t_f" id="postmessage_<?php echo $post['pid'];?>">
<?php if(!$_G['inajax']) { if($ad_a_pr) { ?>
<?php echo $ad_a_pr;?>
<?php } } if(!empty($_G['setting']['guesttipsinthread']['flag']) && empty($_G['uid']) && !$post['attachment'] && $_GET['from'] != 'preview') { ?>
<div class="attach_nopermission attach_tips">
<div>
<h3><strong>
<?php if(!empty($_G['setting']['guesttipsinthread']['text'])) { ?>
<?php echo $_G['setting']['guesttipsinthread']['text'];?>
<?php } else { ?>
����ע�ᣬ�ύ������ѣ����ø��๦�ܣ�����������ת������
<?php } ?>
</strong></h3>
<p>����Ҫ <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href);return false;">��¼</a> �ſ������ػ�鿴��û���ʺţ�<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" title="ע���ʺ�"><?php echo $_G['setting']['reglinkname'];?></a> <?php if(!empty($_G['setting']['pluginhooks']['global_login_text'])) echo $_G['setting']['pluginhooks']['global_login_text'];?></p>
</div>
<span class="atips_close" onclick="this.parentNode.style.display='none'">x</span>
</div>
<?php } ?>
<?php echo $post['message'];?></td></tr></table>
<?php } elseif($_G['forum_thread']['special'] == 1) { include template('forum/viewthread_poll'); } elseif($_G['forum_thread']['special'] == 2) { include template('forum/viewthread_trade'); } elseif($_G['forum_thread']['special'] == 3) { include template('forum/viewthread_reward'); } elseif($_G['forum_thread']['special'] == 4) { include template('forum/viewthread_activity'); } elseif($_G['forum_thread']['special'] == 5) { include template('forum/viewthread_debate'); } elseif($_G['forum_thread']['special'] == 127) { ?>
<?php echo $threadplughtml;?>
<table cellspacing="0" cellpadding="0"><tr><td class="t_f" id="postmessage_<?php echo $post['pid'];?>"><?php echo $post['message'];?></td></tr></table>
<?php } } else { ?>
<table cellspacing="0" cellpadding="0"><tr><td class="t_f" id="postmessage_<?php echo $post['pid'];?>">
<?php if(!$_G['inajax']) { if($ad_a_pr) { ?>
<?php echo $ad_a_pr;?>
<?php } } if($post['invisible'] != '-2' || $_G['forum']['ismoderator']) { ?><?php echo $post['message'];?><?php } else { ?><span class="xg1">�����</span><?php } ?></td></tr></table>
<?php } ?>
<?php echo $_G['forum_posthtml']['footer'][$post['pid']];?>

<?php if($post['attachment'] && $_GET['from'] != 'preview') { ?>
<div class="attach_nopermission attach_tips">
<div>
<h3><strong>�������а���������Դ</strong></h3>
<p><?php if($_G['uid']) { ?>�����ڵ��û����޷����ػ�鿴����<?php } elseif($_G['connectguest']) { ?>����Ҫ <a href="member.php?mod=connect" class="xi2">�����ʺ���Ϣ</a> �� <a href="member.php?mod=connect&amp;ac=bind" class="xi2">�������ʺ�</a> ��ſ������ػ�鿴<?php } else { ?>����Ҫ <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href);return false;">��¼</a> �ſ������ػ�鿴��û���ʺţ�<a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" title="ע���ʺ�"><?php echo $_G['setting']['reglinkname'];?></a> <?php if(!empty($_G['setting']['pluginhooks']['global_login_text'])) echo $_G['setting']['pluginhooks']['global_login_text'];?><?php } ?></p>
</div>
<span class="atips_close" onclick="this.parentNode.style.display='none'">x</span>
</div>
<?php } elseif($post['imagelist'] || $post['attachlist']) { ?>
<div class="pattl">
<?php if($post['imagelist'] && $_G['setting']['imagelistthumb'] && $post['imagelistcount'] >= $_G['setting']['imagelistthumb']) { if(!isset($imagelistkey)) { $imagelistkey = rawurlencode(dsign($_G[tid].'|100|100'))?><script type="text/javascript" reload="1">var imagelistkey = '<?php echo $imagelistkey;?>';</script>
<?php } $post['imagelistthumb'] = true;?><div class="bbda cl mtw mbm pbm">
<strong>����ͼƬ</strong>
<a href="javascript:;" onclick="attachimglst('<?php echo $post['pid'];?>', 0)" class="xi2 attl_g">Сͼ</a>
<a href="javascript:;" onclick="attachimglst('<?php echo $post['pid'];?>', 1, <?php echo intval($_G['setting']['lazyload']); ?>)" class="xi2 attl_m">��ͼ</a>
</div>
<div id="imagelist_<?php echo $post['pid'];?>" class="cl" style="display:none"><?php echo showattach($post, 1); ?></div>
<div id="imagelistthumb_<?php echo $post['pid'];?>" class="pattl_c cl"><img src="<?php echo IMGDIR;?>/loading.gif" width="16" height="16" class="vm" /> ��ͼ���У����Ժ�......</div>
<?php } else { echo showattach($post, 1); } if($post['attachlist']) { echo showattach($post); } ?>
</div>
<?php } if($_G['setting']['allowfastreply'] && $post['first'] && $fastpost && $allowpostreply && !$_G['forum_thread']['archiveid'] && $_GET['from'] != 'preview') { ?>
<div id="vfastpost" class="fullvfastpost">
<form method="post" autocomplete="off" id="vfastpostform" action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;fromvf=1&amp;extra=<?php echo $_G['gp_extra'];?>&amp;replysubmit=yes<?php if($_G['gp_ordertype'] != 1) { ?>&amp;infloat=yes&amp;handlekey=vfastpost<?php } if($_G['gp_from']) { ?>&amp;from=<?php echo $_G['gp_from'];?><?php } ?>" onsubmit="this.message.value = parseurl(this.message.value);ajaxpost('vfastpostform', 'return_reply', 'return_reply', 'onerror');return false;">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<table cellspacing="0" cellpadding="0" id="vfastposttb">
<tr>
<td id="vf_l"></td>
<td id="vf_m">
<input type="text" name="message" id="vmessage" onKeyDown="seditor_ctlent(event, '$(\'vfastpostform\').submit()');"/>
</td>
<td id="vf_r"></td>
<td id="vf_b">
<button type="submit" class="pn pnc" name="replysubmit" id="vreplysubmit" value="true" style="">post_newreply</button>
</td>
</tr>
</table>
</form>
</div>
<script type="text/javascript">
//$('note_<?php echo $tid;?>').focus();
function succeedhandle_vfastpost(url, message, param) {
$('vmessage').value = '';
succeedhandle_fastpost(url, message, param);
showCreditPrompt();
}
var vf_tips = '#��������ٻظ�#';
$('vmessage').value = vf_tips;
$('vmessage').style.color = '#CDCDCD';
$('vmessage').onclick = function() {
if($('vmessage').value==vf_tips) {
$('vmessage').value='';
$('vmessage').style.color="#000";
}
}
$('vmessage').onblur = function() {
if(!$('vmessage').value) {
$('vmessage').value=vf_tips;
$('vmessage').style.color="#CDCDCD";
}
}
$('vreplysubmit').onclick = function() {
if($('vmessage').value == vf_tips) {
return false;
}
}
</script>
<?php } ?>

</div>
<div id="comment_<?php echo $post['pid'];?>" class="cm">
<?php if($_GET['from'] != 'preview' && $_G['setting']['commentnumber'] && !empty($comments[$post['pid']])) { ?>
<h3 class="psth xs1"><span class="icon_ring vm"></span>����</h3>
<?php if($totalcomment[$post['pid']]) { ?><div class="pstl"><?php echo $totalcomment[$post['pid']];?></div><?php } if(is_array($comments[$post['pid']])) foreach($comments[$post['pid']] as $comment) { ?><div class="pstl xs1 cl">
<div class="psta vm">
<a href="home.php?mod=space&amp;uid=<?php echo $comment['authorid'];?>" c="1"><?php echo $comment['avatar'];?></a>
<?php if($comment['authorid']) { ?>
<a href="home.php?mod=space&amp;uid=<?php echo $comment['authorid'];?>" class="xi2 xw1"><?php echo $comment['author'];?></a>
<?php } else { ?>
�ο�
<?php } ?>
</div>
<div class="psti">
<?php echo $comment['comment'];?>&nbsp;
<?php if($comment['rpid']) { ?>
<a href="forum.php?mod=redirect&amp;goto=findpost&amp;pid=<?php echo $comment['rpid'];?>&amp;ptid=<?php echo $_G['tid'];?>" class="xi2">����</a>
<a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;repquote=<?php echo $comment['rpid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" class="xi2" onclick="showWindow('reply', this.href)">�ظ�</a>
<?php } ?>
<span class="xg1">
������ <?php echo dgmdate($comment[dateline], 'u');?><?php if($comment['useip'] && $_G['group']['allowviewip']) { ?>&nbsp;IP:<?php echo $comment['useip'];?><?php } if($_G['forum']['ismoderator'] && $_G['group']['allowdelpost']) { ?>&nbsp;<a href="javascript:;" onclick="modaction('delcomment', <?php echo $comment['id'];?>)">ɾ��</a><?php } ?>
</span>
</div>
</div>
<?php } if($commentcount[$post['pid']] > $_G['setting']['commentnumber']) { ?><div class="pgs mbm mtn cl"><div class="pg"><a href="javascript:;" class="nxt" onclick="ajaxget('forum.php?mod=misc&action=commentmore&tid=<?php echo $post['tid'];?>&pid=<?php echo $post['pid'];?>&page=2', 'comment_<?php echo $post['pid'];?>')">��һҳ</a></div></div><?php } } ?>
</div>

<?php if($_GET['from'] != 'preview' && !empty($post['ratelog'])) { ?>
<h3 class="psth xs1"><span class="icon_ring vm"></span>����</h3>
<dl id="ratelog_<?php echo $post['pid'];?>" class="rate<?php if(!empty($_G['cookie']['ratecollapse'])) { ?> rate_collapse<?php } ?>">
<?php if($_G['setting']['ratelogon']) { ?>
<dd style="margin:0">
<?php } else { ?>
<dt>
<?php if(!empty($postlist[$post['pid']]['totalrate'])) { ?>
<strong><a href="forum.php?mod=misc&amp;action=viewratings&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" onclick="showWindow('viewratings', this.href)" title="����<?php echo count($postlist[$post['pid']]['totalrate']);; ?>������, �鿴ȫ������"><?php echo count($postlist[$post['pid']]['totalrate']);; ?></a></strong>
<p><a href="forum.php?mod=misc&amp;action=viewratings&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" onclick="showWindow('viewratings', this.href)">�鿴ȫ������</a></p>
<?php } ?>
</dt>
<dd>
<?php } ?>
<div id="post_rate_<?php echo $post['pid'];?>"></div>
<?php if($_G['setting']['ratelogon']) { ?>
<table class="ratl">
<tr>
<th class="xw1" width="120"><a href="forum.php?mod=misc&amp;action=viewratings&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" onclick="showWindow('viewratings', this.href)" title="�鿴ȫ������"> �������� <span class="xi1"><?php echo count($postlist[$post['pid']]['totalrate']);; ?></span></a></th><?php if(is_array($post['ratelogextcredits'])) foreach($post['ratelogextcredits'] as $id => $score) { if($score > 0) { ?>
<th class="xw1" width="80"><?php echo $_G['setting']['extcredits'][$id]['title'];?> <i><span class="xi1">+<?php echo $score;?></span></i></th>
<?php } else { ?>
<th class="xw1" width="80"><?php echo $_G['setting']['extcredits'][$id]['title'];?> <i><span class="xi1"><?php echo $score;?></span></i></th>
<?php } } ?>
<th>
<a href="javascript:;" onclick="toggleRatelogCollapse('ratelog_<?php echo $post['pid'];?>', this);" class="y xi2 op"><?php if(!empty($_G['cookie']['ratecollapse'])) { ?>չ��<?php } else { ?>����<?php } ?></a>
<i class="txt_h">����</i>
</th>
</tr>
<tbody class="ratl_l"><?php if(is_array($post['ratelog'])) foreach($post['ratelog'] as $uid => $ratelog) { ?><tr id="rate_<?php echo $post['pid'];?>_<?php echo $uid;?>">
<td>
<a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank"><?php echo avatar($uid, 'small');; ?></a> <a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank"><?php echo $ratelog['username'];?></a>
</td><?php if(is_array($post['ratelogextcredits'])) foreach($post['ratelogextcredits'] as $id => $score) { if($ratelog['score'][$id] > 0) { ?>
<td class="xi1"> + <?php echo $ratelog['score'][$id];?></td>
<?php } else { ?>
<td class="xg1"><?php echo $ratelog['score'][$id];?></td>
<?php } } ?>
<td class="xg1"><?php echo $ratelog['reason'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
<p class="ratc">
<a href="forum.php?mod=misc&amp;action=viewratings&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?>" onclick="showWindow('viewratings', this.href)" title="�鿴ȫ������" class="xi2">�鿴ȫ������</a>
</p>
<?php } else { ?>
<ul class="cl"><?php if(is_array($post['ratelog'])) foreach($post['ratelog'] as $uid => $ratelog) { ?><li>
<p id="rate_<?php echo $post['pid'];?>_<?php echo $uid;?>" onmouseover="showTip(this)" tip="<strong><?php echo $ratelog['reason'];?></strong>&nbsp;<?php if(is_array($ratelog['score'])) foreach($ratelog['score'] as $id => $score) { if($score > 0) { ?>
<em class='xi1'><?php echo $_G['setting']['extcredits'][$id]['title'];?> + <?php echo $score;?> <?php echo $_G['setting']['extcredits'][$id]['unit'];?></em>
<?php } else { ?>
<span><?php echo $_G['setting']['extcredits'][$id]['title'];?> <?php echo $score;?> <?php echo $_G['setting']['extcredits'][$id]['unit'];?></span>
<?php } } ?>" class="mtn mbn"><a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank" class="avt"><?php echo avatar($uid, 'small');; ?></a></p>
<p><a href="home.php?mod=space&amp;uid=<?php echo $uid;?>" target="_blank"><?php echo $ratelog['username'];?></a></p>
</li>
<?php } ?>
</ul>
<?php } ?>
</dd>
</dl>
<?php } else { ?>
<div id="post_rate_div_<?php echo $post['pid'];?>"></div>
<?php } } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postbottom'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postbottom'][$postcount];?>
</div>
<?php if($_G['uid']) { if(!$_G['forum_thread']['archiveid']) { ?>


<div class="cl" style="overflow:visible;">

  
                  

        <div class="vt_po cl">


    <?php if(!$post['first'] && $modmenu['post']) { ?>
<span class="y">

<label for="manage<?php echo $post['pid'];?>">
<input type="checkbox" id="manage<?php echo $post['pid'];?>" class="pc" <?php if(!empty($modclick)) { ?>checked="checked" <?php } ?>onclick="pidchecked(this);modclick(this, <?php echo $post['pid'];?>)" value="<?php echo $post['pid'];?>" autocomplete="off" />
����
</label>

<?php if((($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] <= $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && ($post['authorid'] == $_G['uid'] && $_G['forum_thread']['closed'] == 0) && !(!$alloweditpost_status && $edittimelimit && TIMESTAMP - $post['dbdateline'] > $edittimelimit)))) { ?>
<a class="vt_editp" href="forum.php?mod=post&amp;action=edit&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $post['pid'];?><?php if(!empty($_GET['modthreadkey'])) { ?>&amp;modthreadkey=<?php echo $_GET['modthreadkey'];?><?php } ?>&amp;page=<?php echo $page;?>"><?php if($_G['forum_thread']['special'] == 2 && !$post['message']) { ?>��ӹ�̨����<?php } else { ?>�༭</a><?php } } elseif($_G['uid'] && $post['authorid'] == $_G['uid'] && $_G['setting']['postappend']) { ?>
<a class="vt_appendp" href="forum.php?mod=misc&amp;action=postappend&amp;tid=<?php echo $post['tid'];?>&amp;pid=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?>" onClick="showWindow('postappend', this.href, 'get', 0)">����</a>
<?php } if($post['first'] && $post['invisible'] == -3) { ?>
<a class="vt_psave" href="forum.php?mod=misc&amp;action=pubsave&amp;tid=<?php echo $_G['tid'];?>">����</a>
<?php } if($post['invisible'] == -2 && !$post['first']) { ?>
<span class="xg1">(�����)</span>
<?php } if($post['first'] && $allowblockrecommend) { ?><a class="vt_push" href="javascript:;" onclick="modaction('recommend', '<?php echo $_G['forum_firstpid'];?>', 'op=recommend&idtype=<?php if($_G['forum_thread']['isgroup']) { ?>gtid<?php } else { ?>tid<?php } ?>&id=<?php echo $_G['tid'];?>&pid=<?php echo $post['pid'];?>', 'portal.php?mod=portalcp&ac=portalblock')">����</a><?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_postfooter'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_postfooter'][$postcount];?>



</span>
    <?php } ?>
  
  <?php if($post['invisible'] == 0) { if((!$_G['uid'] || $allowpostreply) && !$needhiddenreply) { ?>

<p class="cl"><a class="vt_fastre" href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;repquote=<?php echo $post['pid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?>" onclick="showWindow('reply', this.href)"></a></p>

<?php } ?>
  <?php } ?>

        </div>



         </div>

<?php } ?>




</div>

<?php } ?>


</td></tr>

</table>
</div>




<?php } if(!empty($aimgs[$post['pid']])) { ?>
<script type="text/javascript" reload="1">
aimgcount[<?php echo $post['pid'];?>] = [<?php echo dimplode($aimgs[$post['pid']]);; ?>];
attachimggroup(<?php echo $post['pid'];?>);
<?php if(empty($_G['setting']['lazyload'])) { if(!$post['imagelistthumb']) { ?>
attachimgshow(<?php echo $post['pid'];?>);
<?php } else { ?>
attachimgshow(<?php echo $post['pid'];?>, 1);
<?php } } ?>
var aimgfid = 0;
<?php if($_G['forum']['picstyle'] && ($_G['forum']['ismoderator'] || $_G['uid'] == $_G['thread']['authorid'])) { ?>
aimgfid = <?php echo $_G['fid'];?>;
<?php } if($post['imagelistthumb']) { ?>
attachimglstshow(<?php echo $post['pid'];?>, <?php echo intval($_G['setting']['lazyload']); ?>, aimgfid, '<?php echo $_G['setting']['showexif'];?>');
<?php } ?>
</script>
<?php } } else { } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_endline'][$postcount])) echo $_G['setting']['pluginhooks']['viewthread_endline'][$postcount];?></div><?php $postcount++;?><?php } ?>
<div id="postlistreply" class="pl"><div id="post_new" class="viewthread_table" style="display: none"></div></div>
<?php if($_G['blockedpids']) { ?>
<div id='hiddenpoststip'><a href='javascript:display_blocked_post();'>����һЩ���ӱ�ϵͳ�Զ����أ����չ��</a></div>
<div id="hiddenposts"></div>
<?php } ?>


<form method="post" autocomplete="off" name="modactions" id="modactions">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="optgroup" />
<input type="hidden" name="operation" />
<input type="hidden" name="listextra" value="<?php echo $_GET['extra'];?>" />
<input type="hidden" name="page" value="<?php echo $page;?>" />
</form>
<?php echo $_G['forum_tagscript'];?>


<div class="pgs mtm mbm cl">
<?php echo $multipage;?>

</div>

<?php if(!empty($_G['setting']['pluginhooks']['viewthread_middle'])) echo $_G['setting']['pluginhooks']['viewthread_middle'];?>
<!--[diy=diyfastposttop]--><div id="diyfastposttop" class="area"></div><!--[/diy]-->
<?php if($fastpost) { ?><script type="text/javascript">
var postminchars = parseInt('<?php echo $_G['setting']['minpostsize'];?>');
var postmaxchars = parseInt('<?php echo $_G['setting']['maxpostsize'];?>');
var disablepostctrl = parseInt('<?php echo $_G['group']['disablepostctrl'];?>');
</script>

<div id="f_pst" class="pl<?php if(empty($_GET['from'])) { } ?>">
<form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;replysubmit=yes<?php if($_GET['ordertype'] != 1) { ?>&amp;infloat=yes&amp;handlekey=fastpost<?php } if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>"<?php if($_GET['ordertype'] != 1) { ?> onSubmit="return fastpostvalidate(this)"<?php } ?>>
<?php if(empty($_GET['from'])) { ?>
<table cellspacing="0" cellpadding="0">
<tr>
<td class="fast_pls">
<div class="avatar"><?php echo avatar($_G['uid']); ?></div><?php if($_G['uid']) { } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_side'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_side'];?>
</td>
<td class="plc">
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_content'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_content'];?>

<span id="fastpostreturn"></span>

<?php if($_G['forum_thread']['special'] == 5 && empty($firststand)) { ?>
<div class="pbt cl">
<div class="ftid sslt">
<select id="stand" name="stand">
<option value="">ѡ��۵�</option>
<option value="0">����</option>
<option value="1">����</option>
<option value="2">����</option>
</select>
</div>
<script type="text/javascript">simulateSelect('stand');</script>
</div>
<?php } ?>

<div class="cl">
<?php if(empty($_GET['from']) && $_G['setting']['fastsmilies']) { ?><div id="fastsmiliesdiv" class="y"><div id="fastsmiliesdiv_data"><div id="fastsmilies"></div></div></div><?php } ?>
<div<?php if(empty($_GET['from']) && $_G['setting']['fastsmilies']) { ?> class="hasfsl"<?php } ?> id="fastposteditor">
<div class="tedt<?php if(!($_G['forum_thread']['special'] == 5 && empty($firststand))) { ?> mtn<?php } ?>">
<div class="bar">
<span class="y">
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_func_extra'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_func_extra'];?>
<a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="return switchAdvanceMode(this.href)">�߼�ģʽ</a>
</span><?php $seditor = array('fastpost', array('at', 'bold', 'color', 'img', 'link', 'quote', 'code', 'smilies'), !$allowfastpost ? 1 : 0, $allowpostattach && $_GET['from'] != 'preview' && $allowfastpost ? '<span class="pipe z">|</span><span id="spanButtonPlaceholder">'.lang('template', 'upload').'</span>' : '');?><?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_ctrl_extra'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_ctrl_extra'];?><script src="<?php echo $_G['setting']['jspath'];?>seditor.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<div class="fpd">
<?php if(in_array('bold', $seditor['1'])) { ?>
<a href="javascript:;" title="���ּӴ�" class="fbld"<?php if(empty($seditor['2'])) { ?> onclick="seditor_insertunit('<?php echo $seditor['0'];?>', '[b]', '[/b]');doane(event);"<?php } ?>>B</a>
<?php } if(in_array('color', $seditor['1'])) { ?>
<a href="javascript:;" title="����������ɫ" class="fclr" id="<?php echo $seditor['0'];?>forecolor"<?php if(empty($seditor['2'])) { ?> onclick="showColorBox(this.id, 2, '<?php echo $seditor['0'];?>');doane(event);"<?php } ?>>Color</a>
<?php } if(in_array('img', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>img" href="javascript:;" title="ͼƬ" class="fmg"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'img');doane(event);"<?php } ?>>Image</a>
<?php } if(in_array('link', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>url" href="javascript:;" title="�������" class="flnk"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'url');doane(event);"<?php } ?>>Link</a>
<?php } if(in_array('quote', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>quote" href="javascript:;" title="����" class="fqt"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'quote');doane(event);"<?php } ?>>Quote</a>
<?php } if(in_array('code', $seditor['1'])) { ?>
<a id="<?php echo $seditor['0'];?>code" href="javascript:;" title="����" class="fcd"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'code');doane(event);"<?php } ?>>Code</a>
<?php } if(in_array('smilies', $seditor['1'])) { ?>
<a href="javascript:;" class="fsml" id="<?php echo $seditor['0'];?>sml"<?php if(empty($seditor['2'])) { ?> onclick="showMenu({'ctrlid':this.id,'evt':'click','layer':2});return false;"<?php } ?>>Smilies</a>
<script type="text/javascript" reload="1">smilies_show('<?php echo $seditor['0'];?>smiliesdiv', <?php echo $_G['setting']['smcols'];?>, '<?php echo $seditor['0'];?>');</script>
<?php } if(in_array('at', $seditor['1']) && $_G['group']['allowat']) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>at.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<a id="<?php echo $seditor['0'];?>at" href="javascript:;" title="@����" class="fat"<?php if(empty($seditor['2'])) { ?> onclick="seditor_menu('<?php echo $seditor['0'];?>', 'at');doane(event);"<?php } ?>>@����</a>
<?php } ?>
<?php echo $seditor['3'];?>
</div></div>
<div class="area">
<?php if($allowfastpost) { ?>
<textarea rows="6" cols="80" name="message" id="fastpostmessage" onKeyDown="seditor_ctlent(event, <?php if($_GET['ordertype'] != 1) { ?>'fastpostvalidate($(\'fastpostform\'))'<?php } else { ?>'$(\'fastpostform\').submit()'<?php } ?>);" tabindex="4" class="pt"<?php echo getreplybg($_G['forum']['replybg']);?>></textarea>
<?php } else { ?>
<div class="pt hm">
<?php if(!$_G['uid']) { if(!$_G['connectguest']) { ?>
����Ҫ��¼��ſ��Ի��� <a href="member.php?mod=logging&amp;action=login" onclick="showWindow('login', this.href)" class="xi2">��¼</a> | <a href="member.php?mod=<?php echo $_G['setting']['regname'];?>" class="xi2"><?php echo $_G['setting']['reglinkname'];?></a>
<?php } else { ?>
����Ҫ <a href="member.php?mod=connect" class="xi2">�����ʺ���Ϣ</a> �� <a href="member.php?mod=connect&amp;ac=bind" class="xi2">�������ʺ�</a> ��ſ��Է���
<?php } } else { ?>
��������Ȩ������<a href="javascript:;" onclick="$('fastpostform').submit()" class="xi2">����鿴ԭ��</a>
<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_login_text'])) echo $_G['setting']['pluginhooks']['global_login_text'];?>
</div>
<?php } ?>
</div>
</div>
</div>
</div>
<?php if($allowpostreply && checkperm('seccode') && ($secqaacheck || $seccodecheck)) { ?><?php
$sectpl = <<<EOF
<sec> <span id="sec<hash>" onclick="showMenu(this.id)"><sec></span><div id="sec<hash>_menu" class="p_pop p_opt" style="display:none"><sec></div>
EOF;
?>
<div class="mtm sec"><?php $_G['sechashi'] = !empty($_G['cookie']['sechashi']) ? $_G['sechash'] + 1 : 0;
$sechash = 'S'.($_G['inajax'] ? 'A' : '').$_G['sid'].$_G['sechashi'];
$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');
$sectpldefault = $sectpl;
$sectplqaa = str_replace('<hash>', 'qaa'.$sechash, $sectpldefault);
$sectplcode = str_replace('<hash>', 'code'.$sechash, $sectpldefault);
$secshow = !isset($secshow) ? 1 : $secshow;
$sectabindex = !isset($sectabindex) ? 1 : $sectabindex;?><?php
$__STATICURL = STATICURL;$seccheckhtml = <<<EOF

<input name="sechash" type="hidden" value="{$sechash}" />

EOF;
 if($sectpl) { if($secqaacheck) { 
$seccheckhtml .= <<<EOF

{$sectplqaa['0']}��֤�ʴ�{$sectplqaa['1']}<input name="secanswer" id="secqaaverify_{$sechash}" type="text" autocomplete="off" style="width:100px" class="txt px vm" onblur="checksec('qaa', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updatesecqaa('{$sechash}');doane(event);" class="xi2">��һ��</a>
<span id="checksecqaaverify_{$sechash}"><img src="{$__STATICURL}image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplqaa['2']}<span id="secqaa_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updatesecqaa('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplqaa['3']}

EOF;
 } if($seccodecheck) { 
$seccheckhtml .= <<<EOF

{$sectplcode['0']}��֤��{$sectplcode['1']}<input name="seccodeverify" id="seccodeverify_{$sechash}" type="text" autocomplete="off" style="
EOF;
 if($_G['setting']['seccodedata']['type'] != 1) { 
$seccheckhtml .= <<<EOF
ime-mode:disabled;
EOF;
 } 
$seccheckhtml .= <<<EOF
width:100px" class="txt px vm" onblur="checksec('code', '{$sechash}')" tabindex="{$sectabindex}" />
<a href="javascript:;" onclick="updateseccode('{$sechash}');doane(event);" class="xi2">��һ��</a>
<span id="checkseccodeverify_{$sechash}"><img src="{$__STATICURL}image/common/none.gif" width="16" height="16" class="vm" /></span>
{$sectplcode['2']}<span id="seccode_{$sechash}"></span>

EOF;
 if($secshow) { 
$seccheckhtml .= <<<EOF
<script type="text/javascript" reload="1">updateseccode('{$sechash}');</script>
EOF;
 } 
$seccheckhtml .= <<<EOF

{$sectplcode['3']}

EOF;
 } } 
$seccheckhtml .= <<<EOF


EOF;
?><?php unset($secshow);?><?php if(empty($secreturn)) { ?><?php echo $seccheckhtml;?><?php } ?></div>
<?php } if($allowpostattach && $_GET['from'] != 'preview') { ?>
<script type="text/javascript">
var editorid = '';
var ATTACHNUM = {'imageused':0,'imageunused':0,'attachused':0,'attachunused':0}, ATTACHUNUSEDAID = new Array(), IMGUNUSEDAID = new Array();
</script>

<input type="hidden" name="posttime" id="posttime" value="<?php echo TIMESTAMP;?>" />
<div class="upfl<?php if(empty($_GET['from']) && $_G['setting']['fastsmilies']) { ?> hasfsl<?php } ?>">
<table cellpadding="0" cellspacing="0" border="0" id="attach_tblheader" style="display: none;">
<tr>
<td>��������ļ�����ӵ�����������</td>
<td class="atds">����</td>
<?php if($_G['group']['allowsetattachperm']) { ?>
<td class="attv">
�Ķ�Ȩ��
<img src="<?php echo IMGDIR;?>/faq.gif" alt="Tip" class="vm" onmouseover="showTip(this)" tip="�Ķ�Ȩ�ް��ɸߵ������У����ڻ����ѡ������û��ſ����Ķ�" />
</td>
<?php } if($_G['group']['maxprice']) { ?><td class="attpr"><?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?></td><?php } ?>
<td class="attc"></td>
</tr>
</table>
<div class="fieldset flash" id="attachlist"></div>
<?php if(empty($_G['setting']['pluginhooks']['viewthread_fastpost_upload_extend'])) { if(empty($_G['uploadjs'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>upload.js?<?php echo VERHASH;?>" type="text/javascript"></script><?php $_G['uploadjs'] = 1;?><?php } ?><script type="text/javascript">
var upload = new SWFUpload({
upload_url: "<?php echo $_G['siteurl'];?>misc.php?mod=swfupload&action=swfupload&operation=upload&fid=<?php echo $_G['fid'];?>",
post_params: {"uid" : "<?php echo $_G['uid'];?>", "hash":"<?php echo $swfconfig['hash'];?>"},

file_size_limit : "<?php echo $swfconfig['max'];?>",
file_types : "<?php echo $swfconfig['attachexts']['ext'];?>",
file_types_description : "<?php echo $swfconfig['attachexts']['depict'];?>",
file_upload_limit : <?php echo $swfconfig['limit'];?>,
file_queue_limit : 0,

swfupload_preload_handler : preLoad,
swfupload_load_failed_handler : loadFailed,
file_dialog_start_handler : fileDialogStart,
file_queued_handler : fileQueued,
file_queue_error_handler : fileQueueError,
file_dialog_complete_handler : fileDialogComplete,
upload_start_handler : uploadStart,
upload_progress_handler : uploadProgress,
upload_error_handler : uploadError,
upload_success_handler : uploadSuccess,
upload_complete_handler : uploadComplete,

button_image_url : "<?php echo IMGDIR;?>/uploadbutton_small.png",
button_placeholder_id : "spanButtonPlaceholder",
button_width: 17,
button_height: 25,
button_cursor:SWFUpload.CURSOR.HAND,
button_window_mode: "transparent",

custom_settings : {
progressTarget : "attachlist",
uploadSource: 'forum',
uploadType: 'attach',
<?php if($swfconfig['maxsizeperday']) { ?>
maxSizePerDay: <?php echo $swfconfig['maxsizeperday'];?>,
<?php } if($swfconfig['maxattachnum']) { ?>
maxAttachNum: <?php echo $swfconfig['maxattachnum'];?>,
<?php } ?>
uploadFrom: 'fastpost'
},
debug: false
});

</script>
<?php } else { ?>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_upload_extend'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_upload_extend'];?>
<?php } ?>
</div>
<?php } ?>

<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="usesig" value="<?php echo $usesigcheck;?>" />
<input type="hidden" name="subject" value="  " />
<p class="ptm pnpost">
<a href="home.php?mod=spacecp&amp;ac=credit&amp;op=rule&amp;fid=<?php echo $_G['fid'];?>" class="y" target="_blank">������ֹ���</a>
<button <?php if($allowpostreply) { ?>type="submit" <?php } elseif(!$_G['uid']) { ?>type="button" onclick="showWindow('login', 'member.php?mod=logging&action=login&guestmessage=yes')" <?php } ?>name="replysubmit" id="fastpostsubmit" class="pn pnc vm" value="replysubmit" tabindex="5"><strong>����ظ�</strong></button>
<?php if(!empty($_G['setting']['pluginhooks']['viewthread_fastpost_btn_extra'])) echo $_G['setting']['pluginhooks']['viewthread_fastpost_btn_extra'];?>
<?php if(helper_access::check_module('follow')) { ?>
<label class="lb"><input type="checkbox" name="adddynamic" class="pc" value="1" />������ת��</label>
<?php } if($_GET['ordertype'] != 1 && empty($_GET['from'])) { ?>
<label for="fastpostrefresh"><input id="fastpostrefresh" type="checkbox" class="pc" />��������ת�����һҳ</label>
<script type="text/javascript">if(getcookie('fastpostrefresh') == 1) {$('fastpostrefresh').checked=true;}</script>
<?php } ?>
</p>
<?php if(empty($_GET['from'])) { ?>
</td>
</tr>
</table>
<?php } ?>
</form>
</div><?php } ?>

<?php if(!empty($_G['setting']['pluginhooks']['viewthread_bottom'])) echo $_G['setting']['pluginhooks']['viewthread_bottom'];?>


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



<?php if(($_G['setting']['visitedforums']) && $_G['forum']['status'] != 3) { ?>
<div id="visitedforums_menu" class="p_pop blk cl" style="display: none;">
<table cellspacing="0" cellpadding="0">
<tr>
<td id="v_forums">
<h3 class="mbn pbn bbda xg1">������İ��</h3>
<ul class="xl xl1">
<?php echo $_G['setting']['visitedforums'];?>
</ul>
</td>
</tr>
</table>
</div>
<?php } if($_G['medal_list']) { if(is_array($_G['medal_list'])) foreach($_G['medal_list'] as $medalid => $medal) { ?><div id="md_<?php echo $medalid;?>_menu" class="tip tip_4" style="display: none;">
<div class="tip_horn"></div>
<div class="tip_c">
<h4><?php echo $medal['name'];?></h4>
<p><?php echo $medal['description'];?></p>
</div>
</div>
<?php } } if(!IS_ROBOT && !empty($_G['setting']['lazyload'])) { ?>
<script type="text/javascript">
new lazyload();
</script>
<?php } if(!IS_ROBOT && $_G['setting']['threadmaxpages'] > 1) { ?>
<script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, <?php if($page > 1) { ?>1<?php } else { ?>0<?php } ?>, <?php if($page < $_G['setting']['threadmaxpages'] && $page < $_G['page_next']) { ?>1<?php } else { ?>0<?php } ?>, 'forum.php?mod=viewthread&tid=<?php echo $_G['tid'];?><?php if($_GET['authorid']) { ?>&authorid=<?php echo $_GET['authorid'];?><?php } ?>', <?php echo $page;?>);}</script>
<?php } ?>


<div class="wp mtn">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<?php if($_G['relatedlinks'] || $_GET['highlight']) { ?>
<script type="text/javascript">
var relatedlink = [];<?php if(is_array($_G['relatedlinks'])) foreach($_G['relatedlinks'] as $key => $link) { ?>relatedlink[<?php echo $key;?>] = {'sname':'<?php echo $link['name'];?>', 'surl':'<?php echo $link['url'];?>'};
<?php } $highlights = explode(' ', str_replace(array('\'', chr(125)), array('&#039;', '&#125;'), dhtmlspecialchars($_GET['highlight'])));?><?php if(is_array($highlights)) foreach($highlights as $word) { $key++;?>relatedlink[<?php echo $key;?>] = {'sname':'<?php echo $word;?>', 'surl':''};
<?php } ?>
relatedlinks('postmessage_<?php echo $_G['forum_firstpid'];?>');
</script>
<?php } if(!empty($_G['cookie']['clearUserdata']) && $_G['cookie']['clearUserdata'] == 'forum') { ?>
<script type="text/javascript">saveUserdata('forum_'+discuz_uid, '')</script>
<?php } ?>

<script type="text/javascript">
<?php if($_G['forum']['picstyle'] && ($_G['forum']['ismoderator'] || $_G['uid'] == $_G['thread']['authorid'])) { ?>
function showsetcover(obj) {
if(obj.parentNode.id == 'postmessage_<?php echo $_G['forum_firstpid'];?>') {
var defheight = <?php echo $_G['setting']['forumpicstyle']['thumbheight'];?>;
var defwidth = <?php echo $_G['setting']['forumpicstyle']['thumbwidth'];?>;
var newimgid = 'showcoverimg';
var imgsrc = obj.src ? obj.src : obj.file;
if(!imgsrc) return;

var tempimg=new Image();
tempimg.src=imgsrc;
if(tempimg.complete) {
if(tempimg.width < defwidth || tempimg.height < defheight) return;
} else {
return;
}
if($(newimgid) && obj.id != newimgid) {
$(newimgid).id = 'img'+Math.random();
}
if($(newimgid+'_menu')) {
var menudiv = $(newimgid+'_menu');
} else {
var menudiv = document.createElement('div');
menudiv.className = 'tip tip_4 aimg_tip';
menudiv.id = newimgid+'_menu';
menudiv.style.position = 'absolute';
menudiv.style.display = 'none';
obj.parentNode.appendChild(menudiv);
}
menudiv.innerHTML = '<div class="tip_c xs0"><a onclick="showWindow(\'setcover_'+newimgid+'\', this.href)" href="forum.php?mod=ajax&amp;action=setthreadcover&amp;tid=<?php echo $_G['tid'];?>&amp;pid=<?php echo $_G['forum_firstpid'];?>&amp;fid=<?php echo $_G['fid'];?>&amp;imgurl='+imgsrc+'">��Ϊ����</a></div>';
obj.id = newimgid;
showMenu({'ctrlid':newimgid,'pos':'12'});
}
return;
}
<?php } ?>
function succeedhandle_followmod(url, msg, values) {
var fObj = $('followmod_'+values['fuid']);
if(values['type'] == 'add') {
fObj.innerHTML = '������';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid'];
} else if(values['type'] == 'del') {
fObj.innerHTML = '����TA';
fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash=<?php echo FORMHASH;?>&fuid='+values['fuid'];
}
}
<?php if($_G['blockedpids']) { ?>
var blockedPIDs = [<?php echo implode(',', $_G['blockedpids']); ?>];
<?php } if($postlist && empty($_G['setting']['disfixedavatar'])) { ?>
fixed_avatar([<?php echo implode(',', array_keys($postlist)); ?>], <?php if(empty($_G['setting']['disfixednv_viewthread']) ) { ?>1<?php } else { ?>0<?php } ?>);
<?php } elseif(empty($_G['setting']['disfixednv_viewthread'])) { ?>
fixed_top_nv();
<?php } ?>
</script><?php include template('common/footer'); ?>
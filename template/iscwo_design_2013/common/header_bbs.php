<?php echo '唯美设计QQ:474902417商业模板保护！请到官网上购买正版模板 http://addon.discuz.com/?@1439.developer';exit;?>
<!--{subtemplate common/header_common}-->
<!--{eval require_once("template/iscwo_design_2013/forum/forum_index.php");}-->
<!--{eval require_once("template/iscwo_design_2013/forum/vime.php");}-->
	<meta name="application-name" content="$_G['setting']['bbname']" />
	<meta name="msapplication-tooltip" content="$_G['setting']['bbname']" />
	<!--{if $_G['setting']['portalstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][1]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G[siteurl].'portal.php'};icon-uri={$_G[siteurl]}{IMGDIR}/portal.ico" /><!--{/if}-->
	<meta name="msapplication-task" content="name=$_G['setting']['navs'][2]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G[siteurl].'forum.php'};icon-uri={$_G[siteurl]}{IMGDIR}/bbs.ico" />
	<!--{if $_G['setting']['groupstatus']}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][3]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G[siteurl].'group.php'};icon-uri={$_G[siteurl]}{IMGDIR}/group.ico" /><!--{/if}-->
	<!--{if helper_access::check_module('feed')}--><meta name="msapplication-task" content="name=$_G['setting']['navs'][4]['navname'];action-uri={echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G[siteurl].'home.php'};icon-uri={$_G[siteurl]}{IMGDIR}/home.ico" /><!--{/if}-->
	<!--{if $_G['basescript'] == 'forum' && $_G['setting']['archiver']}-->
		<link rel="archives" title="$_G['setting']['bbname']" href="{$_G[siteurl]}archiver/" />
	<!--{/if}-->
	<!--{if !empty($rsshead)}-->$rsshead<!--{/if}-->
	<!--{if widthauto()}-->
		<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_{STYLEID}_widthauto.css?{VERHASH}" />
		<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
	<!--{/if}-->
	<!--{if $_G['basescript'] == 'forum' || $_G['basescript'] == 'group'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}forum.js?{VERHASH}"></script>
	<!--{elseif $_G['basescript'] == 'home' || $_G['basescript'] == 'userapp'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}home.js?{VERHASH}"></script>
	<!--{elseif $_G['basescript'] == 'portal'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}portal.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
	<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_{STYLEID}_css_diy.css?{VERHASH}" />
	<!--{/if}-->
	<link rel="stylesheet" type="text/css"  href="{IMGDIR}/index.css?{VERHASH}" />
</head>

<body id="nv_{$_G[basescript]}" class="pg_{CURMODULE}{if $_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)} {$cat['bodycss']}{/if}" onkeydown="if(event.keyCode==27) return false;">
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
	<!--{if $_GET['diy'] == 'yes' && check_diy_perm($topic)}-->
		<!--{template common/header_diy}-->
	<!--{/if}-->
	<!--{if check_diy_perm($topic)}-->
		<!--{template common/header_diynav}-->
	<!--{/if}-->
	<!--{if CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)}-->
		$diynav
	<!--{/if}-->
	<!--{if empty($topic) || $topic['useheader']}-->
		<!--{if $_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')}-->
			<div class="xi1 bm bm_c">
			    {lang your_mobile_browser}<a href="{$_G['siteurl']}forum.php?mobile=yes">{lang go_to_mobile}</a> <span class="xg1">|</span> <a href="$_G['setting']['mobile']['nomobileurl']">{lang to_be_continue}</a>
			</div>
		<!--{/if}-->
		<!--{if $_G['setting']['shortcut'] && $_G['member'][credits] >= $_G['setting']['shortcut']}-->
			<div id="shortcut">
				<span><a href="javascript:;" id="shortcutcloseid" title="{lang close}">{lang close}</a></span>
				{lang shortcut_notice}
				<a href="javascript:;" id="shortcuttip">{lang shortcut_add}</a>
			</div>
			<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
		<!--{/if}-->

		<!--{if !IS_ROBOT}-->
			<!--{if $_G['uid']}-->
			<ul id="myprompt_menu" class="p_pop" style="display: none;">
				<li><a href="home.php?mod=space&do=pm" id="pm_ntc" style="background-repeat: no-repeat; background-position: 0 50%;"><em class="prompt_news{if empty($_G[member][newpm])}_0{/if}"></em>{lang pm_center}</a></li>

					<li><a href="home.php?mod=follow&do=follower"><em class="prompt_follower{if empty($_G[member][newprompt_num][follower])}_0{/if}"></em><!--{lang notice_interactive_follower}-->{if $_G[member][newprompt_num][follower]}($_G[member][newprompt_num][follower]){/if}</a></li>

				<!--{if $_G[member][newprompt] && $_G[member][newprompt_num][follow]}-->
					<li><a href="home.php?mod=follow"><em class="prompt_concern"></em><!--{lang notice_interactive_follow}-->($_G[member][newprompt_num][follow])</a></li>
				<!--{/if}-->
				<!--{if $_G[member][newprompt]}-->
					<!--{loop $_G['member']['category_num'] $key $val}-->
						<li><a href="home.php?mod=space&do=notice&view=$key"><em class="notice_$key"></em><!--{echo lang('template', 'notice_'.$key)}-->(<span class="rq">$val</span>)</a></li>
					<!--{/loop}-->
				<!--{/if}-->
				<!--{if empty($_G['cookie']['ignore_notice'])}-->
				<li class="ignore_noticeli"><a href="javascript:;" onclick="setcookie('ignore_notice', 1);hideMenu('myprompt_menu')" title="{lang temporarily_to_remind}"><em class="ignore_notice"></em></a></li>
				<!--{/if}-->
				</ul>
			<!--{/if}-->
			<!--{if $_G['uid'] && !empty($_G['style']['extstyle'])}-->
				<div id="sslct_menu" class="cl p_pop" style="display: none;">
					<!--{if !$_G[style][defaultextstyle]}--><span class="sslct_btn" onclick="extstyle('')" title="{lang default}"><i></i></span><!--{/if}-->
					<!--{loop $_G['style']['extstyle'] $extstyle}-->
						<span class="sslct_btn" onclick="extstyle('$extstyle[0]')" title="$extstyle[1]"><i style='background:$extstyle[2]'></i></span>
					<!--{/loop}-->
				</div>
			<!--{/if}-->
			<!--{subtemplate common/header_qmenu}-->
		<!--{/if}-->

		<!--{if $_G['uid']}-->
	
		                <div onMouseOver="document.getElementById('qmenu2').className='um_a3';" onMouseOut="document.getElementById('qmenu2').className='um_a2';"> 
		                <div id="qmenu2_menu" class="iscwo_menu2" style="display: none;">
					
					        <ul>
						
								<li><a href="home.php?mod=space&uid=$_G[uid]" target="_blank" class="um_username" hidefocus="true" title="{lang visit_my_space}">{$_G[member][username]}</a></li>
								<li><a href="home.php?mod=spacecp&ac=usergroup" class="um_group" hidefocus="true">$_G[group][grouptitle]</a></li>
							    <li><a href="home.php?mod=spacecp" class="um_setup" hidefocus="true">{lang setup}</a></li>
						
								
								<!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
								<li><a href="portal.php?mod=portalcp" class="um_portalcp" hidefocus="true"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a></li>
								<!--{/if}-->
								
								
								<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
									<li><a href="admin.php" target="_blank" class="um_admincp" hidefocus="true">{lang admincp}</a></li>
									<!--{if check_diy_perm($topic)}-->
									<li><a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();" class="xi2">DIY编辑</a></li>
									<!--{/if}-->
								<!--{/if}-->
								<li><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}" class="um_logout" hidefocus="true">{lang logout}</a></li>
					        </ul>
					
				        </div>
						</div>							
						<!--{if $iscwo_header_nv_top==1}-->
		                         <div onMouseOver="document.getElementById('qmenu1').className='um_a1 um_upload hd_hover';" onMouseOut="document.getElementById('qmenu1').className='um_a1 um_upload';"> 
		                         <div id="qmenu1_menu" class="iscwo_menu cl"  style="display: none;"  >
									 <ul>
										<li><a href="forum.php?mod=post&action=newthread&fid=49" target="_blank">上传作品</a></li>
										<li><a href="forum.php?mod=post&action=newthread&fid=52" target="_blank">发布教程</a></li>
										<li><a href="forum.php?mod=post&action=newthread&fid=51" target="_blank">分享素材</a></li>
										<li><a href="forum.php?mod=post&action=newthread&fid=53" target="_blank">发布招聘</a></li>
									 </ul>
								 </div>
								 </div>
						<!--{/if}-->
						<!--{if $iscwo_header_nv_qmenu==1}-->
							<div onMouseOver="document.getElementById('qmenu3').className='um_a1 um_home hd_hover';" onMouseOut="document.getElementById('qmenu3').className='um_a1 um_home';"> 
		                         <div id="qmenu3_menu" class="iscwo_menu cl"  style="display: none;"  >
									 <ul class="iscwo_menu_ul">
										<!--{loop $_G['setting']['mynavs'] $nav}-->
											<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->
												<li>$nav[code]</li>
											<!--{/if}-->
										<!--{/loop}-->
									</ul>
								 </div>
								 </div>
						<!--{/if}-->
		<!--{/if}-->
	<div id="bgtop">	
		
		<div id="hd" class="iscwo_hd">
		
			<div class="wp1024 cl">
				<div class="hdc cl">
				<div class="z">
					<!--{loop $_G['setting']['topnavs'][0] $nav}-->
						<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
					<!--{/loop}-->
					<!--{hook/global_cpnav_extra1}-->
				</div>
		
					<!--{eval $mnid = getcurrentnav();}-->
					<div class="iscwo_uerinf cl">
						<!--{if $_G['uid']}-->						
						<div class="iscwo_um cl">
						 
							 <a href="" id="qmenu1" onMouseOver="showMenu({'ctrlid':'qmenu1','pos':'34','ctrlclass':'a','duration':2});" class="um_a1 um_upload"><span></span></a>
					
							 <a href="" id="qmenu3" onMouseOver="showMenu({'ctrlid':'qmenu3','pos':'34','ctrlclass':'a','duration':2});" class="um_a1 um_home"><span></span></a>
							 
							 <a href="home.php?mod=space&do=pm" id="pm_ntc" class="um_a1 um_pm" ><span class="new_pm1">{if $_G[member][newpm]}<em class="new_pm2">1</em>{/if}</span></a>
							 <a href="home.php?mod=space&do=notice" class="um_a1 um_notice" id="myprompt" ><span class="new_pm1"><!--{if $_G[member][newprompt]}--><em class="new_pm2">$_G[member][newprompt]</em><!--{/if}--></span></a>
							 <span id="myprompt_check" style=" display:none;"></span>
							 
							 <a href="javascript:;" id="qmenu2" onMouseOver="showMenu({'ctrlid':'qmenu2','pos':'34!','ctrlclass':'a','duration':2}); this.className='um_a3';" onMouseOut="this.className='um_a2';" hidefocus="true" class="um_a2"><em><!--{avatar($_G['uid'],small)}--></em></a>
						</div>
						<!--{elseif !empty($_G['cookie']['loginuser'])}-->
						<p>
							<strong><a id="loginuser" class="noborder"><!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}--></a></strong>
							<span class="pipe">|</span><a href="member.php?mod=logging&action=login" onClick="showWindow('login', this.href)">{lang activation}</a>
							<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
						</p>
						<!--{elseif !$_G[connectguest]}-->
							<div class="nologin cl">
							<!--{template member/login_simple}-->
							</div>
						<!--{else}-->
						<div id="um">
							<div class="avt y"><!--{avatar(0,small)}--></div>
							<p>
								<strong class="vwmy qq">{$_G[member][username]}</strong>
								<!--{hook/global_usernav_extra1}-->
								<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
							</p>
							<p>
								<a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: 0</a>
								<span class="pipe">|</span>{lang usergroup}: $_G[group][grouptitle]
							</p>
						</div>
						<!--{/if}-->
					</div>
				</div>
			</div> 
		</div>

		<!--{ad/headerbanner/wp a_h}-->
		<div id="hd">
			<div id="headBar" class="wp">
				<div class="hdc cl">
					<!--{eval $mnid = getcurrentnav();}-->
					<h1 id="logo"><!--{if !isset($_G['setting']['navlogos'][$mnid])}--><a href="{if $_G['setting']['domain']['app']['default']}http://{$_G['setting']['domain']['app']['default']}/{else}./{/if}" title="$_G['setting']['bbname']">{$_G['style']['boardlogo']}</a><!--{else}-->$_G['setting']['navlogos'][$mnid]<!--{/if}--></h1>
				   <!--{subtemplate common/pubsearchform}-->
				   <!--{template common/header_us}-->
				</div>
				<div id="nv" class="cl">
					<ul id="mainnav" class="cl">
						<!--{loop $_G['setting']['navs'] $nav}-->
							<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}--><li {if $mnid == $nav[navid]}class="a" {/if}$nav[nav]></li><!--{/if}-->
						<!--{/loop}-->
					</ul>
					<div class="secondary">
					<!--{loop $_G['setting']['topnavs'][1] $nav}-->
						<!--{if $nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))}-->$nav[code]<!--{/if}-->
					<!--{/loop}-->
					</div>
					<!--{hook/global_nav_extra}-->
				</div>
				<!--{if !empty($_G['setting']['plugins']['jsmenu'])}-->
					<ul class="p_pop h_pop" id="plugin_menu" style="display: none">
					<!--{loop $_G['setting']['plugins']['jsmenu'] $module}-->
						 <!--{if !$module['adminid'] || ($module['adminid'] && $_G['adminid'] > 0 && $module['adminid'] >= $_G['adminid'])}-->
						 <li>$module[url]</li>
						 <!--{/if}-->
					<!--{/loop}-->
					</ul>
				<!--{/if}-->
				$_G[setting][menunavs]
				<div id="mu" class="cl">
				<!--{if $_G['setting']['subnavs']}-->
					<!--{loop $_G[setting][subnavs] $navid $subnav}-->
						<!--{if $_G['setting']['navsubhover'] || $mnid == $navid}-->
						<ul class="cl {if $mnid == $navid}current{/if}" id="snav_$navid" style="display:{if $mnid != $navid}none{/if}">
						$subnav
						</ul>
						<!--{/if}-->
					<!--{/loop}-->
				<!--{/if}-->
				</div>
				<ul id="scbar_type_menu" class="p_pop" style="display: none;">
				<!--{echo implode('', $slist);}-->
				</ul>
				<script type="text/javascript">
					initSearchmenu('scbar', '$searchparams[url]');
				</script>
				<!--{ad/subnavbanner/a_mu}-->
			</div>
		</div>

		<!--{hook/global_header}-->
	<!--{/if}-->
	<script type="text/javascript">headDownList();</script>
<div>
<div>

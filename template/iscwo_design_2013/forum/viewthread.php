<?php echo '唯美设计QQ:474902417商业模板保护！请到官网上购买正版模板 http://addon.discuz.com/?@1439.developer';exit;?>
<!--{subtemplate common/header}-->

<script type="text/javascript">var fid = parseInt('$_G[fid]'), tid = parseInt('$_G[tid]');</script>
<!--{if $modmenu['thread'] || $modmenu['post']}-->
	<script type="text/javascript" src="{$_G['setting']['jspath']}forum_moderate.js?{VERHASH}"></script>
<!--{/if}-->


<script type="text/javascript" src="{$_G['setting']['jspath']}forum_viewthread.js?{VERHASH}"></script>
<script type="text/javascript">zoomstatus = parseInt($_G['setting']['zoomstatus']);var imagemaxwidth = '{$_G['setting']['imagemaxwidth']}';var aimgcount = new Array();</script>

<style id="diy_style" type="text/css"></style>
<!--[diy=diynavtop]--><div id="diynavtop" class="area"></div><!--[/diy]-->


<!--{hook/viewthread_top}-->
<!--{ad/text/wp a_t}-->

<style id="diy_style" type="text/css"></style>
<div class="wp">
	<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="wrap" class="group">
<style>
.tool-tips{float:left;line-height:32px;color:#666;}.toolview, .toolcomments, .toollikes{width:auto;padding-right:6px;font-weight:bold;color:#2DB2EA;}.tools a{color:#2DB2EA;}
</style>
	

<!--{if $_G['group']['allowpost'] && ($_G['group']['allowposttrade'] || $_G['group']['allowpostpoll'] || $_G['group']['allowpostreward'] || $_G['group']['allowpostactivity'] || $_G['group']['allowpostdebate'] || $_G['setting']['threadplugins'] || $_G['forum']['threadsorts'])}-->
	<ul class="p_pop" id="newspecial_menu" style="display: none">
		<!--{if !$_G['forum']['allowspecialonly']}--><li><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]">{lang post_newthread}</a></li><!--{/if}-->
		<!--{if $_G['forum']['threadsorts'] && !$_G['forum']['allowspecialonly']}-->
			<!--{loop $_G['forum']['threadsorts']['types'] $id $threadsorts}-->
				<!--{if $_G['forum']['threadsorts']['show'][$id]}-->
					<li class="popupmenu_option"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&sortid=$id">$threadsorts</a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->
		<!--{if $_G['group']['allowpostpoll']}--><li class="poll"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=1">{lang post_newthreadpoll}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostreward']}--><li class="reward"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=3">{lang post_newthreadreward}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostdebate']}--><li class="debate"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=5">{lang post_newthreaddebate}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowpostactivity']}--><li class="activity"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=4">{lang post_newthreadactivity}</a></li><!--{/if}-->
		<!--{if $_G['group']['allowposttrade']}--><li class="trade"><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&special=2">{lang post_newthreadtrade}</a></li><!--{/if}-->
		<!--{if $_G['setting']['threadplugins']}-->
			<!--{loop $_G['forum']['threadplugin'] $tpid}-->
				<!--{if array_key_exists($tpid, $_G['setting']['threadplugins']) && @in_array($tpid, $_G['group']['allowthreadplugin'])}-->
					<li class="popupmenu_option"{if $_G['setting']['threadplugins'][$tpid][icon]} style="background-image:url(source/plugin/$tpid/$_G['setting']['threadplugins'][$tpid][icon])"{/if}><a href="forum.php?mod=post&action=newthread&fid=$_G[fid]&specialextra=$tpid">{$_G['setting']['threadplugins'][$tpid][name]}</a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->
	</ul>
<!--{/if}-->

<!--{if $modmenu['post']}-->
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
							<h3>{lang admin_select}&nbsp;<strong id="mdct" class="xi1"></strong>&nbsp;{lang piece}: </h3>
							<!--{if $_G['forum']['ismoderator']}-->
								<!--{if $_G['group']['allowwarnpost']}--><a href="javascript:;" onclick="modaction('warn')">{lang modmenu_warn}</a><span class="pipe">|</span><!--{/if}-->
								<!--{if $_G['group']['allowbanpost']}--><a href="javascript:;" onclick="modaction('banpost')">{lang modmenu_banpost}</a><span class="pipe">|</span><!--{/if}-->
								<!--{if $_G['group']['allowdelpost'] && !$rushreply}--><a href="javascript:;" onclick="modaction('delpost')">{lang modmenu_deletepost}</a><span class="pipe">|</span><!--{/if}-->
							<!--{/if}-->
							<!--{if $_G['forum']['ismoderator'] && $_G['group']['allowstickreply'] || $_G['forum_thread']['authorid'] == $_G['uid']}--><a href="javascript:;" onclick="modaction('stickreply')">{lang modmenu_stickpost}</a><span class="pipe">|</span><!--{/if}-->
							<!--{if $_G['forum_thread']['pushedaid'] && $allowpostarticle}--><a href="javascript:;" onclick="modaction('pushplus', '', 'aid=$_G[forum_thread][pushedaid]', 'portal.php?mod=portalcp&ac=article&op=pushplus')">{lang modmenu_pushplus}</a><span class="pipe">|</span><!--{/if}-->
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
<!--{/if}-->



<!--{hook/viewthread_beginline}-->

<div id="postlist" class="pl">
	
	<!--{if $_G['forum_thread']['replycredit'] > 0 || $rushreply}-->
	<div id="pl_top">
		<table cellspacing="0" cellpadding="0">
			<tr class="ad">
				<td class="pls"></td>
				<td class="plc"></td>
			</tr>
			<!--{if $_G['forum_thread']['replycredit'] > 0 }-->
				<tr>
					<td class="pls vm ptm">
						<img src="{IMGDIR}/thread_prize_s.png" class="hm" alt="{lang replycredit}" />
							<strong>{$_G['forum_thread']['replycredit']} {$_G['setting']['extcredits'][$_G[forum_thread][replycredit_rule][extcreditstype]][unit]}{$_G['setting']['extcredits'][$_G[forum_thread][replycredit_rule][extcreditstype]][title]}</strong>
					</td>
					<td class="plc ptm pbm xi1">
						{lang thread_replycredit_tips1} {lang thread_replycredit_tips2}<!--{if $_G['forum_thread']['replycredit_rule'][random] > 0}--><span class="xg1">{lang thread_replycredit_tips3}</span><!--{/if}-->
					</td>
				</tr>
				<!--{if $rushreply}-->
				<tr class="ad">
					<td class="pls"></td>
					<td class="plc"></td>
				</tr>
				<!--{/if}-->
		<!--{/if}-->

		<!--{if $rushreply}-->
			<tr>
				<td class="pls vm ptm">
					<img src="{IMGDIR}/rushreply_s.png" class="vm" alt="{lang rushreply}" />
					<strong>{lang rushreply}</strong>
				</td>
				<td class="plc ptm pbm xi1">
					<!--{if $rushresult[rewardfloor]}-->
						<span class="y">
						<!--{if $_G['uid'] == $_G['thread']['authorid'] || $_G['forum']['ismoderator']}--><a href="javascript:;" onclick="showWindow('membernum', 'forum.php?mod=ajax&action=get_rushreply_membernum&tid=$_G[tid]')" class="y pn xi2"><span>{lang thread_rushreply_statnum}</span></a><!--{/if}-->
						<!--{if !$_GET['checkrush']}-->
								<a href="forum.php?mod=viewthread&tid=$post[tid]&checkrush=1" rel="nofollow" class="y pn xi2"><span>{lang rushreply_view}</span></a>
						<!--{/if}-->
						</span>
					<!--{/if}-->
					<!--{if $rushresult[creditlimit] == ''}-->
						{lang thread_rushreply}&nbsp;
					<!--{else}-->
						{lang thread_rushreply_limit} &nbsp;
					<!--{/if}-->
					<!--{if $rushresult[starttimefrom]}-->
						{lang thread_rushreply_start}$rushresult[starttimefrom]&nbsp;
					<!--{/if}-->
					<!--{if $rushresult[starttimeto]}-->
						{lang thread_rushreply_over}$rushresult[starttimeto]&nbsp;
					<!--{/if}-->
					<!--{if $rushresult[stopfloor]}-->
						{lang thread_rushreply_end}$rushresult[stopfloor]&nbsp;
					<!--{/if}-->
					<!--{if $rushresult[rewardfloor]}-->
						{lang thread_rushreply_floor}: $rushresult[rewardfloor]&nbsp;
					<!--{/if}-->
					<!--{if $rushresult[rewardfloor] && $_GET['checkrush']}-->
						<p class="ptn">
							<!--{if $countrushpost}-->[<strong>$countrushpost</strong>]{lang thread_rushreply_rewardnum}<!--{else}--> {lang thread_rushreply_noreward} <!--{/if}-->&nbsp;&nbsp;
							<a href="forum.php?mod=viewthread&tid=$_G[tid]" class="xi2">{lang thread_rushreply_check_back}</a>
						</p>
					<!--{/if}-->
				</td>
			</tr>
		<!--{/if}-->
		</table>
	</div>
	<!--{/if}-->

	<!--{hook/viewthread_title_row}-->


<div class="Post box">

	<div id="sidebar" class="group" style="float:right;">

		<div class="s-box sads group">
			<!--{eval $theuid = $_G[forum_thread][authorid];}-->
			<!--{eval $author_inf1 = DB::fetch_first("SELECT `follower`,`threads`,`following` FROM ".DB::table('common_member_count')." WHERE uid=$theuid");}-->
			<!--{eval $author_inf2 = DB::fetch_first("SELECT `resideprovince`,`occupation` FROM ".DB::table('common_member_profile')." WHERE uid=$theuid");}-->
			<!--{eval $thegroupid = DB::result_first("SELECT `groupid` FROM ".DB::table('common_member')." WHERE uid=$theuid");}-->
			<div class="vt_lz2 cl">
				<span class="vt_span1"><em class="vt_em1">$author_inf1['following']</em><em class="vt_em2">关注</em></span>
				<span class="vt_span2"><em class="vt_em1">$author_inf1['follower']</em><em class="vt_em2">粉丝</em></span>
				<span class="vt_span2"><em class="vt_em1">$author_inf1['threads']</em><em class="vt_em2">主题</em></span>
			</div>
		</div>

<!--{if $modmenu['thread']}-->
<div class="s-box sads group">
	<div id="modmenu" class="pbm">
		<!--{eval $modopt=0;}-->
		<!--{if $_G['forum']['ismoderator']}-->
			<!--{if $_G['group']['allowdelpost']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(3, 'delete')">{lang modmenu_deletethread}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowbumpthread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(3, 'bump')">{lang modmenu_updown}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowstickthread'] && ($_G['forum_thread']['displayorder'] <= 3 || $_G['adminid'] == 1) && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(1, 'stick')">{lang modmenu_stickthread}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowlivethread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('live')">{lang modmenu_live}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowhighlightthread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(1, 'highlight')">{lang modmenu_highlight}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowdigestthread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(1, 'digest')">{lang modmenu_digestpost}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowrecommendthread'] && !empty($_G['forum']['modrecommend']['open']) && $_G['forum']['modrecommend']['sort'] != 1 && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(1, 'recommend')">{lang modmenu_recommend}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowstampthread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('stamp')">{lang modmenu_stamp}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowstamplist'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('stamplist')">{lang modmenu_icon}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowclosethread'] && !$_G['forum_thread']['is_archived'] && $_G['forum']['status'] != 3}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(4)"><!--{if !$_G['forum_thread']['closed']}-->{lang modmenu_switch_off}<!--{else}-->{lang modmenu_switch_on}<!--{/if}--></a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowmovethread'] && !$_G['forum_thread']['is_archived'] && $_G['forum']['status'] != 3}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(2, 'move')">{lang modmenu_move}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowedittypethread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modthreads(2, 'type')">{lang modmenu_type}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if !$_G['forum_thread']['special'] && !$_G['forum_thread']['is_archived']}-->
				<!--{if $_G['group']['allowcopythread'] && $_G['forum']['status'] != 3}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('copy')">{lang modmenu_copy}</a><span class="pipe">|</span><!--{/if}-->
				<!--{if $_G['group']['allowmergethread'] && $_G['forum']['status'] != 3}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('merge')">{lang modmenu_merge}</a><span class="pipe">|</span><!--{/if}-->
				<!--{if $_G['group']['allowrefund'] && $_G['forum_thread']['price'] > 0}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('refund')">{lang modmenu_restore}</a><span class="pipe">|</span><!--{/if}-->
			<!--{/if}-->
			<!--{if $_G['group']['allowsplitthread'] && !$_G['forum_thread']['is_archived'] && $_G['forum']['status'] != 3}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('split')">{lang modmenu_split}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowrepairthread'] && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('repair')">{lang modmenu_repair}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['forum_thread']['is_archived'] && $_G['adminid'] == 1}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('restore', '', 'archiveid={$_G[forum_thread][archiveid]}')">{lang modmenu_archive}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['forum_firstpid']}-->
				<!--{if $_G['group']['allowwarnpost']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('warn', '$_G[forum_firstpid]')">{lang modmenu_warn}</a><span class="pipe">|</span><!--{/if}-->
				<!--{if $_G['group']['allowbanpost']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('banpost', '$_G[forum_firstpid]')">{lang modmenu_banthread}</a><span class="pipe">|</span><!--{/if}-->
			<!--{/if}-->
			<!--{if $_G['group']['allowremovereward'] && $_G['forum_thread']['special'] == 3 && !$_G['forum_thread']['is_archived']}--><!--{eval $modopt++}--><a href="javascript:;" onclick="modaction('removereward')">{lang modmenu_removereward}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['forum']['status'] == 3 && in_array($_G['adminid'], array('1','2')) && $_G['forum_thread']['closed'] < 1}--><a href="javascript:;" onclick="modthreads(5, 'recommend_group');return false;">{lang modmenu_grouprecommend}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['allowmanagetag']}--><a href="javascript:;" onclick="showWindow('mods', 'forum.php?mod=tag&op=manage&tid=$_G[tid]', 'get', 0)">{lang post_tag}</a><span class="pipe">|</span><!--{/if}-->
			<!--{if $_G['group']['alloweditusertag']}--><a href="javascript:;" onclick="showWindow('usertag', 'forum.php?mod=misc&action=usertag&tid=$_G[tid]', 'get', 0)">{lang usertag}</a><span class="pipe">|</span><!--{/if}-->
		<!--{/if}-->
		<!--{if $allowpusharticle && $allowpostarticle}--><!--{eval $modopt++}--><a href="portal.php?mod=portalcp&ac=article&from_idtype=tid&from_id=$_G['tid']">{lang modmenu_pusharticle}</a><span class="pipe">|</span><!--{/if}-->
		<!--{hook/viewthread_modoption}-->
	</div>





</div>
<!--{/if}-->

		<div class="s-box">
			<div class="group cl">
				<!--[if IE 6]>
				<div style="display:none" class="postBtn">
				<![endif]-->
				<div class="postBtn">
					<a title="发布你的完整作品" onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav">
					<div class="pb">
					</div>
					发布软件</a>
				</div>
				<!--[if IE 6]>
				</div>
				<![endif]-->

				<h2>热门标签</h2>
				<p class="cl">
		 <!--{loop $postlist $post}-->
         <!--{if $post['first']}-->

	       <!--{if $post['first'] && ($post[tags] || $relatedkeywords)}-->
				<!--{if $post[tags]}-->
					<!--{eval $tagi = 0;}-->
					<!--{loop $post[tags] $var}-->
						<!--{if $tagi}--><!--{/if}--><a style="font-size: 14px;" title="$var[1]" href="misc.php?mod=tag&id=$var[0]" target="_blank">$var[1]</a>
						<!--{eval $tagi++;}-->
					<!--{/loop}-->
				<!--{/if}-->
				<!--{if $relatedkeywords}-->$relatedkeywords<!--{/if}-->
	       <!--{/if}-->
           <!--{/if}-->
		   <!--{/loop}-->
				</p>
				<!--[if IE 6]>
				<div style="display:none" class="navBtn">
				<![endif]-->
				<div class="navBtn">
					<a title="加入会员" href="vip.php">
					<div class="nb">
					</div>
					加入会员</a>
				</div>
				<!--[if IE 6]>
				</div>
				<![endif]-->
				<!--[if IE 6]>
				<div style="display:none" class="helpBtn">
				<![endif]-->
				<div class="helpBtn">
					<a title="捐助我们" href="http://me.alipay.com/esee" target="_blank">
					<div class="hb">
					</div>
					捐助我们</a>
				</div>
			    <!--[if IE 6]>
			    </div>
				<![endif]-->

			</div>

			<div class="s-line"></div>
		</div>

		 <!--{loop $postlist $post}-->
         <!--{if $post['first']}-->
		   <!--{if $post['relateitem']}-->
		<div class="s-box sads group">

		  <h3 class="title">{lang related_thread}</h3>

				<ul class="sy_job xl cl">
					<!--{loop $post['relateitem'] $var}-->
					<li><a href="forum.php?mod=viewthread&tid=$var[tid]" title="$var[subject]" target="_blank">$var[subject]</a></li>
					<!--{/loop}-->
				</ul>

		   </div>

		    <!--{/if}-->

           <!--{/if}-->
		   <!--{/loop}-->


		<div class="s-box sads group">
			<img src="template/iscwo_design_2013/img/images/a.png" alt="刷一下就知道" title="刷一下就知道">
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


		   <!--{eval $lzthread = DB::fetch_all("SELECT `tid`,`subject` FROM ".DB::table('forum_thread')." WHERE authorid =$theuid AND cover = 1 ORDER BY dateline DESC LIMIT 0,4 ");}-->

		<div class="s-box sads group">
			<h3 class="title">作者其它作品</h3>

			<ul class="excli group cl">
				<!--{loop $lzthread $thethread}-->
				<li><a href="forum.php?mod=viewthread&tid={$thethread['tid']}" target="_blank">
				<!--{eval $thethread['coverpath'] = getthreadcover($thethread['tid'], 1);}-->
			    <img src="$thethread[coverpath]"/></a></li>
				<!--{/loop}-->
			</ul>
		 </div>



<div class="mblBottom">
<div style="padding-left: 35px;" class="follow">

<div class="follow_sina">
<a href="javascript:void((function(s,d,e){try{}catch(e){}var f='http://v.t.sina.com.cn/share/share.php?',u=d.location.href,p=['url=',e(u),'&title=',e(d.title),'&appkey=2924220432'].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));"></a>
</div>


<div class="follow_qq">
<a href="javascript:void(0)" onclick="{ var _t = encodeURI(document.title);  var _url = encodeURI(window.location); var _appkey = '333cf198acc94876a684d043a6b48e14'; var _site = encodeURI; var _pic = ''; var _u = 'http://v.t.qq.com/share/share.php?title='+_t+'&url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic; window.open( _u,'转播到腾讯微博', 'width=700, height=580, top=180, left=320, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );  };" ></a>
</div>

<div class="follow_renren">
            <script type="text/javascript" src="http://widget.renren.com/js/rrshare.js"></script>
            <a onclick="shareClick()" href="javascript:;" title="分享到人人网"></a>
            <script type="text/javascript">
                function shareClick() {
                    var rrShareParam = {
                        resourceUrl : '',	//分享的资源Url
                        srcUrl : '',	//分享的资源来源Url,默认为header中的Referer,如果分享失败可以调整此值为resourceUrl试试
                        pic : '',		//分享的主题图片Url
                        title : '$_G[forum_thread][subject]',		//分享的标题
                        description : '$metadescription'	//分享的详细描述
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
				desc:'',/*默认分享理由(可选)*/
				summary:'$metadescription',/*摘要(可选)*/
				title:'$_G[forum_thread][subject]',/*分享标题(可选)*/
				site:'$_G['forum'][name]',/*分享来源 如：腾讯网(可选)*/
				pics:'' /*分享图片的路径(可选)*/
				};
				var s = [];
				for(var i in p){
				s.push(i + '=' + encodeURIComponent(p[i]||''));
				}
				document.write(['<a href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?',s.join('&'),'" target="_blank" title="分享到QQ空间"></a>'].join(''));
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

			<a href="home.php?mod=space&uid=$_G[forum_thread][authorid]" title="$_G[forum_thread][author]">
			<!--{avatar($_G[forum_thread][authorid],middle)}-->
			</a>
			<h1>
			<!--{if $threadsorts && $_G['forum_thread']['sortid']}-->
			<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=sortid&sortid=$_G[forum_thread][sortid]" class="vt_type">[{$_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']]}]</a>
			<!--{/if}-->
			<a href="forum.php?mod=viewthread&tid=$_G[tid]" id="thread_subject" title="$_G[forum_thread][subject]" class="vt_title">$_G[forum_thread][subject]</a>
			<!--{if $_G[forum_thread]['digest'] > 0 && $filter != 'digest'}-->
			<font title="精华帖" color="red">精</font>
			<!--{/if}-->
			</h1>
			<span class="byto">By <a href="home.php?mod=space&uid=$_G[forum_thread][authorid]" title="由 $_G[forum_thread][author] 发布" rel="author">$_G[forum_thread][author]</a> / 浏览 $_G[forum_thread][views] 次 / $_G[forum_thread][replies]条评论 / 来自于<a href="forum.php?mod=forumdisplay&fid=$_G[fid]" class="vt_type">[ $_G['forum'][name] ]</a></span>
</div>   

			<div class="vt_titler">
			
			   <!--{if $post['invisible'] == 0}-->
			   <!--{if ($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']}-->
						<!--{if !empty($_G['setting']['recommendthread']['addtext'])}-->
						<a id="recommend_add" class="vt_like" hidefocus="true" href="forum.php?mod=misc&action=recommend&do=add&tid=$_G[tid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate({$_G['group']['allowrecommend']})');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = $('recommendv_add').innerHTML + ' {lang activity_member_unit}喜欢'"><span id="recommendv_add">$_G[forum_thread][recommend_add]</span></a>
						<!--{/if}-->
						
			   <!--{/if}-->
			   <!--{/if}-->
			   
			</div>   

		</div>



		<div class="Lvipic">
			<div class="Lvpleft">



	<!--{eval $postcount = 0;}-->
	<!--{loop $postlist $post}-->
		<!--{if $rushreply && $_GET['checkrush'] && $post['rewardfloor'] != 1}-->
			<!--{eval continue;}-->
		<!--{/if}-->
		<div id="post_$post[pid]" {if $_G['blockedpids'] && $post['inblacklist']}style="display:none;"{/if}>
			<!--{subtemplate forum/viewthread_node}-->
		</div>
		<!--{eval $postcount++;}-->
	<!--{/loop}-->
	<div id="postlistreply" class="pl"><div id="post_new" class="viewthread_table" style="display: none"></div></div>
	<!--{if $_G['blockedpids']}-->
		<div id='hiddenpoststip'><a href='javascript:display_blocked_post();'>{lang other_reply_hide}</a></div>
		<div id="hiddenposts"></div>
	<!--{/if}-->

		
		<form method="post" autocomplete="off" name="modactions" id="modactions">
			<input type="hidden" name="formhash" value="{FORMHASH}" />
			<input type="hidden" name="optgroup" />
			<input type="hidden" name="operation" />
			<input type="hidden" name="listextra" value="$_GET[extra]" />
			<input type="hidden" name="page" value="$page" />
		</form>
		$_G['forum_tagscript']


<div class="pgs mtm mbm cl">
	$multipage

</div>

<!--{hook/viewthread_middle}-->
<!--[diy=diyfastposttop]--><div id="diyfastposttop" class="area"></div><!--[/diy]-->
<!--{if $fastpost}-->
	<!--{subtemplate forum/viewthread_fastpost}-->
<!--{/if}-->

<!--{hook/viewthread_bottom}-->


</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



<!--{if ($_G['setting']['visitedforums']) && $_G['forum']['status'] != 3}-->
	<div id="visitedforums_menu" class="p_pop blk cl" style="display: none;">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<td id="v_forums">
					<h3 class="mbn pbn bbda xg1">{lang viewed_forums}</h3>
					<ul class="xl xl1">
						$_G['setting']['visitedforums']
					</ul>
				</td>
			</tr>
		</table>
	</div>
<!--{/if}-->
<!--{if $_G['medal_list']}-->
<!--{loop $_G['medal_list'] $medalid $medal}-->
	<div id="md_{$medalid}_menu" class="tip tip_4" style="display: none;">
		<div class="tip_horn"></div>
		<div class="tip_c">
			<h4>$medal[name]</h4>
			<p>$medal[description]</p>
		</div>
	</div>
<!--{/loop}-->
<!--{/if}-->

<!--{if !IS_ROBOT && !empty($_G[setting][lazyload])}-->
	<script type="text/javascript">
	new lazyload();
	</script>
<!--{/if}-->

<!--{if !IS_ROBOT && $_G['setting']['threadmaxpages'] > 1}-->
	<script type="text/javascript">document.onkeyup = function(e){keyPageScroll(e, <!--{if $page > 1}-->1<!--{else}-->0<!--{/if}-->, <!--{if $page < $_G['setting']['threadmaxpages'] && $page < $_G['page_next']}-->1<!--{else}-->0<!--{/if}-->, 'forum.php?mod=viewthread&tid=$_G[tid]<!--{if $_GET[authorid]}-->&authorid=$_GET[authorid]<!--{/if}-->', $page);}</script>
<!--{/if}-->


<div class="wp mtn">
	<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>

<!--{if $_G['relatedlinks'] || $_GET['highlight']}-->
	<script type="text/javascript">
		var relatedlink = [];
		<!--{loop $_G['relatedlinks'] $key $link}-->
		relatedlink[$key] = {'sname':'$link[name]', 'surl':'$link[url]'};
		<!--{/loop}-->
		{eval $highlights = explode(' ', str_replace(array('\'', chr(125)), array('&#039;', '&#125;'), dhtmlspecialchars($_GET['highlight'])));}
		<!--{loop $highlights $word}-->
		{eval $key++;}
		relatedlink[$key] = {'sname':'$word', 'surl':''};
		<!--{/loop}-->
		relatedlinks('postmessage_$_G[forum_firstpid]');
	</script>
<!--{/if}-->

<!--{if !empty($_G['cookie']['clearUserdata']) && $_G['cookie']['clearUserdata'] == 'forum'}-->
	<script type="text/javascript">saveUserdata('forum_'+discuz_uid, '')</script>
<!--{/if}-->

<script type="text/javascript">
<!--{if $_G['forum']['picstyle'] && ($_G['forum']['ismoderator'] || $_G['uid'] == $_G['thread']['authorid'])}-->
function showsetcover(obj) {
	if(obj.parentNode.id == 'postmessage_$_G[forum_firstpid]') {
		var defheight = $_G['setting']['forumpicstyle']['thumbheight'];
		var defwidth = $_G['setting']['forumpicstyle']['thumbwidth'];
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
		menudiv.innerHTML = '<div class="tip_c xs0"><a onclick="showWindow(\'setcover_'+newimgid+'\', this.href)" href="forum.php?mod=ajax&amp;action=setthreadcover&amp;tid=$_G[tid]&amp;pid=$_G[forum_firstpid]&amp;fid=$_G[fid]&imgurl='+imgsrc+'">{lang set_cover}</a></div>';
		obj.id = newimgid;
		showMenu({'ctrlid':newimgid,'pos':'12'});
	}
	return;
}
<!--{/if}-->
function succeedhandle_followmod(url, msg, values) {
	var fObj = $('followmod_'+values['fuid']);
	if(values['type'] == 'add') {
		fObj.innerHTML = '{lang nofollow}';
		fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid'];
	} else if(values['type'] == 'del') {
		fObj.innerHTML = '{lang follow}';
		fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid='+values['fuid'];
	}
}
<!--{if $_G['blockedpids']}-->
var blockedPIDs = [<!--{echo implode(',', $_G['blockedpids'])}-->];
<!--{/if}-->
<!--{if $postlist && empty($_G['setting']['disfixedavatar'])}-->
fixed_avatar([<!--{echo implode(',', array_keys($postlist))}-->], {if empty($_G['setting']['disfixednv_viewthread']) }1{else}0{/if});
<!--{elseif empty($_G['setting']['disfixednv_viewthread'])}-->
fixed_top_nv();
<!--{/if}-->
</script>
<!--{template common/footer}-->

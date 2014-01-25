<?php echo '唯美设计QQ:474902417商业模板保护！请到官网上购买正版模板 http://addon.discuz.com/?@1439.developer';exit;?>
<!--{template common/header_bbs}-->


<div id="banner">
	<i id="focusBtl" class="focusBts"></i>
	<i id="focusBtr" class="focusBts"></i>
	<div id="focusAdv">
		<ul id="focusPics">
			<li><a href="" target="_blank"><img alt="" src="{IMGDIR}/images/1.jpg"/></a></li>
			<li><a href="" target="_blank"><img alt="" src="{IMGDIR}/images/2.jpg"/></a></li>
			<li><a href="" target="_blank"><img alt="" src="{IMGDIR}/images/3.jpg"/></a></li>
			<li><a href="" target="_blank"><img alt="" src="{IMGDIR}/images/4.jpg"/></a></li>
			<li><a href="" target="_blank"><img alt="" src="{IMGDIR}/images/5.jpg"/></a></li>
		</ul>
	</div>
</div>


<!--{if $iscwo_header_nv==1}-->

<div id="iNeedBar">
    会员朋友可以随时在这里发布作品，我们将针对您的作品，进行选择加入优秀作品，点击右侧按钮，发布一个需求吧~
   <a title="发布需求" onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav">发布需求</a>
</div>

<!--{/if}-->


<!--{loop $catlist $key $cat}-->

<div style="margin-bottom: 1px;" class="hd cl">
    <h2 style="{if $cat[extra][namecolor]}border-left: 8px $cat[extra][namecolor] solid;{/if}"><a href="{if !empty($caturl)}$caturl{else}forum.php?gid=$cat[fid]{/if}" style="{if $cat[extra][namecolor]}color: {$cat[extra][namecolor]};{/if}" target="_blank">$cat[name]</a></h2>
    <!--{loop $cat[forums] $forumid}-->
	<!--{eval $forum=$forumlist[$forumid];}-->
	<!--{eval $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];}-->
	<div class="links cl">
        <a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if} title="$forum[todayposts]话题">$forum[name]</a>
	</div>
  <!--{/loop}-->
</div>

<!--{/loop}-->


<div id="wp" class="wp">
<!--{if empty($gid)}-->
	<!--{ad/text/wp a_t}-->
<!--{/if}-->

<style id="diy_style" type="text/css"></style>

	<div class="wp1024">
		<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
	</div>

<div id="shoucang">

<!--{eval $list_count=0;}-->
<!--{loop $threadlist $thread}-->
<!--{eval $list_count+=1;}-->

		<div class="scitem scitemimage show"{if $list_count%3==0}style="margin-right: 0px;"{/if}>
		<!--{if $thread['attachment'] == 2}-->
			<a style="text-decoration:underline;color: #000" class="simage" href="forum.php?mod=viewthread&tid=$thread[tid]" target="_blank">
			<!--{eval $thread['coverpath'] = getthreadcover($thread['tid'], 1);}-->
			<img style="width: 290px;height:180px" src="$thread[coverpath]" onerror='this.src="template/iscwo_design_2013/img/nophoto.gif"' border='0' />
			<div class="simagemask">
				<p>
					$thread[subject]{echo messagecutstr(strip_tags($thread['post']['message']), 200);}
				</p>
			</div>
			</a>
		<!--{else}-->
			<div class="simage">
			<div class="simagemaskall">
				<p>
					$thread[subject]{echo messagecutstr(strip_tags($thread['post']['message']), 200);}
				</p>
			</div>
			</div>
		<!--{/if}-->
			<div class="simgbody">
				<div class="simgh">
					<a href="forum.php?mod=viewthread&tid=$thread[tid]" class="simgtitle" target="_blank">$thread[subject]</a>
		<!--{eval $syaidtable='forum_attachment_'.$thread[tid]%10;}-->
		<!--{eval $fujian=DB::result_first("SELECT `aid` FROM ".DB::table($syaidtable)." WHERE tid=$thread[tid] AND isimage=0");}-->
		<!--{if $fujian}-->
		<a href="forum.php?mod=viewthread&tid=$thread[tid]" class="sylist_fj" title="有附件"  hidefocus="true"></a> 
		<!--{else}-->
		<a href="forum.php?mod=viewthread&tid=$thread[tid]" class="sylist_blank" title="新窗口打开" hidefocus="true" target="_blank"></a> 
		<!--{/if}-->


				</div>
				<div class="clear">
				</div>
				
				<!--<a href="/" target="_blank">视觉设计</a>-->
</p>

			
				<div class="clear">
				</div>
				<div class="simgfoot">
					<div>
						<span class="simgdate"></span><span>2013-07-18</span>
					</div>

		<script type="text/javascript" src="{$_G['setting']['jspath']}forum_viewthread.js?{VERHASH}"></script>
		
		

					<p class="itemfoot">
						<a href="" class="yyicon2 yy2dian"></a><span class="iftxt">$thread[views]</span>
		                <a href="" class="yyicon2 yy2dian"></a><span class="iftxt">$thread[replies]</span>

			 <!--{if ($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']}-->
			<!--{if !empty($_G['setting']['recommendthread']['addtext'])}-->
					
						<a id="recommend_add$list_count" class="yyicon2 yy2xiaoxin" hidefocus="true" href="forum.php?mod=misc&action=recommend&do=add&tid=$thread[tid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate({$_G['group']['allowrecommend']})');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = $('recommendv_add{$list_count}').innerHTML + ' {lang activity_member_unit}喜欢'"><span class="ftishi">添加到我喜欢</span></a>
						
						<span class="iftxt">$thread[recommend_add]</span>
			<!--{/if}-->
						
	      <!--{/if}-->
					</p>
				</div>
			</div>
			<div class="clear">
			</div>
		</div>


<!--{/loop}-->
	</div>
	<div class="clear">
	</div>


<div style="margin-top:20px;" class="wp1024 mbw cl">

<p class="{if $lastpage && $nextpage}fd_page2{else}fd_page1{/if}">

<!--{if $lastpage}--><a class="fd_last" href="forum.php?page=$lastpage"></a><!--{/if}-->

<!--{if $nextpage}--><a class="fd_next" href="forum.php?page=$nextpage"></a><!--{/if}-->

</p>

</div>

<div class="wp1024 iscwo_mb30">
		<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>


<!--{if empty($gid) && ($_G['cache']['forumlinks'][0] || $_G['cache']['forumlinks'][1] || $_G['cache']['forumlinks'][2])}-->
<div class="wp1024 cl">
		<div class="bm lk">
			<div id="category_lk" class="bm_c ptm">
				<!--{if $_G['cache']['forumlinks'][0]}-->
					<ul class="m mbn cl">$_G['cache']['forumlinks'][0]</ul>
				<!--{/if}-->
				<!--{if $_G['cache']['forumlinks'][1]}-->
					<div class="mbn cl">
						$_G['cache']['forumlinks'][1]
					</div>
				<!--{/if}-->
				<!--{if $_G['cache']['forumlinks'][2]}-->
					<ul class="x mbm cl">
						$_G['cache']['forumlinks'][2]
					</ul>
				<!--{/if}-->
			</div>
		</div>
		
</div>		
<!--{/if}-->
		

<div class="linkss">
	<div class="follow">
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
                        title : '$navtitle',		//分享的标题
                        description : '$_G['setting']['bbname']'	//分享的详细描述
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
				summary:'$_G['setting']['bbname']',/*摘要(可选)*/
				title:'$navtitle',/*分享标题(可选)*/
				site:'$_G['setting']['bbname']',/*分享来源 如：腾讯网(可选)*/
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
	<div class="ry">
		<div class="flipboard">
			<a href="/" title="菁菁导航地图" target="_blank"></a>
		</div>
		<div class="hda">
			<a href="/" title="菁菁视频教程" target="_blank"></a>
		</div>
	</div>
</div>

<!--{if $_G['group']['radminid'] == 1}-->
	<!--{eval helper_manyou::checkupdate();}-->
<!--{/if}-->
<!--{if empty($_G['setting']['disfixednv_forumindex']) }--><script>fixed_top_nv();</script><!--{/if}-->
<!--{template common/footer}-->

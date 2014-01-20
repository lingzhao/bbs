<?php echo '唯美设计QQ:474902417商业模板保护！请到官网上购买正版模板 http://addon.discuz.com/?@1439.developer';exit;?>
<!--{eval $needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);}-->
<!--{block authorverifys}-->
<!--{if $_G['setting']['verify']['enabled']}-->
	<!--{loop $_G['setting']['verify'] $vid $verify}-->
		<!--{if $verify['available'] && $verify['showicon']}-->
			<a href="home.php?mod=spacecp&ac=profile&op=verify&vid=$vid" target="_blank">
			<!--{if $post['verify'.$vid] == 1}-->
				<!--{if !empty($verify['icon'])}--><img src="$verify['icon']" class="vm" alt="$verify[title]" title="$verify[title]" /><!--{else}-->$verify[title]<!--{/if}-->
			<!--{elseif !empty($verify['unverifyicon'])}-->
				<img src="$verify['unverifyicon']" class="vm" alt="$verify[title]" title="$verify[title]" />
			<!--{/if}--></a>&nbsp;
		<!--{/if}-->
	<!--{/loop}-->
<!--{/if}-->
<!--{/block}-->
<!--{if $post['first'] &&  $_G['forum_threadstamp']}-->
	<div id="threadstamp"><img src="{STATICURL}image/stamp/$_G[forum_threadstamp][url]" title="$_G[forum_threadstamp][text]" /></div>
<!--{/if}-->
<!--{if empty($post['deleted'])}-->




<!--{if $post['first']}-->

<table id="pid$post[pid]" summary="pid$post[pid]" cellspacing="0" cellpadding="0">
<tr>
	
	<td class="plc" colspan="2">
	

			
		

		<div class="pct">
			
			<!--{if !$_G['inajax']}-->
				<!--{if empty($ad_a_pr_css)}-->
					<style type="text/css">.pcb{margin-right:0}</style>
					<!--{eval $ad_a_pr_css=1;}-->
				<!--{/if}-->
			<!--{/if}-->

			

			<!--{subtemplate forum/viewthread_node_body}-->
		</div>

		<!--{if helper_access::check_module('collection') && !$_G['forum']['disablecollect']}-->
			<!--{if $post['relatecollection']}-->
				<div class="cm">
					<h3 class="psth xs1">{lang collection_related}</h3>
					<ul class="mbw xl xl2 cl">
					<!--{loop $post['relatecollection'] $var}-->
						<li>&middot; <a href="forum.php?mod=collection&action=view&ctid=$var[ctid]" title="$var[name]" target="_blank" class="xi2 xw1">$var[name]</a><span class="pipe">|</span><span class="xg1">{lang collection_threadnum}: $var[threadnum], {lang collection_follow}: $var[follownum]</span></li>
					<!--{/loop}-->
					<!--{if $post['releatcollectionmore']}-->
						<li>&middot; <a href="forum.php?mod=collection&tid=$_G[tid]" target="_blank" class="xi2 xw1">{lang more}</a></li>
					<!--{/if}-->
					</ul>
				</div>
				<!--{if $post['sourcecollection']['ctid']}-->
				<div>
					{lang collection_fromctid}
					<form action="forum.php?mod=collection&action=comment&ctid={$ctid}&tid={$_G[tid]}" method="POST" class="ptm pbm cl">
						<input type="hidden" name="ratescore" id="ratescore" />
						<span class="clct_ratestar">
							<span class="btn">
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',1)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',1,'ratescore')">1</a>
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',2)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',2,'ratescore')">2</a>
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',3)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',3,'ratescore')">3</a>
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',4)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',4,'ratescore')">4</a>
								<a href="javascript:;" onmouseover="rateStarHover('clct_ratestar_star',5)" onmouseout="rateStarHover('clct_ratestar_star',0)" onclick="rateStarSet('clct_ratestar_star',5,'ratescore')">5</a>
							</span>
							<span id="clct_ratestar_star" class="star star$memberrate"></span>
						</span>
						&nbsp;<button type="submit" value="submit" class="pn"><span>{lang collection_rate}</span></button>
					</form>
				</div>
				<!--{/if}-->
			<!--{/if}-->
		<!--{/if}-->

	</td></tr>
	
	
	
<!--{if !$_G['forum_thread']['archiveid']}-->
<tr>
	
	<td class="plc" style="overflow:visible;" colspan="2">
		<div class="po">
			
			<div class="pob cl">
				<em>
					<!--{if $post['invisible'] == 0}-->
						<!--{if $allowpostreply && $post['allowcomment'] && (!$thread['closed'] || $_G['forum']['ismoderator'])}--><a class="cmmnt" href="forum.php?mod=misc&action=comment&tid=$post[tid]&pid=$post[pid]&extra=$_GET[extra]&page=$page{if $_G['forum_thread']['special'] == 127}&special=$specialextra{/if}" onclick="showWindow('comment', this.href, 'get', 0)">{lang comments}</a><!--{/if}-->
						
					<!--{/if}-->
					<!--{if (($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] <= $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && ($post['authorid'] == $_G['uid'] && $_G['forum_thread']['closed'] == 0) && !(!$alloweditpost_status && $edittimelimit && TIMESTAMP - $post['dbdateline'] > $edittimelimit)))}-->
						<a class="editp" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page"><!--{if $_G['forum_thread']['special'] == 2 && !$post['message']}-->{lang post_add_aboutcounter}<!--{else}-->{lang edit}</a><!--{/if}-->
					<!--{elseif $_G['uid'] && $post['authorid'] == $_G['uid'] && $_G['setting']['postappend']}-->
						<a class="appendp" href="forum.php?mod=misc&action=postappend&tid=$post[tid]&pid=$post[pid]&extra=$_GET[extra]&page=$page" onClick="showWindow('postappend', this.href, 'get', 0)">{lang postappend}</a>
					<!--{/if}-->
					<!--{if $post['first'] && $post['invisible'] == -3}-->
						<a class="psave" href="forum.php?mod=misc&action=pubsave&tid=$_G[tid]">{lang published}</a>
					<!--{/if}-->
					
					<!--{if $post['first'] && $allowblockrecommend}--><a class="push" href="javascript:;" onclick="modaction('recommend', '$_G[forum_firstpid]', 'op=recommend&idtype={if $_G[forum_thread][isgroup]}gtid{else}tid{/if}&id=$_G[tid]&pid=$post[pid]', 'portal.php?mod=portalcp&ac=portalblock')">{lang modmenu_blockrecommend}</a><!--{/if}-->
					<!--{hook/viewthread_postfooter $postcount}-->
				</em>

				<p>
					<!--{if $post['invisible'] == 0}-->
					
						<!--{if $_G['forum_thread']['special'] == 3 && ($_G['forum']['ismoderator'] && (!$_G['setting']['rewardexpiration'] || $_G['setting']['rewardexpiration'] > 0 && ($_G[timestamp] - $_G['forum_thread']['dateline']) / 86400 > $_G['setting']['rewardexpiration']) || $_G['forum_thread']['authorid'] == $_G['uid']) && $post['authorid'] != $_G['forum_thread']['authorid'] && $post['first'] == 0 && $_G['uid'] != $post['authorid'] && $_G['forum_thread']['price'] > 0}-->
							<a href="javascript:;" onclick="setanswer($post['pid'], '$_GET[from]')">{lang reward_set_bestanswer}</a>
						<!--{/if}-->

						<!--{if !empty($postlist[$post[pid]]['totalrate']) && $_G['forum']['ismoderator']}-->
							<a href="forum.php?mod=misc&action=removerate&tid=$_G[tid]&pid=$post[pid]&page=$page" onclick="showWindow('rate', this.href, 'get', -1)">{lang removerate}</a>
						<!--{/if}-->
						
					<!--{/if}-->
					<!--{hook/viewthread_postaction $postcount}-->
				</p>

				
			</div>
		</div>
	</td>
</tr>
<!--{/if}-->
<tr class="">
	<td class="pls"></td>
	<td class="plc">
		<!--{if $post['first'] && $_G[forum_thread][special] == 5 && $_G[forum_thread][displayorder] >= 0}-->
			<ul class="ttp cl">
				<li style="display:inline;margin-left:12px"><strong class="bw0 bg0_all">{lang debate_filter}: </strong></li>
				<li{if !isset($_GET['stand'])} class="xw1 a"{/if}><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]" hidefocus="true">{lang all}</a></li>
				<li{if $_GET['stand'] == 1} class="xw1 a"{/if}><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&stand=1" hidefocus="true">{lang debate_square}</a></li>
				<li{if $_GET['stand'] == 2} class="xw1 a"{/if}><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&stand=2" hidefocus="true">{lang debate_opponent}</a></li>
				<li{if isset($_GET['stand']) && $_GET['stand'] == 0} class="xw1 a"{/if}><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&stand=0" hidefocus="true">{lang debate_neutral}</a></li>
			</ul>
		<!--{/if}-->
		<!--{if $_G['forum_thread']['replies']}--><!--{ad/interthread/a_p/$postcount}--><!--{/if}-->
	</td>
</tr>
</table>








<td class="plc plm">
		<!--{if $locations[$post[pid]]}-->
			<div class="mobile-location">$locations[$post[pid]][location]</div>
		<!--{/if}-->
		<!--{if !IS_ROBOT && $post['first'] && !$_G['forum_thread']['archiveid']}-->
			<!--{hook/viewthread_modaction}-->

			<!--{if $post['invisible'] == 0}-->
				<div id="p_btn" class="mtw mbm cl">
					<!--{if !empty($_G['setting']['pluginhooks']['viewthread_share_method'])}-->
						<div class="tshare cl">
							<strong>{lang viewthread_share_to}:</strong>
							<!--{hook/viewthread_share_method}-->
						</div>
					<!--{/if}-->

					<!--{if !$post['anonymous'] && helper_access::check_module('follow')}-->
					<a href="home.php?mod=spacecp&ac=follow&op=relay&tid=$_G[tid]&from=forum" id="k_relay" onclick="showWindow(this.id, this.href, 'get', 0);" onmouseover="this.title = $('relaynumber').innerHTML + ' {lang activity_member_unit}{lang thread_realy}'"><i><img src="{IMGDIR}/rt.png" alt="{lang thread_realy}" />{lang thread_realy}<span id="relaynumber">{$_G['forum_thread']['relay']}</span></i></a>
					<!--{/if}-->
					<!--{if !$_G['forum']['disablecollect'] && helper_access::check_module('collection')}-->
						<a href="forum.php?mod=collection&action=edit&op=addthread&tid=$_G[tid]" id="k_collect" onclick="showWindow(this.id, this.href);return false;" onmouseover="this.title = $('collectionnumber').innerHTML + ' {lang activity_member_unit}{lang collection}'"><i><img src="{IMGDIR}/collection.png" alt="{lang thread_share}" />{lang collection}<span id="collectionnumber">{$post['releatcollectionnum']}</span></i></a>
					<!--{/if}-->
					<!--{if ($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']}-->
						<!--{if !empty($_G['setting']['recommendthread']['addtext'])}-->
						<a id="recommend_add" href="forum.php?mod=misc&action=recommend&do=add&tid=$_G[tid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate({$_G['group']['allowrecommend']})');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = $('recommendv_add').innerHTML + ' {lang activity_member_unit}$_G[setting][recommendthread][addtext]'"><i><img src="{IMGDIR}/rec_add.gif" alt="$_G['setting']['recommendthread'][addtext]" />$_G['setting']['recommendthread'][addtext]<span id="recommendv_add">$_G[forum_thread][recommend_add]</span></i></a>
						<!--{/if}-->
						<!--{if !empty($_G['setting']['recommendthread']['subtracttext'])}-->
						<a id="recommend_subtract" href="forum.php?mod=misc&action=recommend&do=subtract&tid=$_G[tid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate(-{$_G['group']['allowrecommend']})');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = $('recommendv_subtract').innerHTML + ' {lang activity_member_unit}$_G[setting][recommendthread][subtracttext]'"><i><img src="{IMGDIR}/rec_subtract.gif" alt="$_G['setting']['recommendthread'][subtracttext]" />$_G['setting']['recommendthread'][subtracttext]<span id="recommendv_subtract">$_G[forum_thread][recommend_sub]</span></i></a>
						<!--{/if}-->
					<!--{/if}-->
					<!--{if $_G['group']['raterange'] && $post['authorid']}-->
						<a href="javascript:;" id="ak_rate" onclick="showWindow('rate', 'forum.php?mod=misc&action=rate&tid=$_G[tid]&pid=$post[pid]', 'get', -1);return false;" title="{echo count($postlist[$post[pid]][totalrate]);} {lang people_score}"><i><img src="{IMGDIR}/agree.gif" alt="{lang rate}" />{lang rate}</i></a>
					<!--{/if}-->
					<!--{hook/viewthread_useraction}-->
				</div>
			<!--{/if}-->

		<!--{/if}-->


		<!--{if $post['signature'] && ($_G['setting']['bannedmessages'] & 4 && ($post['memberstatus'] == '-1' || ($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || ($post['status'] & 1)))}-->
			<div class="sign">{lang member_signature_banned}</div>
		<!--{elseif $post['signature'] && !$post['anonymous'] && $showsignatures}-->
			<div class="sign" style="max-height:{$_G['setting']['maxsigrows']}px;maxHeightIE:{$_G['setting']['maxsigrows']}px;">$post[signature]</div>
		<!--{/if}-->
		<!--{hook/viewthread_postsightmlafter $postcount}-->
		<!--{ad/thread/a_pb/1/$postcount}-->
	</td>


<!--以下是回复-->
<div class="comBox">
    <h3>已有 $_G[forum_thread][replies] 个人发表评论</h3>




</div>



<!--{else}-->




<div class="vt_table">
<table id="pid$post[pid]" summary="pid$post[pid]" cellspacing="0" cellpadding="0">
<tr>
	<td class="vt_pls" rowspan="2">
		
		
	
	  <div class="vt_avatar"><a href="home.php?mod=space&uid=$post[authorid]" target="_blank">$post[avatar]</a></div>
	
	
	</td>
	
	
	
	<td class="plc" colspan="2">
		<div class="vt_pi">
			
			
				<!--{if $post['authorid'] && !$post['anonymous']}-->
					<a href="home.php?mod=space&uid=$post[authorid]" target="_blank" class="c_blue xw1">$post[author]</a>
					
			
					<em id="authorposton$post[pid]"> $post[dateline]</em>
					
					
				<!--{elseif getstatus($post['status'], 5)}-->
					
					&nbsp;<em id="authorposton$post[pid]"> $post[dateline]</em>  <a href="home.php?mod=space&uid=$post['authorid']" target="_blank" class="c_blue xw1">$post[author]</a>
				<!--{elseif $post['authorid'] && $post['username'] && $post['anonymous'] || !$post['authorid'] && !$post['username']}-->
					$_G[setting][anonymoustext]&nbsp;
					<em id="authorposton$post[pid]"> $post[dateline]</em>
				<!--{/if}-->
				
				<!--{hook/viewthread_postheader $postcount}-->
				
			
		</div>

		
		<div class="pct cl">
			
			<!--{if !$_G['inajax']}-->
				<!--{if empty($ad_a_pr_css)}-->
					<style type="text/css">.pcb{margin-right:0}</style>
					<!--{eval $ad_a_pr_css=1;}-->
				<!--{/if}-->
			<!--{/if}-->

			<!--{if !$post['first'] && $post['replycredit'] > 0}-->
				<div class="cm">
					<h3 class="psth xs1">
						{lang replycredit} <span class="xw1 xs2 xi1">+{$post['replycredit']}</span> {$_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']][unit]}{$_G['setting']['extcredits'][$_G['forum_thread']['replycredit_rule']['extcreditstype']][title]}
					</h3>
				</div>
			<!--{/if}-->
            
			
			
			<!--{subtemplate forum/viewthread_node_body}-->
			
			
			
			
			
		<!--{if $_G['uid']}-->
	
			
			<!--{if !$_G['forum_thread']['archiveid']}-->
			
			
			<div class="cl" style="overflow:visible;">
	
			  
	                  
	
		        <div class="vt_po cl">
				
				
			    <!--{if !$post['first'] && $modmenu['post']}-->
				<span class="y">
		
				<label for="manage$post[pid]">
				<input type="checkbox" id="manage$post[pid]" class="pc" {if !empty($modclick)}checked="checked" {/if}onclick="pidchecked(this);modclick(this, $post[pid])" value="$post[pid]" autocomplete="off" />
				{lang manage}
				</label>
		
				<!--{if (($_G['forum']['ismoderator'] && $_G['group']['alloweditpost'] && (!in_array($post['adminid'], array(1, 2, 3)) || $_G['adminid'] <= $post['adminid'])) || ($_G['forum']['alloweditpost'] && $_G['uid'] && ($post['authorid'] == $_G['uid'] && $_G['forum_thread']['closed'] == 0) && !(!$alloweditpost_status && $edittimelimit && TIMESTAMP - $post['dbdateline'] > $edittimelimit)))}-->
						<a class="vt_editp" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page"><!--{if $_G['forum_thread']['special'] == 2 && !$post['message']}-->{lang post_add_aboutcounter}<!--{else}-->{lang edit}</a><!--{/if}-->
					<!--{elseif $_G['uid'] && $post['authorid'] == $_G['uid'] && $_G['setting']['postappend']}-->
						<a class="vt_appendp" href="forum.php?mod=misc&action=postappend&tid=$post[tid]&pid=$post[pid]&extra=$_GET[extra]&page=$page" onClick="showWindow('postappend', this.href, 'get', 0)">{lang postappend}</a>
					<!--{/if}-->
					<!--{if $post['first'] && $post['invisible'] == -3}-->
						<a class="vt_psave" href="forum.php?mod=misc&action=pubsave&tid=$_G[tid]">{lang published}</a>
					<!--{/if}-->
					<!--{if $post['invisible'] == -2 && !$post['first']}-->
						<span class="xg1">({lang moderate_need})</span>
					<!--{/if}-->
					<!--{if $post['first'] && $allowblockrecommend}--><a class="vt_push" href="javascript:;" onclick="modaction('recommend', '$_G[forum_firstpid]', 'op=recommend&idtype={if $_G[forum_thread][isgroup]}gtid{else}tid{/if}&id=$_G[tid]&pid=$post[pid]', 'portal.php?mod=portalcp&ac=portalblock')">{lang modmenu_blockrecommend}</a><!--{/if}-->
					<!--{hook/viewthread_postfooter $postcount}-->
		
				
				
				</span>
			    <!--{/if}-->
				  
				  <!--{if $post['invisible'] == 0}-->
						
						<!--{if (!$_G['uid'] || $allowpostreply) && !$needhiddenreply}-->
		
								<p class="cl"><a class="vt_fastre" href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&repquote=$post[pid]&extra=$_GET[extra]&page=$page" onclick="showWindow('reply', this.href)"></a></p>
							
						<!--{/if}-->
				  <!--{/if}-->

		        </div>
		
	
		
	         </div>
			
			<!--{/if}-->
			
		
		
			
		</div>
		
	<!--{/if}-->
		

	</td></tr>
	
</table>
</div>




<!--{/if}-->




































<!--{if !empty($aimgs[$post[pid]])}-->
<script type="text/javascript" reload="1">
	aimgcount[{$post[pid]}] = [<!--{echo dimplode($aimgs[$post[pid]]);}-->];
	attachimggroup($post['pid']);
	<!--{if empty($_G['setting']['lazyload'])}-->
		<!--{if !$post['imagelistthumb']}-->
			attachimgshow($post[pid]);
		<!--{else}-->
			attachimgshow($post[pid], 1);
		<!--{/if}-->
	<!--{/if}-->
	var aimgfid = 0;
	<!--{if $_G['forum']['picstyle'] && ($_G['forum']['ismoderator'] || $_G['uid'] == $_G['thread']['authorid'])}-->
		aimgfid = $_G[fid];
	<!--{/if}-->
	<!--{if $post['imagelistthumb']}-->
		attachimglstshow($post['pid'], <!--{echo intval($_G['setting']['lazyload'])}-->, aimgfid, '{$_G[setting][showexif]}');
	<!--{/if}-->
</script>
<!--{/if}-->
<!--{else}-->
<!--{/if}-->
<!--{hook/viewthread_endline $postcount}-->
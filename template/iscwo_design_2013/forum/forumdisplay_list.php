<?php echo '唯美设计QQ:474902417商业模板保护！请到官网上购买正版模板 http://addon.discuz.com/?@1439.developer';exit;?>

<div id="threadlist" class="tl mbw cl"{if $_G['uid']} style="position: relative;"{/if}>
	<!--{if $quicksearchlist && !$_GET['archiveid']}-->
		<!--{subtemplate forum/search_sortoption}-->
	<!--{/if}-->

<style>.tl .threadpre .threadpretd {border-left: 0px solid #d9d9d9;border-right: 0px solid #d9d9d9;}.icon_preview{top:-17px;}</style>
	
	<div class="fd_top mbw cl">
		
		<div class="fd_top1">
		

					<span style="margin-right: 15px;" class="y">
						<a href="home.php?mod=spacecp&ac=favorite&type=forum&id=$_G[fid]&handlekey=favoriteforum" id="a_favorite" class="fa_fav" onclick="showWindow(this.id, this.href, 'get', 0);">{lang forum_favorite} <strong class="xi1" id="number_favorite" {if !$_G[forum][favtimes]} style="display:none;"{/if}>(<span id="number_favorite_num">$_G[forum][favtimes]</span>)</strong></a>
						<!--{if rssforumperm($_G['forum']) && $_G[setting][rssstatus] && !$_GET['archiveid'] && !$subforumonly}--><span class="pipe">|</span><a href="forum.php?mod=rss&fid=$_G[fid]&auth=$rssauth" class="fa_rss" target="_blank" title="RSS">{lang rss_subscribe_this}</a><!--{/if}-->
						<!--{if !empty($forumarchive)}-->
							<span class="pipe">|</span><a id="forumarchive" href="javascript:;" class="fa_achv" onmouseover="showMenu(this.id)"><!--{if $_GET['archiveid']}-->$forumarchive[$_GET['archiveid']]['displayname']<!--{else}-->{lang forum_archive}<!--{/if}--></a>
						<!--{/if}-->
						<!--{hook/forumdisplay_forumaction}-->

						<!--{if $_G['forum']['ismoderator']}-->
						<!--{if $_G['forum']['recyclebin']}-->
							<span class="pipe">|</span><a href="{if $_G['adminid'] == 1}admin.php?mod=forum&action=recyclebin&frames=yes{elseif $_G['forum']['ismoderator']}forum.php?mod=modcp&action=recyclebin&fid=$_G[fid]{/if}" class="fa_bin" target="_blank">{lang forum_recyclebin}</a>
						<!--{/if}-->
						<!--{if $_G['forum']['ismoderator'] && !$_GET['archiveid']}-->
							<span class="pipe">|</span><strong>
							<!--{if $_G['forum']['status'] != 3}-->
								<a href="forum.php?mod=modcp&fid=$_G[fid]">{lang modcp}</a>
							<!--{else}-->
								<a href="forum.php?mod=group&action=manage&fid=$_G[fid]">{lang modcp}</a>
							<!--{/if}-->
							</strong>
						<!--{/if}-->
						<!--{hook/forumdisplay_modlink}-->
						<!--{/if}-->
					</span>


		   <span class="fd_forumnane">$_G['forum'][name]分类</span>
		   
		   <!--{if !$subforumonly}--><span class="fd_tj">{lang index_today}: <em class="xi1">$_G[forum][todayposts]</em><span class="pipe">|</span>{lang index_threads}: <em class="xi1">$_G[forum][threads]</em></span><!--{/if}-->
		
		
		   <span class="fd_sx">
		   
				<a {if !$_GET['filter']}class="fd_a"{/if} href="forum.php?mod=forumdisplay&fid=$_G[fid]">全部主题</a>
							
				<a {if $_GET['orderby']=='dateline'} class="fd_a" {/if} href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=author&orderby=dateline$forumdisplayadd[author]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">最新</a>
				
				<a {if $_GET['orderby']=='heats'} class="fd_a" {/if} href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=heat&orderby=heats$forumdisplayadd[heat]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang order_heats}</a>
				
				<a {if $_GET['digest']==1} class="fd_a" {/if} href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=digest&digest=1$forumdisplayadd[digest]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" >{lang digest_posts}</a>
				<!--{if empty($_G['forum']['picstyle'])}-->
				<!--{else}-->
				<!--{if empty($_G['cookie']['forumdefstyle'])}-->
					<a style="color: red;" href="forum.php?mod=forumdisplay&fid=$_G[fid]&forumdefstyle=yes" title="切换到帖子列表{lang view_thread}">帖子列表</a>
				<!--{else}-->
					<a style="color: red;" href="forum.php?mod=forumdisplay&fid=$_G[fid]&forumdefstyle=no" title="切换到图片列表{lang view_thread}">图片列表</a>
				<!--{/if}-->
				<!--{/if}-->
		  </span>

		</div>
		
		<div class="fd_top2">
		
				  <!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || count($_G['forum']['threadsorts']['types']) > 0}-->
					<ul id="thread_types" class="ttps bm cl">
						<!--{hook/forumdisplay_threadtype_inner}-->
						<li id="ttp_all" {if !$_GET['typeid'] && !$_GET['sortid']}class="xw1 a"{/if}><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_G['forum']['threadsorts']['defaultshow']}&filter=sortall&sortall=1{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang forum_viewall}</a></li>
						<!--{if $_G['forum']['threadtypes']}-->
							<!--{loop $_G['forum']['threadtypes']['types'] $id $name}-->
								<!--{if $_GET['typeid'] == $id}-->
								<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['sortid']}&filter=sortid&sortid=$_GET['sortid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name</a></li>
								<!--{else}-->
								<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=typeid&typeid=$id$forumdisplayadd[typeid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name</a></li>
								<!--{/if}-->
							<!--{/loop}-->
						<!--{/if}-->

						<!--{if $_G['forum']['threadsorts']}-->
							<!--{if $_G['forum']['threadtypes']}--><li><span class="pipe">|</span></li><!--{/if}-->
							<!--{loop $_G['forum']['threadsorts']['types'] $id $name}-->
								<!--{if $_GET['sortid'] == $id}-->
								<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['typeid']}&filter=typeid&typeid=$_GET['typeid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name</a></li>
								<!--{else}-->
								<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=sortid&sortid=$id$forumdisplayadd[sortid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name</a></li>
								<!--{/if}-->
							<!--{/loop}-->
						<!--{/if}-->
						<!--{hook/forumdisplay_filter_extra}-->
					</ul>
					<script type="text/javascript">showTypes('thread_types');</script>
				<!--{/if}-->
		
		
		</div>
	
	

		
	</div>
	
	
	<div class="cl" {if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}style="background: #fff;border: 1px solid #D6D6D6;"{/if}>
		<!--{if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}-->
			<script type="text/javascript">var lasttime = $_G['timestamp'];var listcolspan= '{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}6{else}5{/if}';</script>
		<!--{/if}-->
		<div id="forumnew" style="display:none"></div>
		<form method="post" autocomplete="off" name="moderate" id="moderate" action="forum.php?mod=topicadmin&action=moderate&fid=$_G[fid]&infloat=yes&nopost=yes">
			<input type="hidden" name="formhash" value="{FORMHASH}" />
			<input type="hidden" name="listextra" value="$extra" />
			<table summary="forum_$_G[fid]" cellspacing="0" cellpadding="0" id="threadlisttableid">
				<!--{if (!$simplestyle || !$_G['forum']['allowside'] && $page == 1) && !empty($announcement)}-->
					<tbody>
						<tr>
							<td class="icn"><img src="{IMGDIR}/ann_icon.gif" alt="{lang announcement}" /></td>
							<!--{if $_G['forum']['ismoderator'] && !$_GET['archiveid']}--><td class="o">&nbsp;</td><!--{/if}-->
							<th><strong class="xst">{lang announcement}: <!--{if empty($announcement['type'])}--><a href="forum.php?mod=announcement&id=$announcement[id]#$announcement[id]" target="_blank">$announcement[subject]</a><!--{else}--><a href="$announcement[message]" target="_blank">$announcement[subject]</a><!--{/if}--></strong></th>
							<td class="by">
								<cite><a href="home.php?mod=space&uid=$announcement[authorid]" c="1">$announcement[author]</a></cite>
								<em>$announcement[starttime]</em>
							</td>
							<td class="num">&nbsp;</td>
							<td class="by">&nbsp;</td>
						</tr>
					</tbody>
				<!--{/if}-->
				<!--{if !$separatepos || !$_G['setting']['forumseparator']}-->
					<tbody id="separatorline" class="emptb"><tr><td class="icn"></td><!--{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}--><td class="o"></td><!--{/if}--><th></th><!--{if CURMODULE == 'guide'}--><td class="by"></td><!--{/if}--><td class="by"></td><td class="num"></td><td class="by"></td></tr></tbody>
				<!--{/if}-->
				<!--{if $_G['forum_threadcount']}-->
					<!--{if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}-->
						<!--{loop $_G['forum_threadlist'] $key $thread}-->
							<!--{if $_G[setting][forumseparator] == 1 && $separatepos == $key + 1}-->
								<tbody id="separatorline">
									<tr class="ts">
										<td>&nbsp;</td>
										<!--{if $_G['forum']['ismoderator'] && !$_GET['archiveid']}--><td>&nbsp;</td><!--{/if}-->
										<th><!--{if empty($_G['forum']['picstyle']) && $_GET['orderby'] == 'lastpost' && !$_GET['filter']}--><a href="javascript:;" onclick="checkForumnew_btn('{$_G['fid']}')" title="{lang showupgrade}" class="forumrefresh">{lang forum_thread}</a><!--{else}-->&nbsp;<!--{/if}--></th><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td>
									</tr>
								</tbody>
								<script type="text/javascript">hideStickThread();</script>
							<!--{/if}-->
							<!--{if $separatepos <= $key + 1}-->
								<!--{ad/threadlist}-->
							<!--{/if}-->
							<tbody id="$thread[id]">
								<tr<!--{if $key %2==1}--> class="bg1"<!--{else}--> class="bg2"<!--{/if}-->>
									<td class="icn">
										<a href="forum.php?mod=viewthread&tid=$thread[icontid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" title="{if $thread['displayorder'] == 1}{lang thread_type1} - {/if}
											{if $thread['displayorder'] == 2}{lang thread_type2} - {/if}
											{if $thread['displayorder'] == 3}{lang thread_type3} - {/if}
											{if $thread['displayorder'] == 4}{lang thread_type4} - {/if}
											{if $thread[folder] == 'lock'}{lang closed_thread} - {/if}
											{if $thread['special'] == 1}{lang thread_poll} - {/if}
											{if $thread['special'] == 2}{lang thread_trade} - {/if}
											{if $thread['special'] == 3}{lang thread_reward} - {/if}
											{if $thread['special'] == 4}{lang thread_activity} - {/if}
											{if $thread['special'] == 5}{lang thread_debate} - {/if}
											{if $thread[folder] == "new"}{lang have_newreplies} - {/if}
											{lang target_blank}" target="_blank">
										<!--{if $thread[folder] == 'lock'}-->
											<img src="{IMGDIR}/folder_lock.gif" />
										<!--{elseif $thread['special'] == 1}-->
											<img src="{IMGDIR}/pollsmall.gif" alt="{lang thread_poll}" />
										<!--{elseif $thread['special'] == 2}-->
											<img src="{IMGDIR}/tradesmall.gif" alt="{lang thread_trade}" />
										<!--{elseif $thread['special'] == 3}-->
											<img src="{IMGDIR}/rewardsmall.gif" alt="{lang thread_reward}" />
										<!--{elseif $thread['special'] == 4}-->
											<img src="{IMGDIR}/activitysmall.gif" alt="{lang thread_activity}" />
										<!--{elseif $thread['special'] == 5}-->
											<img src="{IMGDIR}/debatesmall.gif" alt="{lang thread_debate}" />
										<!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
											<img src="{IMGDIR}/pin_$thread[displayorder].gif" alt="$_G[setting][threadsticky][3-$thread[displayorder]]" />
										<!--{else}-->
											<img src="{IMGDIR}/folder_$thread[folder].gif" />
										<!--{/if}-->
										</a>
									</td>
									<!--{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}-->
									<td class="o">
										<!--{if $thread['fid'] == $_G[fid]}-->
											<!--{if $thread['displayorder'] <= 3 || $_G['adminid'] == 1}-->
												<input onclick="tmodclick(this)" type="checkbox" name="moderate[]" value="$thread[tid]" />
											<!--{else}-->
												<input type="checkbox" disabled="disabled" />
											<!--{/if}-->
										<!--{else}-->
											<input type="checkbox" disabled="disabled" />
										<!--{/if}-->
									</td>
									<!--{/if}-->
									<th class="$thread[folder]">
										<!--{if in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
										<a href="javascript:void(0);" onclick="hideStickThread('$thread[tid]')" class="showhide y" title="{lang hidedisplayorder}">{lang hidedisplayorder}</a></em>
										<!--{/if}-->
										<!--{if !$_G['setting']['forumdisplaythreadpreview'] && !($thread['readperm'] && $thread['readperm'] > $_G['group']['readaccess'] && !$_G['forum']['ismoderator'] && $thread['authorid'] != $_G['uid'])}-->
											<a class="tdpre y" href="javascript:void(0);" onclick="previewThread('$thread[tid]', '$thread[id]');">{lang preview}</a>
										<!--{/if}-->																				<!--{hook/forumdisplay_thread $key}-->
										<!--{if !$thread['forumstick'] && $thread['closed'] > 1 && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
												<!--{eval $thread[tid]=$thread[closed];}-->
										<!--{/if}-->
										$thread[typehtml] $thread[sorthtml]
										<!--{if $thread['moved']}-->
											{lang thread_moved}:<!--{eval $thread[tid]=$thread[closed];}-->
										<!--{/if}-->
										<a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra"$thread[highlight]{if $thread['isgroup'] == 1 || $thread['forumstick']} target="_blank"{else} onclick="atarget(this)"{/if} class="s xst">$thread[subject]</a>
										<!--{if $thread[icon] >= 0}-->
											<img src="{STATICURL}image/stamp/{$_G[cache][stamps][$thread[icon]][url]}" alt="{$_G[cache][stamps][$thread[icon]][text]}" align="absmiddle" />
										<!--{/if}-->
										<!--{if $thread['rushreply']}-->
											<img src="{IMGDIR}/rushreply_s.png" alt="{lang rushreply}" align="absmiddle" />
											<!--{if $rushinfo[$thread[tid]]}-->
											<span id="rushtimer_$thread[tid]"> {lang havemore_special} <span id="rushtimer_body_$thread[tid]"></span> <script language="javascript">settimer($rushinfo[$thread[tid]]['timer'], 'rushtimer_body_$thread[tid]');</script>{if $rushinfo[$thread[tid]]['timertype'] == 'start'} {lang header_start} {else} {lang over} {/if} {lang right_special}</span>
											<!--{/if}-->
										<!--{/if}-->
										<!--{if $stemplate && $sortid}-->$stemplate[$sortid][$thread[tid]]<!--{/if}-->
										<!--{if $thread['readperm']}--> - [{lang readperm} <span class="xw1">$thread[readperm]</span>]<!--{/if}-->
										<!--{if $thread['price'] > 0}-->
											<!--{if $thread['special'] == '3'}-->
											- <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype=1" title="{lang show_rewarding_only}"><span class="xi1">[{lang thread_reward} <span class="xw1">$thread[price]</span> {$_G[setting][extcredits][$_G['setting']['creditstransextra'][2]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][2]][title]}]</span></a>
											<!--{else}-->
											- [{lang price} <span class="xw1">$thread[price]</span> {$_G[setting][extcredits][$_G['setting']['creditstransextra'][1]][unit]}{$_G[setting][extcredits][$_G['setting']['creditstransextra'][1]][title]}]
											<!--{/if}-->
										<!--{elseif $thread['special'] == '3' && $thread['price'] < 0}-->
											- <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype=2" title="{lang show_rewarded_only}">[{lang reward_solved}]</a>
										<!--{/if}-->
										<!--{if $thread['attachment'] == 2}-->
											<img src="{STATICURL}image/filetype/image_s.gif" alt="attach_img" title="{lang attach_img}" align="absmiddle" />
										<!--{elseif $thread['attachment'] == 1}-->
											<img src="{STATICURL}image/filetype/common.gif" alt="attachment" title="{lang attachment}" align="absmiddle" />
										<!--{/if}-->
										<!--{if $thread['mobile']}-->
											<img src="{IMGDIR}/mobile-attach-$thread['mobile'].png" alt="{lang post_mobile}" align="absmiddle" />
										<!--{/if}-->
										<!--{if $thread['digest'] > 0 && $filter != 'digest'}-->
											<img src="{IMGDIR}/digest_$thread[digest].gif" align="absmiddle" alt="digest" title="{lang thread_digest} $thread[digest]" />
										<!--{/if}-->
										<!--{if $thread['displayorder'] == 0}-->
											<!--{if $thread[recommendicon] && $filter != 'recommend'}-->
												<img src="{IMGDIR}/recommend_$thread[recommendicon].gif" align="absmiddle" alt="recommend" title="{lang thread_recommend} $thread[recommends]" />
											<!--{/if}-->
											<!--{if $thread[heatlevel]}-->
												<img src="{IMGDIR}/hot_$thread[heatlevel].gif" align="absmiddle" alt="heatlevel" title="{lang heats}: {$thread[heats]}" />
											<!--{/if}-->
											<!--{if $thread['rate'] > 0}-->
												<img src="{IMGDIR}/agree.gif" align="absmiddle" alt="agree" title="{lang rate_credit_add}" />
											<!--{elseif $thread['rate'] < 0}-->
												<img src="{IMGDIR}/disagree.gif" align="absmiddle" alt="disagree" title="{lang posts_deducted}" />
											<!--{/if}-->
										<!--{/if}-->
										<!--{if $thread['replycredit'] > 0}-->
											- <span class="xi1">[{lang replycredit} <strong> $thread['replycredit']</strong> ]</span>
										<!--{/if}-->
										<!--{hook/forumdisplay_thread_subject $key}-->
										<!--{if $thread[multipage]}-->
											<span class="tps">$thread[multipage]</span>
										<!--{/if}-->
										<!--{if $thread['weeknew']}-->
											<a href="forum.php?mod=redirect&tid=$thread[tid]&goto=lastpost#lastpost" class="xi1">New</a>
										<!--{/if}-->
										<!--{if !$thread['forumstick'] && ($thread['isgroup'] == 1 || $thread['fid'] != $_G['fid'])}-->
											<!--{if $thread['related_group'] == 0 && $thread['closed'] > 1}-->
												<!--{eval $thread[tid]=$thread[closed];}-->
											<!--{/if}-->
											<!--{if $groupnames[$thread[tid]]}-->
												<span class="fromg xg1"> [{lang from}: <a href="forum.php?mod=group&fid={$groupnames[$thread[tid]][fid]}" target="_blank" class="xg1">{$groupnames[$thread[tid]][name]}</a>]</span>
											<!--{/if}-->
										<!--{/if}-->
									</th>
									<!--{if CURMODULE == 'guide'}-->
										<td class="by"><a href="forum.php?mod=forumdisplay&fid=$thread[fid]" target="_blank">$forumnames[$thread[fid]]['name']</a></td>
									<!--{/if}-->
									<td class="by">
										<!--{hook/forumdisplay_author $key}-->
										<cite>
										<!--{if $thread['authorid'] && $thread['author']}-->
											<a href="home.php?mod=space&uid=$thread[authorid]" c="1"{if $groupcolor[$thread[authorid]]} style="color: $groupcolor[$thread[authorid]];"{/if}>$thread[author]</a><!--{if !empty($verify[$thread['authorid']])}--> $verify[$thread[authorid]]<!--{/if}-->
										<!--{else}-->
											$_G[setting][anonymoustext]
										<!--{/if}-->
										</cite>
										<em><span{if $thread['istoday']} class="xi1"{/if}>$thread[dateline]</span></em>
									</td>
									<td class="num"><a href="forum.php?mod=viewthread&tid=$thread[tid]&extra=$extra" class="xi2">$thread[allreplies]</a><em><!--{if $thread['isgroup'] != 1}-->$thread[views]<!--{else}-->{$groupnames[$thread[tid]][views]}<!--{/if}--></em></td>
									<td class="by">
										<cite><!--{if $thread['lastposter']}--><a href="{if $thread[digest] != -2}home.php?mod=space&username=$thread[lastposterenc]{else}forum.php?mod=viewthread&tid=$thread[tid]&page={echo max(1, $thread[pages]);}{/if}" c="1">$thread[lastposter]</a><!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
										<em><a href="{if $thread[digest] != -2 && !$thread[ordertype]}forum.php?mod=redirect&tid=$thread[tid]&goto=lastpost$highlight#lastpost{else}forum.php?mod=viewthread&tid=$thread[tid]{if !$thread[ordertype]}&page={echo max(1, $thread[pages]);}{/if}{/if}">$thread[lastpost]</a></em>
									</td>
								</tr>
							</tbody>
						<!--{/loop}-->
						</table><!-- end of table "forum_G[fid]" branch 1/3 -->
					<!--{else}-->
						</table><!-- end of table "forum_G[fid]" branch 2/3 -->
						
<style>.mbw {margin-bottom: 0px !important;}#shoucang {margin-top: 0px;!important;}.tl table{display:none;} .pg label{display:none;}</style>

<div id="shoucang">

<!--{eval $list_count=0;}-->

<!--{loop $_G['forum_threadlist'] $key $thread}-->
<!--{eval $list_count+=1;}-->

		<div class="scitem scitemimage show"{if $list_count%3==0}style="margin-right: 0px;"{/if}>
			<a style="text-decoration:underline;color: #000" class="simage" href="forum.php?mod=viewthread&tid=$thread[tid]" target="_blank">
			<!--{eval $thread['coverpath'] = getthreadcover($thread['tid'], 1);}-->
		<!--{if $thread['cover']}-->
		<!--{eval $thread['coverpath'] = getthreadcover($thread['tid'], 1);}-->
			<img style="width: 290px;height:180px" src="$thread[coverpath]"/>
		<!--{else}-->
		<span class="nopic"></span>
		<!--{/if}-->
			</a>
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
				<p class="simgtxt simgtxthref">
					<a href="forum.php?mod=forumdisplay&fid=$_G[fid]" target="_blank">$_G['forum'][name]</a>
</p>

    <div class="sylist_author" onmouseover="this.className='sylist_author sylist_author1'" onmouseout="this.className='sylist_author'">
	<a href="home.php?mod=space&uid=$thread[authorid]" hidefocus="true" class="sylist_tx" >
	<div class="sylist_imgdiv"><!--{avatar($thread[authorid],small)}--></div>
	<div class="sylist_txcover"></div></a>
	<a href="home.php?mod=space&uid=$thread[authorid]" hidefocus="true" target="_blank" >$thread[author]</a>
	
	<!--{if helper_access::check_module('follow')}--> 	   
		<a href="home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid=$thread[authorid]" id="followmod_$thread[authorid]"  class="hover_follow" onclick="showWindow('followmod', this.href, 'get', 0);">&nbsp;</a>
	<!--{/if}-->
	
	</div>
			
				<div class="clear">
				</div>
				<div class="simgfoot">
					<div>
						<span class="simgdate"></span><span>$thread[dateline]</span>
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

	

					<!--{/if}-->
				<!--{else}-->
						<tbody class="bw0_all"><tr><th colspan="{if !$_GET['archiveid'] && $_G['forum']['ismoderator']}6{else}5{/if}"><p class="emp">{lang forum_nothreads}</p></th></tr></tbody>
					</table><!-- end of table "forum_G[fid]" branch 3/3 -->
				<!--{/if}-->
			<!--{if $_G['forum']['ismoderator'] && $_G['forum_threadcount']}-->
				<!--{template forum/topicadmin_modlayer}-->
			<!--{/if}-->
		</form>
	</div>
	<!--{hook/forumdisplay_threadlist_bottom}-->
</div>

<!--{if !IS_ROBOT}-->
	<div id="filter_special_menu" class="p_pop" style="display:none" change="location.href='forum.php?mod=forumdisplay&fid=$_G[fid]&filter='+$('filter_special').value">
		<ul>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang all}{lang forum_threads}</a></li>
			<!--{if $showpoll}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=poll$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_poll}</a></li><!--{/if}-->
			<!--{if $showtrade}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=trade$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_trade}</a></li><!--{/if}-->
			<!--{if $showreward}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_reward}</a></li><!--{/if}-->
			<!--{if $showactivity}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=activity$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_activity}</a></li><!--{/if}-->
			<!--{if $showdebate}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=debate$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang thread_debate}</a></li><!--{/if}-->
		</ul>
	</div>
	<div id="filter_reward_menu" class="p_pop" style="display:none" change="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype='+$('filter_reward').value">
		<ul>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang all_reward}</a></li>
			<!--{if $showpoll}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype=1">{lang rewarding}</a></li><!--{/if}-->
			<!--{if $showtrade}--><li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=specialtype&specialtype=reward$forumdisplayadd[specialtype]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}&rewardtype=2">{lang reward_solved}</a></li><!--{/if}-->
		</ul>
	</div>
	<div id="filter_dateline_menu" class="p_pop" style="display:none">
		<ul class="pop_moremenu">
			<li>{lang orderby}: 
				<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=author&orderby=dateline$forumdisplayadd[author]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['orderby'] == 'dateline'}class="xw1"{/if}>{lang list_post_time}</a><span class="pipe">|</span>
				<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=reply&orderby=replies$forumdisplayadd[reply]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['orderby'] == 'replies'}class="xw1"{/if}>{lang replies}</a><span class="pipe">|</span>
				<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=reply&orderby=views$forumdisplayadd[view]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['orderby'] == 'views'}class="xw1"{/if}>{lang views}</a>
			</li>
			<li>{lang time}: 
			<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if !$_GET['dateline']}class="xw1"{/if}>{lang all}{lang search_any_date}</a><span class="pipe">|</span>
				<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=86400$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['dateline'] == '86400'}class="xw1"{/if}>{lang last_1_days}</a><span class="pipe">|</span>
				<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=172800$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['dateline'] == '172800'}class="xw1"{/if}>{lang last_2_days}</a><span class="pipe">|</span>
				<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=604800$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['dateline'] == '604800'}class="xw1"{/if}>{lang list_one_week}</a><span class="pipe">|</span>
				<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=2592000$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['dateline'] == '2592000'}class="xw1"{/if}>{lang list_one_month}</a><span class="pipe">|</span>
				<a href="forum.php?mod=forumdisplay&fid=$_G[fid]&orderby={$_GET['orderby']}&filter=dateline&dateline=7948800$forumdisplayadd[dateline]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" {if $_GET['dateline'] == '7948800'}class="xw1"{/if}>{lang list_three_month}</a>
			</li>
		</ul>
	</div>
	<!--{if !$_G['setting']['closeforumorderby']}-->
	<div id="filter_orderby_menu" class="p_pop" style="display:none">
		<ul>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang list_default_sort}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=author&orderby=dateline$forumdisplayadd[author]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang list_post_time}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=reply&orderby=replies$forumdisplayadd[reply]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang replies}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=reply&orderby=views$forumdisplayadd[view]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang views}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=lastpost&orderby=lastpost$forumdisplayadd[lastpost]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang lastpost}</a></li>
			<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=heat&orderby=heats$forumdisplayadd[heat]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang order_heats}</a></li>
		<ul>
	</div>
	<!--{/if}-->
<!--{/if}-->


<!--{if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}-->

<div class="bm bw0 pgs cl">
	<span id="fd_page_bottom">$multipage</span>
	<span {if $_G[setting][visitedforums]}id="visitedforumstmp" onmouseover="$('visitedforums').id = 'visitedforumstmp';this.id = 'visitedforums';showMenu({'ctrlid':this.id,'pos':'21'})"{/if} class="pgb y"><a href="forum.php">{lang return_index}</a></span>
	<!--{if !$_GET['archiveid']}--><a href="javascript:;" id="newspecialtmp" onmouseover="$('newspecial').id = 'newspecialtmp';this.id = 'newspecial';showMenu({'ctrlid':this.id})"{if !$_G['forum']['allowspecialonly'] && empty($_G['forum']['picstyle']) && !$_G['forum']['threadsorts']['required']} onclick="showWindow('newthread', 'forum.php?mod=post&action=newthread&fid=$_G[fid]')"{else} onclick="location.href='forum.php?mod=post&action=newthread&fid=$_G[fid]';return false;"{/if} title="{lang send_posts}"><img src="{IMGDIR}/pn_post.png" alt="{lang send_posts}" /></a><!--{/if}-->
	<!--{hook/forumdisplay_postbutton_bottom}-->
</div>

<!--{else}-->

<p class="wp1024 iscwo_mb30">

<div class="fd_pages cl">$multipage</div>

</p>

<!--{/if}-->

<div style=" clear:both; height:16px;"></div>
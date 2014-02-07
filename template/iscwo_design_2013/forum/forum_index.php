<?php

if(!defined('IN_DISCUZ')) {exit('Access Denied');}

$perpage = 18;			//每页显示数
$forumids = array();	// $forumids = array(2,45); 指定调用的版块ID，如果调用全部，请用array()，如$forumids = array();
$orderby = 'dateline desc';	//排序方式
$threadlist = $post = array();
if (empty($forumids)){
	foreach(C::t('forum_forum')->fetch_all_forum() as $forum) {
		$forumids[] = $forum['fid'];
	}
}
if ($forumids){
	$filterarr = array('inforum' => $forumids, 'sticky' => 0, 'displayorder' => array(0, 1, 2, 3, 4));
	$count = C::t('forum_thread')->count_search($filterarr, 0);
	$page = intval($_G['page']) ? intval($_G['page']) : 1;
	$start = ($page-1)*$perpage;
	if($start<0) $start = 0;
	if ($count){
		require_once libfile('function/post');
		foreach(C::t('forum_thread')->fetch_all_search($filterarr, 0, $start, $perpage, $orderby, '') as $thread) {
			$thread['post'] = C::t('forum_post')->fetch_threadpost_by_tid_invisible($thread['tid']);
			$attachment = C::t('forum_attachment_n')->fetch_max_image(getattachtableid($tid), 'pid', $thread['post']['pid']);
			$thread['aid'] = $attachment['aid'];
			$threadlist[] = $thread;
		}
		$allpages = @ceil($count / $perpage);
		if ($page > 1){$lastpage = $page-1;}
		if ($page < $allpages){$nextpage = $page+1;}
	}
}


?>
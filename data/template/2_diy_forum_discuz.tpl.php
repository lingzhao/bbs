<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); include template('common/header_bbs'); ?><div id="banner">
<i id="focusBtl" class="focusBts"></i>
<i id="focusBtr" class="focusBts"></i>
<div id="focusAdv">
<ul id="focusPics">
<li><a href="" target="_blank"><img alt="" src="<?php echo IMGDIR;?>/images/1.jpg"/></a></li>
<li><a href="" target="_blank"><img alt="" src="<?php echo IMGDIR;?>/images/2.jpg"/></a></li>
<li><a href="" target="_blank"><img alt="" src="<?php echo IMGDIR;?>/images/3.jpg"/></a></li>
<li><a href="" target="_blank"><img alt="" src="<?php echo IMGDIR;?>/images/4.jpg"/></a></li>
<li><a href="" target="_blank"><img alt="" src="<?php echo IMGDIR;?>/images/5.jpg"/></a></li>
</ul>
</div>
</div>


<?php if($iscwo_header_nv==1) { ?>

<div id="iNeedBar">
    会员朋友可以随时在这里发布作品，我们将针对您的作品，进行选择加入优秀作品，点击右侧按钮，发布一个需求吧~
   <a title="发布需求" onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&amp;action=nav">发布需求</a>
</div>

<?php } if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><div style="margin-bottom: 1px;" class="hd cl">
    <h2 style="<?php if($cat['extra']['namecolor']) { ?>border-left: 8px <?php echo $cat['extra']['namecolor'];?> solid;<?php } ?>"><a href="<?php if(!empty($caturl)) { ?><?php echo $caturl;?><?php } else { ?>forum.php?gid=<?php echo $cat['fid'];?><?php } ?>" style="<?php if($cat['extra']['namecolor']) { ?>color: <?php echo $cat['extra']['namecolor'];?>;<?php } ?>" target="_blank"><?php echo $cat['name'];?></a></h2>
    <?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { $forum=$forumlist[$forumid];?><?php $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];?><div class="links cl">
        <a href="<?php echo $forumurl;?>"<?php if($forum['redirect']) { ?> target="_blank"<?php } if($forum['extra']['namecolor']) { ?> style="color: <?php echo $forum['extra']['namecolor'];?>;"<?php } ?> title="<?php echo $forum['todayposts'];?>话题"><?php echo $forum['name'];?></a>
</div>
  <?php } ?>
</div>

<?php } ?>


<div id="wp" class="wp">
<?php if(empty($gid)) { ?><?php echo adshow("text/wp a_t");?><?php } ?>

<style id="diy_style" type="text/css"></style>

<div class="wp1024">
<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
</div>

<div id="shoucang"><?php $list_count=0;?><?php if(is_array($threadlist)) foreach($threadlist as $thread) { $list_count+=1;?><div class="scitem scitemimage show"<?php if($list_count%3==0) { ?>style="margin-right: 0px;"<?php } ?>>
<?php if($thread['attachment'] == 2) { ?>
<a style="text-decoration:underline;color: #000" class="simage" href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" target="_blank"><?php $thread['coverpath'] = getthreadcover($thread['tid'], 1);?><img style="width: 290px;height:180px" src="<?php echo $thread['coverpath'];?>" onerror='this.src="template/iscwo_design_2013/img/nophoto.gif"' border='0' />
<div class="simagemask">
<p>
<?php echo $thread['subject'];?><?php echo messagecutstr(strip_tags($thread['post']['message']), 200);; ?></p>
</div>
</a>
<?php } else { ?>
<div class="simage">
<div class="simagemaskall">
<p>
<?php echo $thread['subject'];?><?php echo messagecutstr(strip_tags($thread['post']['message']), 200);; ?></p>
</div>
</div>
<?php } ?>
<div class="simgbody">
<div class="simgh">
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" class="simgtitle" target="_blank"><?php echo $thread['subject'];?></a><?php $syaidtable='forum_attachment_'.$thread[tid]%10;?><?php $fujian=DB::result_first("SELECT `aid` FROM ".DB::table($syaidtable)." WHERE tid=$thread[tid] AND isimage=0");?><?php if($fujian) { ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" class="sylist_fj" title="有附件"  hidefocus="true"></a> 
<?php } else { ?>
<a href="forum.php?mod=viewthread&amp;tid=<?php echo $thread['tid'];?>" class="sylist_blank" title="新窗口打开" hidefocus="true" target="_blank"></a> 
<?php } ?>


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

<script src="<?php echo $_G['setting']['jspath'];?>forum_viewthread.js?<?php echo VERHASH;?>" type="text/javascript"></script>



<p class="itemfoot">
<a href="" class="yyicon2 yy2dian"></a><span class="iftxt"><?php echo $thread['views'];?></span>
                <a href="" class="yyicon2 yy2dian"></a><span class="iftxt"><?php echo $thread['replies'];?></span>

 <?php if(($_G['group']['allowrecommend'] || !$_G['uid']) && $_G['setting']['recommendthread']['status']) { if(!empty($_G['setting']['recommendthread']['addtext'])) { ?>

<a id="recommend_add<?php echo $list_count;?>" class="yyicon2 yy2xiaoxin" hidefocus="true" href="forum.php?mod=misc&amp;action=recommend&amp;do=add&amp;tid=<?php echo $thread['tid'];?>&amp;hash=<?php echo FORMHASH;?>" <?php if($_G['uid']) { ?>onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate(<?php echo $_G['group']['allowrecommend'];?>)');return false;"<?php } else { ?> onclick="showWindow('login', this.href)"<?php } ?> onmouseover="this.title = $('recommendv_add<?php echo $list_count;?>').innerHTML + ' 人喜欢'"><span class="ftishi">添加到我喜欢</span></a>

<span class="iftxt"><?php echo $thread['recommend_add'];?></span>
<?php } ?>

      <?php } ?>
</p>
</div>
</div>
<div class="clear">
</div>
</div>


<?php } ?>
</div>
<div class="clear">
</div>


<div style="margin-top:20px;" class="wp1024 mbw cl">

<p class="<?php if($lastpage && $nextpage) { ?>fd_page2<?php } else { ?>fd_page1<?php } ?>">

<?php if($lastpage) { ?><a class="fd_last" href="forum.php?page=<?php echo $lastpage;?>"></a><?php } if($nextpage) { ?><a class="fd_next" href="forum.php?page=<?php echo $nextpage;?>"></a><?php } ?>

</p>

</div>

<div class="wp1024 iscwo_mb30">
<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
</div>


<?php if(empty($gid) && ($_G['cache']['forumlinks']['0'] || $_G['cache']['forumlinks']['1'] || $_G['cache']['forumlinks']['2'])) { ?>
<div class="wp1024 cl">
<div class="bm lk">
<div id="category_lk" class="bm_c ptm">
<?php if($_G['cache']['forumlinks']['0']) { ?>
<ul class="m mbn cl"><?php echo $_G['cache']['forumlinks']['0'];?></ul>
<?php } if($_G['cache']['forumlinks']['1']) { ?>
<div class="mbn cl">
<?php echo $_G['cache']['forumlinks']['1'];?>
</div>
<?php } if($_G['cache']['forumlinks']['2']) { ?>
<ul class="x mbm cl">
<?php echo $_G['cache']['forumlinks']['2'];?>
</ul>
<?php } ?>
</div>
</div>

</div>		
<?php } ?>


<div class="linkss">
<div class="follow">
<div class="follow_sina">
<a href="javascript:void((function(s,d,e){try{}catch(e){}var f='http://v.t.sina.com.cn/share/share.php?',u=d.location.href,p=['url=',e(u),'&title=',e(d.title),'&appkey=2924220432'].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));"></a>
</div>


<div class="follow_qq">
<a href="javascript:void(0)" onclick="{ var _t = encodeURI(document.title);  var _url = encodeURI(window.location); var _appkey = '333cf198acc94876a684d043a6b48e14'; var _site = encodeURI; var _pic = ''; var _u = 'http://v.t.qq.com/share/share.php?title='+_t+'&url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic; window.open( _u,'转播到腾讯微博', 'width=700, height=580, top=180, left=320, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );  };" ></a>
</div>

<div class="follow_renren">
            <script src="http://widget.renren.com/js/rrshare.js" type="text/javascript"></script>
            <a onclick="shareClick()" href="javascript:;" title="分享到人人网"></a>
            <script type="text/javascript">
                function shareClick() {
                    var rrShareParam = {
                        resourceUrl : '',	//分享的资源Url
                        srcUrl : '',	//分享的资源来源Url,默认为header中的Referer,如果分享失败可以调整此值为resourceUrl试试
                        pic : '',		//分享的主题图片Url
                        title : '<?php echo $navtitle;?>',		//分享的标题
                        description : '<?php echo $_G['setting']['bbname'];?>'	//分享的详细描述
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
summary:'<?php echo $_G['setting']['bbname'];?>',/*摘要(可选)*/
title:'<?php echo $navtitle;?>',/*分享标题(可选)*/
site:'<?php echo $_G['setting']['bbname'];?>',/*分享来源 如：腾讯网(可选)*/
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

<?php if($_G['group']['radminid'] == 1) { helper_manyou::checkupdate();?><?php } if(empty($_G['setting']['disfixednv_forumindex']) ) { ?><script>fixed_top_nv();</script><?php } include template('common/footer'); ?>
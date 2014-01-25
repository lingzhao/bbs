<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="ch">
<label class="wx">VIP 中心</label> 
</div> 
<div class="welcome">
<div class="info">
<img class="avatar" src="<?php echo $_G['setting']['ucenterurl'];?>/avatar.php?uid=<?php echo $_G['uid'];?>&size=small" alt="" />
        <p class="username">欢迎您！<br /><?php if($vip->is_vip()) { ?><font color="red"><?php echo $_G['member']['username'];?></font><?php } else { ?><?php echo $_G['member']['username'];?><?php } ?></p>
        <div class="vipico">
        	<?php if($vip->is_vip()) { ?>
        	<a href="vip.php?action=paycenter"><img src="source/plugin/dsu_kkvip/images/vip<?php echo $_G['vip']['level'];?>.gif" alt="<?php echo $_G['vip']['level_text'];?>" /></a>
<?php } else { ?>
<a href="vip.php?action=paycenter"><img src="source/plugin/dsu_kkvip/images/novip.png" alt="您还不是会员" /></a>
<?php } ?>
        </div>
</div>
<div class="content">
<?php if($vip->is_vip()) { ?>
<ul class="xl">
<li>VIP 成长值： <?php echo $_G['vip']['czz'];?></li>
<li>成长速度:&nbsp;<font color="red"><?php echo $vip->vars['vip_czzday'];?><?php if($_G['vip']['year_pay']) { ?>+<?php echo $vip->vars['vip_czz_year'];?><?php } ?></font>点/天</li>
<li>VIP 到期时间：<br><b><?php echo $_G['vip']['exptime_text'];?></b></li>
</ul>
<?php } else { ?>
<div class="msg">
<p>对不起，您还不是会员<br />暂时无法享受会员特权。</p>
<a href="vip.php?action=paycenter" class="btn"><span>开通会员</span></a>
</div>
<?php } ?>
</div>	
</div>
<div class="bn">
<ul class="xl cl">
<h2><font color="red">VIP导航</font></h2><?php if(is_array($vipmenu)) foreach($vipmenu as $order => $menu) { ?><li><a href="vip.php?action=<?php echo $menu['action'];?><?php if($menu['plugin']) { ?>&amp;plugin=<?php echo $menu['plugin'];?><?php } ?>"><?php echo $menu['name'];?></a></li>
<?php } ?>
</ul>
</div>
<!--支持本作品，请勿修改以下部分，谢谢-->
<div class="bm">
<p> <a href="http://bbs.lingsky.com/" target="_blank"><span style="font: bold 13px Arial; color: #fbb040;"></span><span style="font: bold 16px Verdana; color: #f15a29;">VIP Center</span></a><span style="font: normal 9px Verdana; display:block;">Ver <a href="http://bbs.lingsky.com/" style="font: bold 9px Verdana;">2.0</a> <a href="http://bbs.lingsky.com">lingsky.com</a>.</span></p>
</div></div> 
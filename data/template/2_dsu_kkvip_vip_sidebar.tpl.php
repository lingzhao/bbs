<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<div class="ch">
<label class="wx">VIP ����</label> 
</div> 
<div class="welcome">
<div class="info">
<img class="avatar" src="<?php echo $_G['setting']['ucenterurl'];?>/avatar.php?uid=<?php echo $_G['uid'];?>&size=small" alt="" />
        <p class="username">��ӭ����<br /><?php if($vip->is_vip()) { ?><font color="red"><?php echo $_G['member']['username'];?></font><?php } else { ?><?php echo $_G['member']['username'];?><?php } ?></p>
        <div class="vipico">
        	<?php if($vip->is_vip()) { ?>
        	<a href="vip.php?action=paycenter"><img src="source/plugin/dsu_kkvip/images/vip<?php echo $_G['vip']['level'];?>.gif" alt="<?php echo $_G['vip']['level_text'];?>" /></a>
<?php } else { ?>
<a href="vip.php?action=paycenter"><img src="source/plugin/dsu_kkvip/images/novip.png" alt="�������ǻ�Ա" /></a>
<?php } ?>
        </div>
</div>
<div class="content">
<?php if($vip->is_vip()) { ?>
<ul class="xl">
<li>VIP �ɳ�ֵ�� <?php echo $_G['vip']['czz'];?></li>
<li>�ɳ��ٶ�:&nbsp;<font color="red"><?php echo $vip->vars['vip_czzday'];?><?php if($_G['vip']['year_pay']) { ?>+<?php echo $vip->vars['vip_czz_year'];?><?php } ?></font>��/��</li>
<li>VIP ����ʱ�䣺<br><b><?php echo $_G['vip']['exptime_text'];?></b></li>
</ul>
<?php } else { ?>
<div class="msg">
<p>�Բ����������ǻ�Ա<br />��ʱ�޷����ܻ�Ա��Ȩ��</p>
<a href="vip.php?action=paycenter" class="btn"><span>��ͨ��Ա</span></a>
</div>
<?php } ?>
</div>	
</div>
<div class="bn">
<ul class="xl cl">
<h2><font color="red">VIP����</font></h2><?php if(is_array($vipmenu)) foreach($vipmenu as $order => $menu) { ?><li><a href="vip.php?action=<?php echo $menu['action'];?><?php if($menu['plugin']) { ?>&amp;plugin=<?php echo $menu['plugin'];?><?php } ?>"><?php echo $menu['name'];?></a></li>
<?php } ?>
</ul>
</div>
<!--֧�ֱ���Ʒ�������޸����²��֣�лл-->
<div class="bm">
<p> <a href="http://bbs.lingsky.com/" target="_blank"><span style="font: bold 13px Arial; color: #fbb040;"></span><span style="font: bold 16px Verdana; color: #f15a29;">VIP Center</span></a><span style="font: normal 9px Verdana; display:block;">Ver <a href="http://bbs.lingsky.com/" style="font: bold 9px Verdana;">2.0</a> <a href="http://bbs.lingsky.com">lingsky.com</a>.</span></p>
</div></div> 
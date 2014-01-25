<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); include template('dsu_kkvip:header'); if($vars['month']) { ?>
<div class="pay">
<form method="post" action="vip.php?action=payment&amp;plugin=kk_vip_payment" onsubmit="$('submit_btn').disabled='disabled';">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<h3><?php if(!$vip->is_vip()) { ?>&#24320;&#36890;&#20250;&#21592;<?php } else { ?>&#32493;&#36153;&#20250;&#21592;<?php } ?></h3>
<div class="tips">
<p>&#20351;&#29992; VIP &#20250;&#21592;&#26381;&#21153;&#24744;&#27599;&#26376;&#38656;&#25903;&#20184; <font color="red"><b>&#29616;&#37329; <?php echo $vars['cost'];?> &#20803;</b></font></p>
<p>&#19968;&#26086;&#24744;&#30830;&#35748;&#24320;&#36890;&#26381;&#21153;&#65292;&#30456;&#24212;&#37329;&#39069;&#23558;&#19981;&#33021;&#36820;&#36824;&#12290;&#35831;&#24744;&#24910;&#37325;&#36873;&#25321;&#65281;</p>
<p style="color:red;">&#25552;&#31034;&#65306;&#19968;&#27425;&#24615;&#24320;&#36890;12&#20010;&#26376;&#20197;&#19978;&#23558;&#25104;&#20026;&#12304;&#24180;&#36153;&#20250;&#21592;&#12305;</p>
</div>
<ul>
<li>
<span><?php if(!$vip->is_vip()) { ?>&#24320;&#36890;&#36134;&#21495;<?php } else { ?>&#32493;&#36153;&#36134;&#21495;<?php } ?></span><?php echo $_G['member']['username'];?>
</li>
<li>
<span><?php if(!$vip->is_vip()) { ?>&#24320;&#36890;&#26102;&#38271;<?php } else { ?>&#32493;&#36153;&#26102;&#38271;<?php } ?> (&#26376;):</span>
<input type="text" name="month" class="px" value="1"/>
</li>
</ul>
<div class="pay_btn">
<button class="pn" value="true" id="submit_btn" name="submit_btn" type="submit"><span><?php if(!$vip->is_vip()) { ?>&#24320;&#36890;&#20250;&#21592;<?php } else { ?>&#32493;&#36153;&#20250;&#21592;<?php } ?></span></button>
</div>
</form>
</div>
<?php } if($vars['plan']) { ?>
<div class="pay">
<form method="post" action="vip.php?action=payment&amp;plugin=kk_vip_payment">
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<h3>VIP &#22871;&#39184;</h3>
<div class="content">
<table class="dt">
<tr>
<th>&#36873;&#25321;</th>
<th>&#22871;&#39184;&#21517;&#31216;</th>
<th>&#22871;&#39184;&#20215;&#26684;</th>
<th>&#22871;&#39184;&#21253;&#21547; VIP &#26399;&#38480;</th>
</tr><?php if(is_array($plans)) foreach($plans as $plan) { ?><tr onclick="$('plan_<?php echo $plan['id'];?>').click()">
<td><input type="radio" name="planid" id="plan_<?php echo $plan['id'];?>" value="<?php echo $plan['id'];?>" /></td>
<td><img src="source/plugin/dsu_kkvip/images/vip.png" class="vm" />
<font color="red"><?php echo $plan['name'];?></font></td>
<td>RMB <?php echo $plan['money'];?></td>
<td><?php echo $plan['days'];?> &#22825;</td>
</tr>
<?php } ?>
</table>
<div style="padding: 10px 0 0;text-align: right;">
<button type="submit" style="background: url(source/plugin/kk_vip_payment/template/buynow.png); border: 0;width: 129px; height: 38px" class="vm"></button>
</div>
</div>
</form>
</div>
<?php } ?>
<div class="orights vipblock">
<h3 class="title">&#23562;&#36149;&#29305;&#26435;</h3>
<div class="content">
<?php if(!$vip->is_vip()) { ?>
<p>&#29616;&#22312;&#25104;&#20026;&#20250;&#21592;&#65292;&#24744;&#21487;&#20197;&#20139;&#21463;&#20197;&#19979;&#20248;&#24800;&#21644;&#29305;&#26435;&#65306;</p>
<?php } else { ?>
<p>&#23562;&#36149;&#30340;&#20250;&#21592;&#65292;&#24744;&#30340;&#25104;&#38271;&#38454;&#27573;&#20026;<img src="source/plugin/dsu_kkvip/images/vip<?php echo $_G['vip']['level'];?>.gif" alt="<?php echo $_G['vip']['level_text'];?>" />&#12290;&#22312;&#30446;&#21069;&#30340;&#25104;&#38271;&#38454;&#27573;&#65292;&#24744;&#20139;&#21463;&#20197;&#19979;&#30340;&#29305;&#26435;&#12290;&#24744;&#30340;&#20250;&#21592;&#21040;&#26399;&#26102;&#38388;&#65306; <?php echo $_G['vip']['exptime_text'];?></p>
<?php } ?>
<ul>
<?php echo $vip_intro;?>
</ul>
</div>
</div>
</div></div>
<div class="sd"><?php include template('dsu_kkvip:vip_sidebar'); ?></div></div><?php include template('common/footer'); ?>
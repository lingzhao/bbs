<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('header');?><?php include template('common/header'); ?><div id="pt" class="cl">
<div class="z">
<a href="./" class="nvhm" title="首页"><?php echo $_G['setting']['bbname'];?></a><em>&raquo;</em><a href="vip.php">VIP 中心</a>
</div>
</div>


<div id="ct" class="wp cl n">
<div class="mn">
    	<div class="bm">
<h1 class="mt"><font color="red">VIP 中心</font></h1>
<ul class="tb cl"><?php if(is_array($vipmenu)) foreach($vipmenu as $order => $menu) { ?><li<?php if($action==$menu['action']) { ?> class="a"<?php } ?>><a href="vip.php?action=<?php echo $menu['action'];?><?php if($menu['plugin']) { ?>&amp;plugin=<?php echo $menu['plugin'];?><?php } ?>"><?php echo $menu['name'];?></a></li>
<?php } ?>
</ul>
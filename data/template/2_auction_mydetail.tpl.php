<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('mydetail');?><?php include template('common/header'); ?><div class="cl">
<p class="avatar"><?php echo avatar($_G[uid],small);?></p>
<p class="a_hl">���ã�<?php echo $_G['username'];?></p>
<p class="a_hl"><?php if($mwait) { ?><a href="plugin.php?id=auction&amp;action=my&amp;filter=wait">�ȴ�����</a>��<em><?php echo $mwait;?></em><?php } ?></p>
</div>
<div id="user_details">
<p class="my_p"><a href="plugin.php?id=auction&amp;action=my&amp;filter=start">������</a>��<em><?php echo $mstart;?></em></p>
<p class="my_p"><a href="plugin.php?id=auction&amp;action=my&amp;filter=join">���뽻��</a>��<em><?php echo $mjoin;?></em></p>
<p class="my_p"><a href="plugin.php?id=auction&amp;action=my&amp;filter=got">���׳ɹ�</a>��<em><?php echo $mgot;?></em></p>
<p class="my_p"><a href="home.php?mod=spacecp&amp;ac=credit">�������</a>��<em><?php echo $mleft;?></em></p>
<p class="my_p" style="width:100%;text-align:center;height:32px;"><a href="home.php?mod=spacecp&amp;ac=credit&amp;op=buy"><img src="source/plugin/auction/images/charge.png" /></a></p>
</div><?php include template('common/footer'); ?>
<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('attachpay');?><?php include template('common/header'); if(empty($_GET['infloat'])) { ?>
<div id="pt" class="bm cl">
<div class="z"><a href="./" class="nvhm" title="��ҳ"><?php echo $_G['setting']['bbname'];?></a> <em>&rsaquo;</em> <?php echo $navigation;?></div>
</div>
<div id="ct" class="wp cl">
<div class="mn">
<div class="bm bw0">
<?php } ?>

<form id="attachpayform" method="post" autocomplete="off" action="forum.php?mod=misc&amp;action=attachpay&amp;tid=<?php echo $_G['tid'];?><?php if(!empty($_GET['infloat'])) { ?>&amp;paysubmit=yes&amp;infloat=yes" onsubmit="ajaxpost('attachpayform', 'return_<?php echo $_GET['handlekey'];?>', 'return_<?php echo $_GET['handlekey'];?>', 'onerror');return false;"<?php } else { ?>"<?php } ?>>
<div class="f_c">
<h3 class="flb">
<em id="return_<?php echo $_GET['handlekey'];?>">�������</em>
<span>
<?php if(!empty($_GET['infloat'])) { ?><a href="javascript:;" class="flbc" onclick="hideWindow('<?php echo $_GET['handlekey'];?>')" title="�ر�">�ر�</a><?php } ?>
</span>
</h3>
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="referer" value="<?php echo dreferer(); ?>" />
<input type="hidden" name="aid" value="<?php echo $aid;?>" />
<?php if(!empty($_GET['infloat'])) { ?><input type="hidden" name="handlekey" value="<?php echo $_GET['handlekey'];?>" /><?php } ?>
<div class="c">
<table class="list" cellspacing="0" cellpadding="0" style="width: 400px">
<tr>
<td>���</td>
<td><div style="overflow:hidden"><?php echo $truncatedsubject;?></div></td>
</tr>
<tr>
<td>�۸�(<?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?>)</td>
<td><?php echo $attach['price'];?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?></td>
</tr>
<?php if($status != 1) { ?>
<tr>
<td>���(<?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?>)</td>
<td><?php echo $balance;?> <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['unit'];?></td>
</tr>
<?php } if($status == 1) { ?>
<tr>
<td>&nbsp;</td>
<td>��Ǹ������ <?php echo $_G['setting']['extcredits'][$_G['setting']['creditstransextra']['1']]['title'];?> ���㣬�޷�����</td>
</tr>
<?php } elseif($status == 2) { ?>
<tr>
<td>&nbsp;</td>
<td>�����ڵ��û�������������, <a href="forum.php?mod=attachment&amp;aid=<?php echo $aidencode;?>" target="_blank">���ظ���</a></td>
</tr>
<?php } ?>
</table>
</div>
<div class="o pns">
<?php if($status != 1) { ?>
<button class="pn pnc" type="submit" name="paysubmit" value="true"><span><?php if($status == 0) { ?>�������<?php } else { ?>��ѹ���<?php } ?></span></button>
<?php } ?>
<button class="pn pnc" type="button" onclick="hideWindow('<?php echo $_GET['handlekey'];?>');"><span>�ر�</span></button>
</div>
</div>
</form>

<?php if(!empty($_GET['infloat'])) { ?>
<script type="text/javascript" reload="1">
function succeedhandle_<?php echo $_GET['handlekey'];?>(locationhref) {
ajaxget('forum.php?mod=viewthread&tid=<?php echo $attach['tid'];?>&viewpid=<?php echo $attach['pid'];?>', 'post_<?php echo $attach['pid'];?>');
hideWindow('<?php echo $_GET['handlekey'];?>');
showCreditPrompt();
}
</script>
<?php } if(empty($_GET['infloat'])) { ?>
</div>
</div>
</div>
<?php } include template('common/footer'); ?>
<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<table cellpadding="0" cellspacing="0" summary="post_attachbody" border="0" width="100%"><?php if(is_array($attachlist)) foreach($attachlist as $attach) { ?><tbody id="attach_<?php echo $attach['aid'];?>">
<tr>
<td class="attswf">
<p id="attach<?php echo $attach['aid'];?>">
<span><?php echo $attach['filetype'];?> <a href="javascript:;" class="xi2" id="attachname<?php echo $attach['aid'];?>" isimage="<?php if($attach['isimage']) { ?>1<?php } else { ?>0<?php } ?>" onclick="<?php if($attach['isimage']) { ?>insertAttachimgTag('<?php echo $attach['aid'];?>');hideMenu('attach_preview_<?php echo $attach['aid'];?>_menu')<?php } else { ?>insertAttachTag('<?php echo $attach['aid'];?>')<?php } ?>;doane(event);" title="<?php echo $attach['filenametitle'];?> <?php echo "\n";?>�ϴ�����: <?php echo $attach['dateline'];?> <?php echo "\n";?>�ļ���С: <?php echo $attach['attachsize'];?>" <?php if($attach['isimage']) { ?>onmouseout="hideMenu('attach_preview_<?php echo $attach['aid'];?>_menu');" onmouseover="showMenu({'ctrlid':this.id,'menuid':'attach_preview_<?php echo $attach['aid'];?>_menu','pos':'!'});"<?php } ?>><?php echo $attach['filename'];?></a></span>
<?php if($_G['setting']['allowattachurl']) { ?>
<a href="javascript:;" class="atturl" title="��Ӹ�����ַ" onclick="insertText('attach://<?php echo $attach['aid'];?>.<?php echo fileext($attach['filenametitle']); ?>');doane(event);"><img src="<?php echo IMGDIR;?>/attachurl.gif" /></a>
<?php if(($attachmcode = parseattachmedia($attach))) { ?><a href="javascript:;" class="atturl" title="��Ӹ���ý�岥�Ŵ���" onclick="insertText('<?php echo $attachmcode;?>');doane(event);"><img src="<?php echo IMGDIR;?>/attachmediacode.gif" /></a><?php } } if($attach['pid']) { ?>
<input type="hidden" name="attachupdate[<?php echo $attach['aid'];?>]" id="attachupdate<?php echo $attach['aid'];?>" size="2" />&nbsp;
<?php if(!empty($allowuploadnum)) { ?><a href="javascript:;" onclick="uploadWindow(function (aid, url, name){$('attachupdate<?php echo $attach['aid'];?>').value = aid;$('attachname<?php echo $attach['aid'];?>').title = '';$('attachname<?php echo $attach['aid'];?>').innerHTML = name;$('attachname<?php echo $attach['aid'];?>').onmouseover=null}, 'file');return false;">����</a></span><?php } } ?>
</p>
<span id="attachupdate<?php echo $attach['aid'];?>"></span>
<?php if($attach['isimage']) { ?>
<div id="attach_preview_<?php echo $attach['aid'];?>_menu" class="attach_preview" style="display:none"><img src="<?php echo getforumimg($attach['aid'], 1, 300, 300, 'fixnone'); ?>&ramdom=<?php echo random(5); ?>" id="image_<?php echo $attach['aid'];?>" cwidth="<?php if($attach['width'] < 300) { ?><?php echo $attach['width'];?><?php } else { ?>300<?php } ?>"/></div>
<?php } if($_GET['result'] == 'simple') { ?>
<input type="hidden" name="attachnew[<?php echo $attach['aid'];?>][description]" value="" />
<input type="hidden" name="attachnew[<?php echo $attach['aid'];?>][readperm]" value="" />
<input type="hidden" name="attachnew[<?php echo $attach['aid'];?>][price]" value="" />
<?php } ?>
</td>
<?php if($_GET['result'] != 'simple') { ?>
<td class="atds"><input type="text" name="attachnew[<?php echo $attach['aid'];?>][description]" class="px" value="<?php echo $attach['description'];?>" size="6" /></td>
<?php if($_G['group']['allowsetattachperm']) { ?>
<td class="attv">
<?php if($_G['cache']['groupreadaccess']) { ?>
<select class="ps" name="attachnew[<?php echo $attach['aid'];?>][readperm]" id="readperm" tabindex="1" style="width:90px">
<option value="">����</option><?php if(is_array($_G['cache']['groupreadaccess'])) foreach($_G['cache']['groupreadaccess'] as $val) { ?><option value="<?php echo $val['readaccess'];?>" title="�Ķ�Ȩ��: <?php echo $val['readaccess'];?>"<?php if($attach['readperm'] == $val['readaccess']) { ?> selected<?php } ?>><?php echo $val['grouptitle'];?></option>
<?php } ?>
<option value="255"<?php if($attach['readperm'] == 255) { ?> selected<?php } ?>>���Ȩ��</option>
</select>
<?php } ?>
</td>
<?php } if($_G['group']['maxprice']) { ?><td class="attpr"><input type="text" name="attachnew[<?php echo $attach['aid'];?>][price]" class="px" value="<?php echo $attach['price'];?>" size="1" /></td><?php } } ?>
<td class="attc"><a href="javascript:;" class="d" onclick="delAttach(<?php echo $attach['aid'];?>,<?php if(!$attach['pid']) { ?>1<?php } else { ?>0<?php } ?>);return false;" title="ɾ��">ɾ��</a></td>
</tr>
</tbody>
<?php } ?>
</table>
<?php if($_G['inajax']) { ?>
<script type="text/javascript" reload="1">
ATTACHNUM['attachunused'] += <?php echo count($attachlist); ?>;
updateattachnum('attach');
if($('attachlimitnotice')) {
ajaxget('forum.php?mod=ajax&action=updateattachlimit&fid=' + fid, 'attachlimitnotice');
}
</script>
<?php } ?>
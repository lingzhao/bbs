<?php
if(!defined('IN_DISCUZ') || !defined('IN_ADMINCP')) {
	exit('Access Denied');
}

$operation = $_G['gp_operation'];
if($operation == 'del') {
	$lid = intval($_G['gp_lid']);
	if($lid) {
		$upcid = DB::result_first("SELECT upid FROM ".DB::table('plugin_mini_download_chanel')." WHERE id='$lid'");
		if($upcid) {
			$subid = DB::result_first("SELECT subid FROM ".DB::table('plugin_mini_download_chanel')." WHERE id='$upcid'");
			$subarr = explode(",", $subid);
			foreach($subarr as $key=>$value) {
				if($value == $lid) {
					unset($subarr[$key]);
					break;
				}
			}
			DB::query("UPDATE ".DB::table('plugin_mini_download_chanel')." SET subid='".implode(",", $subarr)."' WHERE id='$upcid'");
		}
		DB::query("DELETE FROM ".DB::table('plugin_mini_download_chanel')." WHERE id='{$lid}'");
	}
	cpmsg(lang('plugin/mini_download','shanchuok'), 'action=plugins&operation=config&identifier=mini_download&pmod=class2', 'succeed');	
}

if(!submitcheck('editsubmit')) {	

?>
<script type="text/JavaScript">
var rowtypedata = [
	[[1,'<input type="text" class="txt" name="newlocalorder[]" value="0" />', 'td25'], [2, '<input name="newlocal[]" value="" size="20" type="text" class="txt" />']],
	[[1,'<input type="text" class="txt" name="newsuborder[{1}][]" value="0" />', 'td25'], [2, '<div class="board"><input name="newsublocal[{1}][]" value="" size="20" type="text" class="txt" /></div>']],
	
	];

function del(id) {
	if(confirm('<?php echo lang('plugin/mini_download', 'shanchufenlei');?>')) {
		window.location = '<?php echo ADMINSCRIPT;?>?action=plugins&operation=config&identifier=mini_download&pmod=class2&operation=del&lid='+id;
	} else {
		return false;
	}
}
</script>
<?php
	showformheader('plugins&operation=config&identifier=mini_download&pmod=class2');
	showtableheader('');
	showsubtitle(array(lang('plugin/mini_download', 'paixu'), lang('plugin/mini_download', 'fenleiname'),  lang('plugin/mini_download', 'caozuo')));

	$class2 = array();
	$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_chanel')." WHERE upid='0' ORDER BY displayorder ASC");
	while($row = DB::fetch($query)) {
		$class2[$row['id']] = $row;
		$squery = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_chanel')." WHERE upid='{$row['id']}' ORDER BY displayorder ASC");
		while($srow = DB::fetch($squery)) {
			$class2[$row['id']]['sublocal'][$srow['id']] = $srow;
		}
	}
	if($class2) {
		foreach($class2 as $id=>$local) {
			$show = '<tr class="hover"><td class="td25"><input type="text" class="txt" name="order['.$id.']" value="'.$local['displayorder'].'" /></td><td><div class="parentboard"><input type="text" class="txt" name="name['.$id.']" value="'.$local['subject'].'"></div></td>';
			if(!$local['subid']) {
				$show .= '<td><a  onclick="del('.$id.')" href="###">'.lang('plugin/mini_download', 'shanchu').'</td></tr>';
			} else {
				$show .= '<td>&nbsp;</td></tr>';
			}
			echo $show;
			if($local['sublocal']) {
				foreach($local['sublocal'] as $subid=>$slocal) {
					echo '<tr class="hover"><td class="td25"><input type="text" class="txt" name="order['.$subid.']" value="'.$slocal['displayorder'].'" /></td><td><div class="board"><input type="text" class="txt" name="name['.$subid.']" value="'.$slocal['subject'].'"></div></td><td><a  onclick="del('.$subid.')" href="###">'.lang('plugin/mini_download', 'shanchu').'</td></tr>';
				}
				
			}
			echo '<tr class="hover"><td class="td25">&nbsp;</td><td colspan="2" ><div class="lastboard"><a href="###" onclick="addrow(this, 1,'.$id.' )" class="addtr">'.lang('plugin/mini_download', 'tianjiaerjicaidan').'</a></div></td></tr>';
		}	
	}
	echo '<tr class="hover"><td class="td25">&nbsp;</td><td colspan="2" ><div><a href="###" onclick="addrow(this, 0)" class="addtr">'.lang('plugin/mini_download', 'tianjiafenlei').'</a></div></td></tr>';
	

	showsubmit('editsubmit');
	showtablefooter();
	showformfooter();

} else {
	$order = $_G['gp_order'];
	$name = $_G['gp_name'];
	$newsublocal = $_G['gp_newsublocal'];
	$newlocal = $_G['gp_newlocal'];
	$newsuborder = $_G['gp_newsuborder'];
	$newlocalorder = $_G['gp_newlocalorder'];
	
	if(is_array($order)) {
		foreach($order as $id=>$value) {
			DB::update('plugin_mini_download_chanel', array('displayorder' => intval($order[$id]), 'subject' => $name[$id]), "id='$id'");
		}
	}

	if(is_array($newlocal)) {
		foreach($newlocal as $key=>$name) {
			if(empty($name)) {
				continue;
			}
			$cid = DB::insert('plugin_mini_download_chanel', array('upid' => '0', 'subject' => $name, 'displayorder' => $newlocalorder[$key]), 1);
		}
	}

	if(is_array($newsublocal)) {
		foreach($newsublocal as $cid=>$sublocal) {
			$subtype = DB::result_first("SELECT subid FROM ".DB::table('plugin_mini_download_chanel')." WHERE id='{$cid}'");
			foreach($sublocal as $key=>$name) {
				$subid = DB::insert('plugin_mini_download_chanel', array('upid' => $cid, 'subject' => $name, 'displayorder' => $newsuborder[$cid][$key]), 1);
				$subtype .= $subtype ? ','.$subid : $subid;
			}
			DB::query("UPDATE ".DB::table('plugin_mini_download_chanel')." SET subid='{$subtype}' WHERE id='{$cid}'");
		}
	}

	cpmsg(lang('plugin/mini_download','xinxigengxinok'), 'action=plugins&operation=config&identifier=mini_download&pmod=class2', 'succeed');	
}

?>




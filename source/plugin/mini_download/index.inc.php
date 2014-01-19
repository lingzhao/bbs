<?php
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

require_once libfile('function/discuzcode');

global $_G;
if(!isset($_G['cache']['plugin'])){ loadcache('plugin'); }
@extract($_G['cache']['plugin']['mini_download']);
$config = $_G['cache']['plugin']['mini_download'];
$group = unserialize($config['GROUP']);
$listclass = parconfig($listclass);
$class1set=$config['class1set'];
$diyclassset=$config['diyclassset'];
$fabuset= unserialize($config['groups']);
$faburenset=$config['faburenset'];
$bannerset=$config['bannerset'];
$extcredit =$extcredit;
$uc = $_G['setting'][ucenterurl] ;
$sd = explode(",",$config['sd']);
$t_title = $config['t_title'];
$navtitle = $config['navtitle'];
$metadescription = $config['metadescription'];
$metakeywords = $config['metakeywords'];
$free = unserialize($config['free']);
$mianfeishijian = $config['freetime'];
$softpayset =$config['songpayset'];
$softpaytype =$config['softpaytype'];

//积分类型
foreach($_G['setting']['extcredits'] as $key => $value){
    $ext = 'extcredits'.$key;
    getuserprofile($ext);
    $mini_download['extcredits'][$key]['title'] = $value['title'];
    $mini_download['extcredits'][$key]['value'] = $_G['member'][$ext];
}
//基本判断
$config['ON'] ? '' : showmessage("{$config['NOTICE']}");  //判断是否开启系统
if(!in_array($_G['groupid'], $group) && $_G['uid']) exit(showmessage(lang('plugin/mini_download', 'suozaiyonghuzubunengshiyong'), "forum.php"));//判断用户组是否在被允许的范围内
if($config['LOGIN']){ !$_G['uid'] ? showmessage('not_loggedin', NULL, array(), array('login' => 1)) : ''; }  //判断是否登录

if(!$_G['gp_mod']){
	$where=$pageadd='';
	$cid = $tmpsea_c ? $tmpsea_c : intval($_G['gp_c']);
	if($cid){
		$wa="cid='$cid' AND";
		$pageadd="&c=$cid";
		$av_ds[$cid] = ' class="mini_download_hover"'; 
	}else{
		$av_ds[0] = ' class="mini_download_hover"';
	}

	$did = $tmpsea_d ? $tmpsea_d : intval($_G['gp_d']);
	if($did){ 
		$subids = DB::result_first("SELECT subid FROM ".DB::table('plugin_mini_download_chanel')." WHERE id='{$did}'");
		if($subids){
			$wb="did IN ($subids) AND"; 
		}else{
			$wb="did=$did AND"; 
		}
		$pageadds="&d=$did";
		$av_d[$did] = ' class="mini_download_hover"'; 
	}else{
		$av_d[0] = ' class="mini_download_hover"';
	}

	$nsd = $tmpsea_nsd ? $tmpsea_nsd : intval($_G['gp_nsd']);
	if($nsd){ 
		$wc="did='$nsd' AND"; 
		$pageaddx="&nsd=$nsd";
		$av_d[$nsd] = ' class="mini_download_hover"'; 
	}else{
		$av_d[0] = ' class="mini_download_hover"';
	}
		
	if($_G['gp_title']){
		$title=addslashes($_G['gp_title']);
		$where="title like '%$title%' AND";
		$titleenc=urlencode($title);
		$pageadd="&title=$titleenc";
	}
	$px='DESC';
	if($_G['gp_px']){ $px="ASC"; $pageadd="&px=d"; $a_hover[d] = ' class="mini_download_hover2"';  }
	if($_G['gp_ps']){ $ps="(total/voter) DESC,"; $pageadd="&ps=f"; $a_hover[f] = ' class="mini_download_hover2"';  }

	$types = trim($_G['gp_types']);	
	if ($types){
		}if($types==tj){
			$sa[] = "tuijian= '1'";
			$a_hover[$types] = ' class="mini_download_hover2"'; 
                }elseif($types==time){
			$sa[] = "display!='0'";
			$a_hover[$types] = ' class="mini_download_hover2"';		
	}
	if ($sa){ $wheres = "" . implode(" AND ", $sa) . " AND"; }


	$counts = DB::result_first("SELECT COUNT(*) FROM ".DB::table('plugin_mini_download_item')." WHERE $where $wheres $wa $wb $wc display!='0'");
	$pages = intval($_GET['page']);
	$pages = max($pages, 1);
	$starts = ($pages - 1) * $eacha;
	
	if($counts) {
		$sql = "SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE $where $wheres $wa $wb $wc display!='0' ORDER BY  $ps topid DESC,diynum ASC,dateline $px LIMIT $starts,$eacha";
		$query = DB::query($sql);
		$mythread = $mythreads = array();
		while($mythread = DB::fetch($query)){
			$mythread['dateline'] = gmdate('m-d', $mythread['dateline'] + $_G['setting']['timeoffset'] * 3600);
			$mythread['title'] = cutstr($mythread['title'], 60, '...');
			$mythreads[] = $mythread;
		}
	}

	$appurl=$_G['siteurl']."plugin.php?id=mini_download:index";
	$multis = "<div class='pages cl' style='padding:10px 0 0 0;'>".multi($counts, $eacha, $pages, $appurl.$pageadd.$pageadds.$pageaddx)."</div>";
	
	$countpl = DB::result_first("SELECT COUNT(*) FROM ".DB::table('plugin_mini_download_post')." WHERE display='1'");
	if($countpl) {
		$sql = "SELECT * FROM ".DB::table('plugin_mini_download_post')." WHERE display!='0' ORDER BY id DESC LIMIT 16";
		$query = DB::query($sql);
		$mypl = $mypls = array();
		while($mypl = DB::fetch($query)){
			$mypl['message'] = discuzcode($mypl['message'], 1, 0, 0, 0, 1, 1, 0, 0, 1);
			$mypls[] = $mypl;
		}
	}
	//人气
	$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE view>'0' AND display!='0' ORDER BY view DESC LIMIT 3");
	$renqi = $renqis = array();
	while($renqi = DB::fetch($query)){
		$renqis[] = $renqi;
	}

	$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE view>'0' AND display!='0' ORDER BY view DESC LIMIT 3,7");
	$renqi2 = $renqi2s = array();
	while($renqi2 = DB::fetch($query)){
		$renqi2s[] = $renqi2;
	}

	//下载
	$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE down!='0' AND display!='0' ORDER BY down DESC LIMIT 3");
	$xiazai = $xiazais = array();
	while($xiazai = DB::fetch($query)){
		$xiazais[] = $xiazai;
	}

	$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE down!='0' AND display!='0' ORDER BY down DESC LIMIT 3,7");
	$xiazai2 = $xiazai2s = array();
	while($xiazai2 = DB::fetch($query)){
		$xiazai2s[] = $xiazai2;
	}
	//横幅广告
	$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_banner')." WHERE id  ORDER BY id DESC");
	$banner = $banners = array();
	while($banner = DB::fetch($query)){
		$banners[] = $banner;
	}

        //二级
	$d = intval($_G['gp_d']);
	$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_chanel')." WHERE upid='0' ORDER BY displayorder ASC");
	while($row = DB::fetch($query)) {
		$local[$row['id']] = $row;
	}
	
	$subid = DB::result_first("SELECT subid FROM ".DB::table('plugin_mini_download_chanel')." WHERE id='{$d}'");
	if($subid) {
		$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_chanel')." WHERE id IN ({$subid}) ORDER BY displayorder ASC");
		while($ros = DB::fetch($query)) {
			$locals[$ros['id']] = $ros;
		}
	}

}elseif($_G['gp_mod']=='view'){
	$sid = intval($_G['gp_sid']);
	$sql = "SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id='$sid'";
	$query = DB::query($sql);
	$mythread = $mythreads = array();
	while($mythread = DB::fetch($query)){
		$mythread['dateline'] = gmdate('Y-m-d', $mythread['dateline'] + $_G['setting']['timeoffset'] * 3600);
		$mythread['info'] = discuzcode($mythread['info'], 1, 0, 0, 0, 1, 1, 0, 0, 1);
		$mythreads[] = $mythread;
                $navtitle = $mythread['title']." - ".$config['t_title'];
	}

	$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id='$sid' ORDER BY dateline DESC LIMIT 1");
	$query= DB::fetch($query);
	$aver = $query['total']/$query['voter'];
	$aver = round($aver,1)*10;
	
	$count = DB::result_first("SELECT COUNT(*) FROM ".DB::table('plugin_mini_download_post')." WHERE sid='$sid' AND display!='0'");
	$page = intval($_GET['page']);
	$page = max($page, 1);
	$start = ($page - 1) * $each;
	
	if($count) {
		$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_post')." WHERE sid='$sid' AND display!='0' ORDER BY dateline DESC LIMIT $start,$each");
		$pl = $pls = array();
		while($pl = DB::fetch($query)) {
			$pl['dateline'] = gmdate('Y-m-d H:i', $pl['dateline'] + $_G['setting']['timeoffset'] * 3600);
			$pls[] = $pl;
		}
	}
	

	//推荐
	$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE tuijian='1' AND display!='0' ORDER BY id DESC LIMIT 5");
	$sj = $sjs = array();
	while($sj = DB::fetch($query)){
		$sjs[] = $sj;

	}
	

	//排行                                                                   
	$query = DB::query("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE down!='0' AND display!='0' ORDER BY down DESC LIMIT 10");
	$renqi = $renqis = array();
	while($renqi = DB::fetch($query)){
		$renqis[] = $renqi;
	}



//浏览计数
$view = DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE `id` = '$sid'");
$newview = $view['view'] + 1;
DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET `view` = '$newview' WHERE `id` = '$sid'");	
	
//下载
 $downurl = array();
  $fetch = DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id = '$sid' and display!='0'");
  !$fetch ? showmessage(lang('plugin/mini_download', 'dangqianyemianbucunzai'),"plugin.php?id=mini_download:index") : '';
  $url = $fetch['downurl'];
  $url = explode("\n",$url);
  $deb = explode("\n",$fetch['downtitle']);


}elseif($_G['gp_mod']=='pay'||$_G['gp_mod']=='paylistview'){
	$sid = intval($_G['gp_sid']);
	$sql = "SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id='$sid'";
	$query = DB::query($sql);
	$mythread = $mythreads = array();
	while($mythread = DB::fetch($query)){
		$mythreads[] = $mythread;
                $navtitle = $mythread['title']." - ".$config['t_title'];
	}
 $downurl = array();
  $fetch = DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id = '$sid' and display!='0'");
  !$fetch ? showmessage(lang('plugin/mini_download', 'dangqianyemianbucunzai'),"plugin.php?id=mini_download:index") : '';
  $url = $fetch['downurl'];
  $url = explode("\n",$url);
  $deb = explode("\n",$fetch['downtitle']);


}elseif($_G['gp_mod']=='freedown'){
	$sid = intval($_G['gp_sid']);
	$sql = "SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id='$sid'";
	$query = DB::query($sql);
	$mythread = $mythreads = array();
	while($mythread = DB::fetch($query)){
		$mythread['dateline'] = gmdate('Y-m-d', $mythread['dateline'] + $_G['setting']['timeoffset'] * 3600);
		$mythread['info'] = discuzcode($mythread['info'], 1, 0, 0, 0, 1, 1, 0, 0, 1);
		$mythreads[] = $mythread;
                $navtitle = $mythread['title']." - ".$config['t_title'];
	}
//下载
 $downurl = array();
  $fetch = DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id = '$sid' and display!='0'");
  !$fetch ? showmessage(lang('plugin/mini_download', 'dangqianyemianbucunzai'),"plugin.php?id=mini_download:index") : '';
  $url = $fetch['downurl'];
  $url = explode("\n",$url);
  $deb = explode("\n",$fetch['downtitle']);

$down = DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE `id` = '$sid'");
$newdown = $down['down'] + 1;
DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET `down` = '$newdown' WHERE `id` = '$sid'");


}elseif($_G['gp_mod']=='download'){	
	$sid = intval($_G['gp_sid']);
	$sql = "SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id='$sid'";
	$query = DB::query($sql);
	$mythread = $mythreads = array();
	while($mythread = DB::fetch($query)){
		$mythread['dateline'] = gmdate('Y-m-d', $mythread['dateline'] + $_G['setting']['timeoffset'] * 3600);
		$mythread['info'] = discuzcode($mythread['info'], 1, 0, 0, 0, 1, 1, 0, 0, 1);
		$mythreads[] = $mythread;
                $navtitle = $mythread['title']." - ".$config['t_title'];
	}
//下载
 $downurl = array();
  $fetch = DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE id = '$sid' and display!='0'");
  !$fetch ? showmessage(lang('plugin/mini_download', 'dangqianyemianbucunzai'),"plugin.php?id=mini_download:index") : '';
  $url = $fetch['downurl'];
  $url = explode("\n",$url);
  $deb = explode("\n",$fetch['downtitle']);


//积分
$price = DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE `id` = '$sid'");
$money=$price['price'];
$softpayshuliang = $money;

if(in_array($_G['groupid'], $free)||$_COOKIE['free']==$sid){}
  else{
    if($mini_download['extcredits'][$softpaytype]['value']<$softpayshuliang){
      $tixing= lang('plugin/mini_download', 'xiaohaotishi').$softpayshuliang.$mini_download['extcredits'][$softpaytype]['title'].lang('plugin/mini_download', 'wufaliulan')."";
	showmessage(lang('plugin/mini_download', $tixing));
    }else{
	updatemembercount($_G['uid'], array($softpaytype => -$softpayshuliang));
	$freetime = $config['freetime']*3600;
	setcookie("free",$sid,time()+$freetime);
//支付数
$pay = DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE `id` = '$sid'");
$newpay = $pay['pay'] + 1;
DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET `pay` = '$newpay' WHERE `id` = '$sid'");

$down = DB::fetch_first("SELECT * FROM ".DB::table('plugin_mini_download_item')." WHERE `id` = '$sid'");
$newdown = $down['down'] + 1;
DB::query("UPDATE ".DB::table('plugin_mini_download_item')." SET `down` = '$newdown' WHERE `id` = '$sid'");

   }	
 } 


}


if(submitcheck('applysubmit')){	
	
	if(!$_G['uid']){
		showmessage(lang('plugin/mini_download', 'youkewuquanxianliuyan'), array(), array('alert' => right));
	}else{
		if(empty($_G['gp_message'])){
						showmessage(lang('plugin/mini_download', 'neirongbunengweikong'), dreferer());
					}else{
					
					$_G['gp_sid'] = intval($_G['gp_sid']);
					$_G['gp_uid'] = intval($_G['uid']);
					$_G['gp_author'] = addslashes($_G['username']);
					$_G['gp_message'] = addslashes($_G['gp_message']);
					$_G['gp_voter'] = 1;
					$_G['gp_total'] = intval($_G['gp_total']);
					$_G['gp_display'] = intval($display) == 1 ? 1 : 0; 
					DB::insert('plugin_mini_download_post',array('id' => '','sid' => $_G['gp_sid'],'uid' => $_G['gp_uid'],'author' => $_G['gp_author'],'message' => $_G['gp_message'],'voter' => $_G['gp_voter'],'total' => $_G['gp_total'],'display' => $_G['gp_display'],'dateline' => time()));
$pinglunaddshuliang = $config['pinglunaddshuliang'];
$pinglunextcredita =$config['pinglunextcredita'];
updatemembercount($_G['uid'], array($pinglunextcredita => +$pinglunaddshuliang));
			}
			
			if(!empty($_G['gp_total'])){
					$_G['gp_sid'] = intval($_G['gp_sid']);
					$_G['gp_title'] = addslashes($_G['gp_title']);
					$sql = "SELECT sum(voter) AS 'voters' , sum(total) AS 'totals' FROM ".DB::table('plugin_mini_download_post')." WHERE sid='".$_G['gp_sid']."'";
					$result = DB::query($sql);
					$row = DB::fetch($result);  

					if($_POST){
						$sid = intval($_G['gp_sid']);
						$voter = intval($row['voters']);
						$total = intval($row['totals']);
						DB::update('plugin_mini_download_item', array('voter' => $voter, 'total' => $total), "id='$sid'");
					}
			}
			
			if(intval($display) == 0){
					showmessage(lang('plugin/mini_download', 'dengdaishenhetishi'), 'plugin.php?id=mini_download:index&mod=view&sid='.$_G['gp_sid'].'', array(), array('alert' => right));
				}else{
					showmessage(lang('plugin/mini_download', 'pinglunok'), 'plugin.php?id=mini_download:index&mod=view&sid='.$_G['gp_sid'].'', array(), array('alert' => right));
			}
	}
	
}

function classnum($cid){
	return DB::result_first("SELECT count(*) FROM ".DB::table('plugin_mini_download_item')." WHERE `cid` ='$cid' AND display!=0");
}


function parconfig($str){
	$return = array();
	$array = explode("\n",str_replace("\r","",$str));
	foreach ($array as $v){
	   $t = explode("=",$v);
	   $t[0] = trim($t[0]);
	   $return[$t[0]] = $t[1];
	}
	return $return;
} 


include template($identifier.':index');

?>

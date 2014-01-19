<?php
!defined('IN_ADMINCP') && exit('Access Denied');
if($_GET['clean']==FORMHASH){
$time = TIMESTAMP - 86400*7;
DB::query('DELETE FROM '.DB::table('kk_vip_payment_log')." WHERE status='0' AND timestamp<'{$time}'");
cpmsg('&#28165;&#29702;&#23436;&#25104;', 'action=plugins&operation=config&identifier=kk_vip_payment&pmod=log', 'succeed');
}elseif(submitcheck('bd', true)){
$id = intval($_GET['bd']);
$trade_info = DB::fetch_first('SELECT * FROM '.DB::table('kk_vip_payment_log')." WHERE id='{$id}'");
if(!$trade_info['status']){
include_once libfile('class/vip');
$vip = $vip ? $vip : new vip();
if($trade_info['plan_id']){
$plan_info = DB::fetch_first('SELECT * FROM '.DB::table('kk_vip_payment_plan')." WHERE id='{$trade_info[plan_id]}'");
$vip->pay_vip($trade_info['uid'], $plan_info['days']);
}else{
$vip->pay_vip($trade_info['uid'], $trade_info['month']*30);
}
DB::query('UPDATE '.DB::table('kk_vip_payment_log')." SET status=1 WHERE id='{$id}'");
}
cpmsg('&#34917;&#21333;&#25104;&#21151;', 'action=plugins&operation=config&identifier=kk_vip_payment&pmod=log', 'succeed');
}
showtableheader('');
showsubtitle(explode('|', '&#29992;&#25143;&#21517;|&#35746;&#21333;&#32534;&#21495;|&#37329;&#39069;|&#36141;&#20080;&#26102;&#38388;(&#26376;) / VIP&#22871;&#39184;&#31867;&#22411;|&#25552;&#20132;&#26102;&#38388;|&#29366;&#24577;'));
$page=$_GET['page'] ? intval($_GET['page']) : 1;
$start=($page-1)*10;
$query=DB::query('SELECT l.*, m.username, p.name FROM '.DB::table('kk_vip_payment_log').' l LEFT JOIN '.DB::table('common_member').' m ON m.uid=l.uid LEFT JOIN '.DB::table('kk_vip_payment_plan')." p ON p.id = l.plan_id ORDER BY l.timestamp DESC LIMIT {$start},10");
while($row=DB::fetch($query)){
if($row['status']=='1'){
$row['status']='&#29992;&#25143;&#24050;&#20184;&#27454;&#24320;&#36890;';
}elseif($row['status']=='-1'){
$row['status']='&#24050;&#32463;&#20184;&#27454;&#24320;&#36890;&#65292;&#20294;&#26410;&#30830;&#35748;&#25910;&#36135;';
}else{
$row['status']='&#29992;&#25143;&#24050;&#19979;&#35746;&#21333; &#23578;&#26410;&#20184;&#27454; (<a href="?action=plugins&operation=config&identifier=kk_vip_payment&pmod=log&bd='.$row['id'].'&formhash='.FORMHASH.'">&#34917;&#21333;</a>)';
}
showtablerow('', '', array("<a href=\"home.php?mod=space&uid={$row[uid]}&do=profile\" target=\"_blank\">{$row[username]}</a>", $row['trade_no'], $row['money'] ? $row['money'] : '-', $row['plan_id'] ? "Plan: {$row[name]}" : "{$row[month]} Month(s)" , dgmdate($row['timestamp'], 'u'), $row['status']));
}
showtablefooter();
$amount=DB::result_first('SELECT COUNT(*) FROM '.DB::table('kk_vip_payment_log'));
echo multi($amount, 10, $page, 'admin.php?action=plugins&operation=config&identifier=kk_vip_payment&pmod=log', 0, 10, 1, 1);
echo '<div class="pg"><a href="admin.php?action=plugins&operation=config&identifier=kk_vip_payment&pmod=log&clean='.FORMHASH.'">&#19968;&#38190;&#28165;&#29702; 7 &#22825;&#26410;&#20184;&#27454;&#35746;&#21333;</a></div>';
?>
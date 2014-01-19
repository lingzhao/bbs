<?php
if(!defined('IN_ADMINCP')) exit('Only For Discuz! Admin Control Panel');

if(submitcheck('submit')){
$del_arr=(array)$_GET['delete'];
$new_arr=(array)$_GET['newname'];
$newdisplayorder_arr=(array)$_GET['newdisplayorder'];
$newmoney_arr=(array)$_GET['newmoney'];
$newdays_arr=(array)$_GET['newdays'];
if($del_arr){
foreach ($_GET['delete'] as $item){
if($item){
$item = daddslashes($item);
$del_ids.=$del_ids ? ",'{$item}'" : "'{$item}'";
}
}
if($del_ids){
DB::delete('kk_vip_payment_plan', "id IN ({$del_ids})");
}
}
if($new_arr){
foreach ($new_arr as $key=>$item){
if($item){
$temp_arr = array(
'name' => daddslashes($item),
'displayorder' => daddslashes($newdisplayorder_arr[$key]),
'money' => number_format($newmoney_arr[$key], 2, '.', ''),
'days' => intval($newdays_arr[$key]),
);
DB::insert('kk_vip_payment_plan', $temp_arr);
}
}
}
$order_arr=(array)$_GET['order'];
if($order_arr){
foreach ($order_arr as $id=>$order){
if($id) DB::update('kk_vip_payment_plan', array('displayorder'=>daddslashes($order)), array('id'=>intval($id)));
}
}
cpmsg('&#22871;&#39184;&#35774;&#32622;&#32534;&#36753;&#25104;&#21151;&#65281;','action=plugins&operation=config&identifier=kk_vip_payment&pmod=plan','succeed');
}

echo '<script type="text/JavaScript">
var rowtypedata = [[
[1,"", "td25"],
[1,\'<input type="text" class="txt" name="newdisplayorder[]" value="0" size="3">\', "td25"],
[1,\'<input type="text" class="txt" name="newname[]" size="3">\', "td26"],
[1,\'<input type="text" class="txt" name="newmoney[]" size="3">\', "td26"],
[1,\'<input type="text" class="txt" name="newdays[]" size="3">\', "td26"],
]]
</script>';

showformheader('plugins&operation=config&identifier=kk_vip_payment&pmod=plan');
showtableheader('');
showsubtitle(explode('|', '|&#25490;&#24207;|&#22871;&#39184;&#21517;|&#22871;&#39184;&#20215;&#26684; (RMB)|&#21253;&#21547;&#22825;&#25968;'));
$page=$_GET['page'] ? intval($_GET['page']) : 1;
$start=($page-1)*10;
$query=DB::query('SELECT * FROM '.DB::table('kk_vip_payment_plan')." ORDER BY displayorder LIMIT {$start},10");
while($result=DB::fetch($query)){
showtablerow('', array('class="td25"', 'class="td25"', '', 'class="td26"', 'class="td28"'), array(
'<input type="checkbox" class="checkbox" name="delete[]" value="'.$result['id'].'" />',
'<input type="text" class="txt" name="order['.$result['id'].']" value="'.$result['displayorder'].'" />',
$result['name'],
$result['money'],
$result['days'],
));
}
echo '<tr><td></td><td colspan="4"><div><a href="#addrow" name="addrow" onclick="addrow(this, 0)" class="addtr">&#28155;&#21152;</a></div></td></tr>';
$amount=DB::result_first('SELECT COUNT(*) FROM '.DB::table('kk_vip_payment_plan'));
$multi=multi($amount, 10, $page, 'admin.php?action=plugins&operation=config&identifier=kk_vip_payment&pmod=plan', 0, 10, 1, 1);
showsubmit('submit', 'submit', 'del' , '', $multi);
showtablefooter();
showformfooter();
<?php
include "../../mainfile.php";
include "../../header.php";
include "./connect_edu_ex2.php";
//$id = $_SESSION['id'];
$id = $_GET["id"];
$sid = $_POST["sid"];

$a190 = $_POST["pass"];	//縣市審核狀態
$a191 = $_POST['a191'];	//縣市審核意見

$a195 = $_POST['a195'];	//子項目一總額
$a196 = $_POST['a196'];

$a198 = $_POST['a198'];	//子項目二總額
$a199 = $_POST['a199'];

$a192 = $a195 + $a198;	//本項目總額
$a193 = $a195 + $a198;	//本項目經常門(因補一皆為經常門)

if($a190=='2'){
	$a192=0;
	$a193=0;
	$a194=0;
	$a195=0;
	$a196=0;
	$a197=0;
	$a198=0;
	$a199=0;
	$a200=0;
	$a201=0;
	$a202=0;
	$a203=0;
	$a204=0;
	$a205=0;
	$a206=0;
	$a207=0;
	$a208=0;
	$a209=0;
}

//$allowance=$_POST["allowance"];

$a030 = $_POST['a030'];	//科目
$a031 = $_POST['a031'];	//類別

$a040 = $_POST['a040'];
$a041 = $_POST['a041'];

$a050 = $_POST['a050'];
$a051 = $_POST['a051'];

$a060 = $_POST['a060'];
$a061 = $_POST['a061'];

$a070 = $_POST['a070'];
$a071 = $_POST['a071'];

$a080 = $_POST['a080'];
$a081 = $_POST['a081'];

$a090 = $_POST['a090'];
$a091 = $_POST['a091'];

$a100 = $_POST['a100'];
$a101 = $_POST['a101'];
$a102 = $_POST['a102'];

$a110 = $_POST['a110'];
$a111 = $_POST['a111'];

$a120 = $_POST['a120'];
$a121 = $_POST['a121'];
$a122 = $_POST['a122'];

$a210 = $_POST['a210'];	//複審經費表資料
$a211 = $_POST['a211'];
$a212 = $_POST['a212'];
$a213 = $_POST['a213'];
$a214 = $_POST['a214'];
$a215 = $_POST['a215'];
$a216 = $_POST['a216'];
$a217 = $_POST['a217'];
$a218 = $_POST['a218'];
$a219 = $_POST['a219'];
$a220 = $_POST['a220'];
$a221 = $_POST['a221'];
$a222 = $_POST['a222'];
$a223 = $_POST['a223'];
$a224 = $_POST['a224'];
$a225 = $_POST['a225'];
$a226 = $_POST['a226'];
$a227 = $_POST['a227'];
$a228 = $_POST['a228'];
$a229 = $_POST['a229'];
$a230 = $_POST['a230'];
$a231 = $_POST['a231'];
$a232 = $_POST['a232'];
$a233 = $_POST['a233'];
$a234 = $_POST['a234'];
$a235 = $_POST['a235'];
$a236 = $_POST['a236'];
$a237 = $_POST['a237'];
$a238 = $_POST['a238'];
$a239 = $_POST['a239'];
$a240 = $_POST['a240'];
$a241 = $_POST['a241'];
$a242 = $_POST['a242'];
$a243 = $_POST['a243'];
$a244 = $_POST['a244'];
$a245 = $_POST['a245'];
$a246 = $_POST['a246'];
$a247 = $_POST['a247'];
$a248 = $_POST['a248'];
$a249 = $_POST['a249'];

if($a190=='2'){
	$a210=0;
	$a214=0;
	$a218=0;
	$a222=0;
	$a226=0;
	$a230=0;
	$a234=0;
	$a238=0;
	$a242=0;
	$a246=0;
}

//補一雜支開關在 a102
$sql = "update 
102allowance1 set 
a190='$a190', 
a191='$a191', 
a192='$a192', 
a193='$a193', 
a194='$a194', 
a195='$a195', 
a196='$a196', 
a197='$a197', 
a198='$a198', 
a199='$a199', 
a200='$a200', 
a201='$a201', 
a202='$a202', 
a203='$a203', 
a204='$a204', 
a205='$a205', 
a206='$a206', 
a207='$a207', 
a208='$a208', 
a209='$a209', 

a030='$a030', 
a031='$a031', 
a040='$a040', 
a041='$a041', 
a050='$a050', 
a051='$a051', 
a060='$a060', 
a061='$a061', 
a070='$a070', 
a071='$a071', 
a080='$a080', 
a081='$a081', 
a090='$a090', 
a091='$a091', 
a100='$a100', 
a101='$a101', 
a102='$a102', 
a110='$a110', 
a111='$a111', 
a120='$a120', 
a121='$a121', 
a122='$a122', 

a210='$a210', 
a211='$a211', 
a212='$a212', 
a213='$a213', 
a214='$a214', 
a215='$a215', 
a216='$a216', 
a217='$a217', 
a218='$a218', 
a219='$a219', 
a220='$a220', 
a221='$a221', 
a222='$a222', 
a223='$a223', 
a224='$a224', 
a225='$a225', 
a226='$a226', 
a227='$a227', 
a228='$a228', 
a229='$a229', 
a230='$a230', 
a231='$a231', 
a232='$a232', 
a233='$a233', 
a234='$a234', 
a235='$a235', 
a236='$a236', 
a237='$a237', 
a238='$a238', 
a239='$a239', 
a240='$a240', 
a241='$a241', 
a242='$a242', 
a243='$a243', 
a244='$a244', 
a245='$a245', 
a246='$a246', 
a247='$a247', 
a248='$a248', 
a249='$a249',
a252='$email',
a253='$username' 
where account='$id'";

if(mysql_query($sql)){
	echo '新增成功!';
	//echo '<meta http-equiv=REFRESH CONTENT=2;url=a1_examine_table.php>';
	//改由最後面的JavaScript關閉此視窗
}else{
	echo '新增失敗';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=../../user.php?op=logout>';
}
?>
<?
//include "../../footer.php";
?>
<script language="JavaScript">
setTimeout( "window.close();", 1000 );
</script>
<?php
include "../../mainfile.php";
include "../../header.php";
include "./connect.php";
//include "./checkdate.php";
//$date = date ("Y-m-d" , mktime(date('Y-m-d')));
$date = date("Y-m-d");
echo "【今天日期：";
echo $date."】";
$school = $_GET['school'];
?>
<? //教育部核定金額
$sql = "select  *  from 100school_final where account like '$school'";
$result = mysql_query($sql);
while($row = mysql_fetch_row($result)){
	$schoolname = $row[0]." ".$row[2].$row[4].$row[5];
	$fn_a1 = $row[15];
	$fn_a2 = $row[25];
	$fn_a3 = $row[28];
	$fn_a3_1 = $row[26];
	$fn_a3_2 = $row[27];
	$fn_a4 = $row[39];
	$fn_a4_1 = $row[33];
	$fn_a4_1_1c1 = $row[29];
	$fn_a4_1_1 = $row[30];
	$fn_a4_1_2c1 = $row[31];
	$fn_a4_1_2 = $row[32];
	$fn_a4_2 = $row[38];
	$fn_a4_2_1c1 = $row[34];
	$fn_a4_2_1 = $row[35];
	$fn_a4_2_2c1 = $row[36];
	$fn_a4_2_2 = $row[37];
	$fn_a5 = $row[42];
	$fn_a6 = $row[47];
	$fn_a6_1c1 = $row[43]; //設備數
	$fn_a6_1 = $row[44]; //設備
	$fn_a6_2c1 = $row[45]; //其他數
	$fn_a6_2 = $row[46]; //其他
	$fn_a7_1c1 = $row[48]; //租車數
	$fn_a7_1 = $row[49]; //租車
	$fn_a7_2c1 = $row[50]; //交通費數
	$fn_a7_2 = $row[51]; //交通費
	$fn_a7_3c1 = $row[52]; //交通車數
	$fn_a7_3 = $row[53]; //交通車
	$fn_a7 = $row[54];
	$fn_a8_1_1c1 = $row[55]; //修建數
	$fn_a8_1_1 = $row[56]; //修建
	$fn_a8_1_2c1 = $row[57]; //設備數
	$fn_a8_1_2 = $row[58]; //設備
	$fn_a8 = $row[67];
	$fn_total = $fn_a1 + $fn_a2 + $fn_a3 + $fn_a4 + $fn_a5 + $fn_a6 + $fn_a7 + $fn_a8;
}?>
<? //學校執行金額
$sql = "select  *  from 100school_effect where account like '$school'";
$result = mysql_query($sql);
while($row = mysql_fetch_row($result)){
	$ef_a1_1 = $row[11];
	$ef_a2_1 = $row[26];
	$ef_a3_1 = $row[41];
	$ef_a4_1 = $row[56];
	$ef_a5_1 = $row[71];
	$ef_a6_1 = $row[86];
	$ef_a7_1 = $row[101];
	$ef_a8_1 = $row[116];
	$ef_total = $ef_a1_1 + $ef_a2_1 + $ef_a3_1 + $ef_a4_1 + $ef_a5_1 + $ef_a6_1 + $ef_a7_1 + $ef_a8_1;
	$ef_1 = $row[116];
	$ef_2 = $row[117];
	$ef_3 = $row[118];
	$ef_4 = $row[119];
	$ef_5 = $row[120];
	$ef_6 = $row[121];
	$ef_7 = $row[122];
	$ef_8 = $row[123];
	$ef_9 = $row[124];
	$ef_10 = $row[125];
	$ef_11 = $row[126];
	$ef_12 = $row[127];
	$ef_13 = $row[128];
	$ef_14 = $row[129];
	$ef_15 = $row[130];
}?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<p>
<font color="blue"><strong>100年度執行成果填報  <? echo $schoolname; ?></strong></font><br />
<strong>項目：八、整修學校社區化活動場所  </strong><a href="/edu/modules/xSchoolForm/download/allowance-08.htm" target="_blank">(補助項目說明)</a>

<div>
<?
//讀取上傳檔案資料
$sql = "select  *  from   100school_upload_name where account like '$school'";
$result = mysql_query($sql);
while($row = mysql_fetch_row($result)){
	$file_1 = $row[70];
	$file_2 = $row[71];
	$file_3 = $row[72];
	$file_4 = $row[73];
}
?>
<strong>※上傳執行成果照片</strong> (若無免填)：請彙整於Word檔，並填寫圖片說明後上傳，勿超過10MB。<br />
<form action="file_up_100.php" method="post" enctype="multipart/form-data" target="_self">
    <input type="hidden" name="max_file_size" value="102400000">
    <input type="hidden" name="table" value="e_8_3">
    <input type="file" name="myfile">
<!---    <input type="submit" value="上傳執行成果照片">--->
<br /><? if ($file_3 == ''){echo "檔案狀態：<font color=red>未上傳</font> (上傳後請按F5更新狀態)";} else {echo '檔案狀態：<font color=blue>已上傳</font>，檔名：'.'<a href="../xSchoolForm/upload/100/'.$school.'/'.$file_3.'" target="_new">'.$file_3.'</a>';}?>
  </form>
<!---
<br />
<strong>※上傳核定後執行計畫</strong> <font color=red>(必填)</font>：請彙整於Word檔
<form action="file_up_100.php" method="post" enctype="multipart/form-data" target="_self">
    <input type="hidden" name="max_file_size" value="102400000">
    <input type="hidden" name="table" value="e_8_1">
    <input type="file" name="myfile">
    <input type="submit" value="上傳核定後執行計畫">
<br /><? if ($file_1 == ''){echo "檔案狀態：<font color=red>未上傳</font> (上傳後請按F5更新狀態)";} else {echo '檔案狀態：<font color=blue>已上傳</font>，檔名：'.'<a href="../xSchoolForm/upload/100/'.$school.'/'.$file_1.'" target="_new">'.$file_1.'</a>';}?>
  </form>
<br />
<strong>※上傳核定後執行經費概算表</strong> <font color=red>(必填)</font>：請彙整於Word檔
<form action="file_up_100.php" method="post" enctype="multipart/form-data" target="_self">
    <input type="hidden" name="max_file_size" value="102400000">
    <input type="hidden" name="table" value="e_8_2">
    <input type="file" name="myfile">
    <input type="submit" value="上傳核定後經費概算表">
<br /><? if ($file_2 == ''){echo "檔案狀態：<font color=red>未上傳</font> (上傳後請按F5更新狀態)";} else {echo '檔案狀態：<font color=blue>已上傳</font>，檔名：'.'<a href="../xSchoolForm/upload/100/'.$school.'/'.$file_2.'" target="_new">'.$file_2.'</a>';}?>
</form>
--->

<p>
<input type="button" value="返回上一頁" onClick="history.go(-1)">
<p>
<font color="blue"><strong>※ 注意事項：</strong></font><br />
1. <strong>每個上傳檔案請勿超過10MB。</strong>請適當壓縮圖片適合於螢幕呈現即可。<br />
<?php
include "../../footer.php";
?>
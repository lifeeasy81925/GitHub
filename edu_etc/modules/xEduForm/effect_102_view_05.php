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
<? 
	//教育部核定金額
	$sql = "select a192, a193, a194 from 102allowance5 where account like '$school'";
	
	$result = mysql_query($sql);
	while($row = mysql_fetch_row($result))
	{
		$fn_a5 = $row[0]; //總金額
		$fn_a5_1 = $row[1]; //經常門
		$fn_a5_2 = $row[2]; //資本門
	}

	//學校執行金額
	$sql = "select  *  from 102school_effect where account like '$school'";
	$result = mysql_query($sql);
	while($row = mysql_fetch_row($result)){
		$ef_a1_1 = $row[11];
		$ef_a2_1 = $row[26];
		$ef_a3_1 = $row[41];
		$ef_a4_1 = $row[56];
		$ef_a5_1 = $row[71];
		$ef_a6_1 = $row[86];
		$ef_a7_1 = $row[101];
		$ef_total = $ef_a1_1 + $ef_a2_1 + $ef_a3_1 + $ef_a4_1 + $ef_a5_1 + $ef_a6_1 + $ef_a7_1;
		$i = 71; //i = 補助5的第一個項目，共15個
		$ef_1 = $row[$i];
		$ef_2 = $row[$i+1];
		$ef_3 = $row[$i+2];
		$ef_4 = $row[$i+3];
		$ef_5 = $row[$i+4];
		$ef_6 = $row[$i+5];
		$ef_7 = $row[$i+6];
		$ef_8 = $row[$i+7];
		$ef_9 = $row[$i+8];
		$ef_10 = $row[$i+9];
		$ef_11 = $row[$i+10];
		$ef_12 = $row[$i+11];
		$ef_13 = $row[$i+12];
		$ef_14 = $row[$i+13];
		$ef_15 = $row[$i+14];
	}
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="effect_102_school_05_finish.php" onSubmit="return toCheck();">
<p>
<font color="blue"><strong>102年度執行成果填報  <? echo $schoolname; ?></strong></font><br />
<strong>項目：五、發展原住民教育文化特色及充實設備器材  </strong><a href="/edu/modules/xSchoolForm/download/allowance-05.htm" target="_blank">(補助項目說明)</a>
<p>
<font color=blue>核定經費：<input type="text" size="5" name="fn_a5" value='<? echo number_format($fn_a5);?>' style="border:0px; text-align: right;" readonly >元。<br />
<input type="text" size="5" name="fn_a5_1" value='<? echo ($fn_a5_1);?>' style="border:0px; text-align: right;" readonly >元，資本門：
<input type="text" size="5" name="fn_a5_2" value='<? echo ($fn_a5_2);?>' style="border:0px; text-align: right;" readonly >元)。</font>
<br /><br />
<font color=blue><strong>※執行金額：</strong>
<input type="text" size="6" name="ef_1" value="<? echo number_format($ef_1);?>" style="border:0px; text-align: right;" readonly >元。</font>(執行進度依據，由下方資料自動加總)<br /><br />
經費已使用(經常門：<input type="text" size="6" name="ef_2" value="<? echo number_format($ef_2);?>"  onChange="change1()">元，資本門：<input type="text" size="6" name="ef_3" value="<? echo number_format($ef_3);?>"  onChange="change2()">元)。<br />
發展特色<input type="text" size="4" name="ef_4" value="<? echo number_format($ef_4);?>" >項：<br />
特色一名稱：<input type="text" size="16" name="ef_5" value="<? echo $ef_5;?>">，參與學生數<input type="text" size="4" name="ef_6" value="<? echo number_format($ef_6);?>" >人，其中目標學生數<input type="text" size="4" name="ef_7" value="<? echo number_format($ef_7);?>" >人。<br />
特色二名稱：<input type="text" size="16" name="ef_8" value="<? echo $ef_8;?>">，參與學生數<input type="text" size="4" name="ef_9" value="<? echo number_format($ef_9);?>" >人，其中目標學生數<input type="text" size="4" name="ef_10" value="<? echo number_format($ef_10);?>" >人。
<p>
<strong>※成效或執行成果說明</strong> (目前為執行期間，若無免填)：<br />
<textarea name="ef_14" cols="70" rows="3" id="ef_14"><? echo $ef_14;?></textarea>
<p>
<strong>※困難或建議事項</strong> (若無免填)：請於其他文件編輯完成後，再複製貼上。<br />
<textarea name="ef_15" cols="70" rows="3" id="ef_15"><? echo $ef_15;?></textarea>
<p>
<input type="button" value="返回上一頁" onClick="history.go(-1)">
<!-- 數值計算 -->
<script language="JavaScript">
//自動加總
function numsum() { 
	var f = document.forms[0]; 
	f.ef_1.value = (f.ef_2.value==""?0:parseFloat(f.ef_2.value)) + (f.ef_3.value==""?0:parseFloat(f.ef_3.value)); 
}
function change1() { 
	var f = document.forms[0]; 
	numsum();
}
function change2() { 
	var f = document.forms[0]; 
	numsum();
}
</script>  
</form>

<?php
include "../../footer.php";
?>
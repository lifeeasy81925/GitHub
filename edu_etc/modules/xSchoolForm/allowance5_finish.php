<?php
include "../../mainfile.php";
include "../../header.php";
include "./connect_insert.php";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//$lastMon = $_POST['lastMon'];
//$lastExe = $_POST['lastExe'];
//$lastPer = $_POST['lastPer'];
//$thisMon = $_POST['thisMon'];
//$thisExe = $_POST['thisExe'];
//$thisPer = $_POST['thisPer'];
$afterMon = $_POST['afterMon'];
$afterMonA = $_POST['afterMonA'];
$afterMonB = $_POST['afterMonB'];

//在money table記錄下來申請經費
if($class == '1' ){
			$sql = "update 100element_money set  a5 = '$afterMon', a5_1 = '$afterMonA', a5_2 = '$afterMonB' where account='$username'";
			mysql_query($sql);
	}
	else{
			$sql = "update 100junior_money set  a5 = '$afterMon', a5_1 = '$afterMonA', a5_2 = '$afterMonB' where account='$username'";
			mysql_query($sql);
		}

        //新增資料進資料庫語法  
		
		 if($class == '1' ){
				$sql = "update 100element_allowance5 set afterMon='$afterMon', afterMonA = '$afterMonA', afterMonB = '$afterMonB' where account='$username'";
			
	}
	else{
				$sql = "update 100junior_allowance5 set afterMon='$afterMon', afterMonA = '$afterMonA', afterMonB = '$afterMonB' where account='$username'";			
		} 
		
			
        if(mysql_query($sql))
        {
                echo '新增成功!';
	//判斷後面是否還有可申請項目，若有→到下一個項目，若無→到申請結果頁面。

include "allowance_set.php";


	//開始判斷下一步進哪個網頁
	if ($a_6 == 1 || $a_7 == 1 || $a_8 == 1) {
		echo '<meta http-equiv=REFRESH CONTENT=0;url=check_a6.php>';
	} else {
		echo '<meta http-equiv=REFRESH CONTENT=0;url=allowance_result.php>';
	}
	//判斷結束
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=allowance5.php>';
        }
/*}
else
{
        echo '所有的欄位都需要填寫!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=allowance1.php>';
}*/
?>
<?php
include "../../footer.php";
?>
<?php
include "../../mainfile.php";
include "../../header.php";
session_start(); 
$username = $xoopsUser->getVar('uname');
  global $xoopsDB;
  $sql = "select * from " . $xoopsDB->prefix('city') . " where `cityid` = '$username'";
  $result_city = $xoopsDB -> query($sql) or die($sql);

$id = $_POST['id'];
$class = $_POST['class'];
echo "刪除帳號:".$id;

//刪除資料
if($class == '1' ){
	$str1="delete from 100element_allowance where account='$id'";
		mysql_query($str1);
	$str2="delete from 100element_allowance1 where account='$id'";
		mysql_query($str2);
    $str3="delete from 100element_allowance2 where account='$id'";
		mysql_query($str3);
	$str4="delete from 100element_allowance3 where account='$id'";
		mysql_query($str4);
    $str5="delete from 100element_allowance4 where account='$id'";
		mysql_query($str5);
	$str6="delete from 100element_allowance5 where account='$id'";
		mysql_query($str6);
    $str7="delete from 100element_allowance6 where account='$id'";
		mysql_query($str7);
	$str8="delete from 100element_allowance7 where account='$id'";
		mysql_query($str8);
	$str9="delete from 100element_allowance8 where account='$id'";
		mysql_query($str9);
	$str10="delete from 100element_basedata where account='$id'";
		mysql_query($str10);
	$str11="delete from 100element_examine_a1 where account='$id'";
		mysql_query($str11);
	$str12="delete from 100element_examine_a2 where account='$id'";
		mysql_query($str12);
	$str13="delete from 100element_examine_a3 where account='$id'";
		mysql_query($str13);
	$str14="delete from 100element_examine_a4 where account='$id'";
		mysql_query($str14);
	$str15="delete from 100element_examine_a5 where account='$id'";
		mysql_query($str15);
	$str16="delete from 100element_examine_a6 where account='$id'";
		mysql_query($str16);
	$str17="delete from 100element_examine_a7 where account='$id'";
		mysql_query($str17);
	$str18="delete from 100element_examine_a8 where account='$id'";
		mysql_query($str18);
	$str19="delete from 100element_examine_education where account='$id'";
		mysql_query($str19);
	$str20="delete from 100element_examine_money where account='$id'";
		mysql_query($str20);
	$str21="delete from 100element_money where account='$id'";
		mysql_query($str21);
	$str22="delete from 100element_point where account='$id'";
		mysql_query($str22);
	$str23="delete from 100element_point6 where account='$id'";
		mysql_query($str23);
	$str24="delete from 100element_point345 where account='$id'";
		mysql_query($str24);
	$str25="delete from 100element_point12 where account='$id'";
		mysql_query($str25);
	$str26="delete from 100element_upload_name where account='$id'";
		mysql_query($str26);
	$str27="delete from 100suggestion where id='$id'";
		mysql_query($str27);	
	$str28="delete from edu_school where account='$id'";
		mysql_query($str28);
	$str29="delete from school_checkdate where account='$id'";
  }
  else{
  	$str1="delete from 100junior_allowance where account='$id'";
		mysql_query($str1);
	$str2="delete from 100junior_allowance1 where account='$id'";
		mysql_query($str2);
    $str3="delete from 100junior_allowance2 where account='$id'";
		mysql_query($str3);
	$str4="delete from 100junior_allowance3 where account='$id'";
		mysql_query($str4);
    $str5="delete from 100junior_allowance4 where account='$id'";
		mysql_query($str5);
	$str6="delete from 100junior_allowance5 where account='$id'";
		mysql_query($str6);
    $str7="delete from 100junior_allowance6 where account='$id'";
		mysql_query($str7);
	$str8="delete from 100junior_allowance7 where account='$id'";
		mysql_query($str8);
	$str9="delete from 100junior_allowance8 where account='$id'";
		mysql_query($str9);
	$str10="delete from 100junior_basedata where account='$id'";
		mysql_query($str10);
	$str11="delete from 100junior_examine_a1 where account='$id'";
		mysql_query($str11);
	$str12="delete from 100junior_examine_a2 where account='$id'";
		mysql_query($str12);
	$str13="delete from 100junior_examine_a3 where account='$id'";
		mysql_query($str13);
	$str14="delete from 100junior_examine_a4 where account='$id'";
		mysql_query($str14);
	$str15="delete from 100junior_examine_a5 where account='$id'";
		mysql_query($str15);
	$str16="delete from 100junior_examine_a6 where account='$id'";
		mysql_query($str16);
	$str17="delete from 100junior_examine_a7 where account='$id'";
		mysql_query($str17);
	$str18="delete from 100junior_examine_a8 where account='$id'";
		mysql_query($str18);
	$str19="delete from 100junior_examine_education where account='$id'";
		mysql_query($str19);
	$str20="delete from 100junior_examine_money where account='$id'";
		mysql_query($str20);
	$str21="delete from 100junior_money where account='$id'";
		mysql_query($str21);
	$str22="delete from 100junior_point where account='$id'";
		mysql_query($str22);
	$str23="delete from 100junior_point6 where account='$id'";
		mysql_query($str23);
	$str24="delete from 100junior_point345 where account='$id'";
		mysql_query($str24);
	$str25="delete from 100junior_point12 where account='$id'";
		mysql_query($str25);
	$str26="delete from 100junior_upload_name where account='$id'";
		mysql_query($str26);
	$str27="delete from 100suggestion where account='$id'";
		mysql_query($str27);	
	$str28="delete from edu_school where account='$id'";
		mysql_query($str28);
	$str29="delete from school_checkdate where account='$id'";
}
	if(mysql_query($str29)){
	echo '刪除成功!';
    echo '<meta http-equiv=REFRESH CONTENT=3;url=del_schuser.php>';
}
else{
	echo '刪除失敗 !';
    echo '<meta http-equiv=REFRESH CONTENT=3;url=del_schuser.php>';
}
include "../../footer.php";
?>
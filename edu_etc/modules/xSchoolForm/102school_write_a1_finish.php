<?php
include "../../mainfile.php";
include "../../header.php";
include "./connect_insert.php";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$a010 = $_POST['familysum'];
$a011 = $a010;	//經常門，本項目僅有經常門

$a013 = $_POST['afterMon'];
$a014 = $_POST['afterLec'];
$a015 = $_POST['afterNum'];

$a016 = $_POST['afterFamMon'];
$a017 = $_POST['afterFamMonLec'];

$a030 = $_POST['a030'];
$a031 = $_POST['a031'];
$a032 = $_POST['a032'];
$a033 = $_POST['a033'];
$a034 = $_POST['a034'];
$a035 = $_POST['a035'];
$a036 = $_POST['a036'];
$a037 = $_POST['a037'];
$a038 = $_POST['a038'];
$a039 = $_POST['a039'];

$a040 = $_POST['a040'];
$a041 = $_POST['a041'];
$a042 = $_POST['a042'];
$a043 = $_POST['a043'];
$a044 = $_POST['a044'];
$a045 = $_POST['a045'];
$a046 = $_POST['a046'];
$a047 = $_POST['a047'];
$a048 = $_POST['a048'];
$a049 = $_POST['a049'];

$a050 = $_POST['a050'];
$a051 = $_POST['a051'];
$a052 = $_POST['a052'];
$a053 = $_POST['a053'];
$a054 = $_POST['a054'];
$a055 = $_POST['a055'];
$a056 = $_POST['a056'];
$a057 = $_POST['a057'];
$a058 = $_POST['a058'];
$a059 = $_POST['a059'];

$a060 = $_POST['a060'];
$a061 = $_POST['a061'];
$a062 = $_POST['a062'];
$a063 = $_POST['a063'];
$a064 = $_POST['a064'];
$a065 = $_POST['a065'];
$a066 = $_POST['a066'];
$a067 = $_POST['a067'];
$a068 = $_POST['a068'];
$a069 = $_POST['a069'];

$a070 = $_POST['a070'];
$a071 = $_POST['a071'];
$a072 = $_POST['a072'];
$a073 = $_POST['a073'];
$a074 = $_POST['a074'];
$a075 = $_POST['a075'];
$a076 = $_POST['a076'];
$a077 = $_POST['a077'];
$a078 = $_POST['a078'];
$a079 = $_POST['a079'];

$a080 = $_POST['a080'];
$a081 = $_POST['a081'];
$a082 = $_POST['a082'];
$a083 = $_POST['a083'];
$a084 = $_POST['a084'];
$a085 = $_POST['a085'];
$a086 = $_POST['a086'];
$a087 = $_POST['a087'];
$a088 = $_POST['a088'];
$a089 = $_POST['a089'];

$a090 = $_POST['a090'];
$a091 = $_POST['a091'];
$a092 = $_POST['a092'];
$a093 = $_POST['a093'];
$a094 = $_POST['a094'];
$a095 = $_POST['a095'];
$a096 = $_POST['a096'];
$a097 = $_POST['a097'];
$a098 = $_POST['a098'];
$a099 = $_POST['a099'];

$a100 = $_POST['a100'];
$a101 = $_POST['a101'];
$a102 = $_POST['a102'];
$a103 = $_POST['a103'];
$a104 = $_POST['a104'];
$a105 = $_POST['a105'];
$a106 = $_POST['a106'];
$a107 = $_POST['a107'];
$a108 = $_POST['a108'];
$a109 = $_POST['a109'];

$a110 = $_POST['a110'];
$a111 = $_POST['a111'];
$a112 = $_POST['a112'];
$a113 = $_POST['a113'];
$a114 = $_POST['a114'];
$a115 = $_POST['a115'];
$a116 = $_POST['a116'];
$a117 = $_POST['a117'];
$a118 = $_POST['a118'];
$a119 = $_POST['a119'];

$a120 = $_POST['a120'];
$a121 = $_POST['a121'];
$a122 = $_POST['a122'];
$a123 = $_POST['a123'];
$a124 = $_POST['a124'];
$a125 = $_POST['a125'];
$a126 = $_POST['a126'];
$a127 = $_POST['a127'];
$a128 = $_POST['a128'];
$a129 = $_POST['a129'];






//在money table記錄下來申請經費
$sql = "update 
102allowance1 set 
a010='$a010', 
a011='$a011', 
a013='$a013', 
a014='$a014', 
a015='$a015', 
a016='$a016', 
a017='$a017', 

a030='$a030', 
a031='$a031', 
a032='$a032', 
a033='$a033', 
a034='$a034', 
a035='$a035', 
a036='$a036', 
a037='$a037', 
a038='$a038', 
a039='$a039', 

a040='$a040', 
a041='$a041', 
a042='$a042', 
a043='$a043', 
a044='$a044', 
a045='$a045', 
a046='$a046', 
a047='$a047', 
a048='$a048', 
a049='$a049', 

a050='$a050', 
a051='$a051', 
a052='$a052', 
a053='$a053', 
a054='$a054', 
a055='$a055', 
a056='$a056', 
a057='$a057', 
a058='$a058', 
a059='$a059', 

a060='$a060', 
a061='$a061', 
a062='$a062', 
a063='$a063', 
a064='$a064', 
a065='$a065', 
a066='$a066', 
a067='$a067', 
a068='$a068', 
a069='$a069', 

a070='$a070', 
a071='$a071', 
a072='$a072', 
a073='$a073', 
a074='$a074', 
a075='$a075', 
a076='$a076', 
a077='$a077', 
a078='$a078', 
a079='$a079', 

a080='$a080', 
a081='$a081', 
a082='$a082', 
a083='$a083', 
a084='$a084', 
a085='$a085', 
a086='$a086', 
a087='$a087', 
a088='$a088', 
a089='$a089', 

a090='$a090', 
a091='$a091', 
a092='$a092', 
a093='$a093', 
a094='$a094', 
a095='$a095', 
a096='$a096', 
a097='$a097', 
a098='$a098', 
a099='$a099', 

a100='$a100', 
a101='$a101', 
a102='$a102', 
a103='$a103', 
a104='$a104', 
a105='$a105', 
a106='$a106', 
a107='$a107', 
a108='$a108', 
a109='$a109', 

a110='$a110', 
a111='$a111', 
a112='$a112', 
a113='$a113', 
a114='$a114', 
a115='$a115', 
a116='$a116', 
a117='$a117', 
a118='$a118', 
a119='$a119', 

a120='$a120', 
a121='$a121', 
a122='$a122', 
a123='$a123', 
a124='$a124', 
a125='$a125', 
a126='$a126', 
a127='$a127', 
a128='$a128', 
a129='$a129' 

where account='$username'";
mysql_query($sql);
//新增資料進資料庫語法  
if(mysql_query($sql)){
	echo '新增成功!';
	echo '<meta http-equiv=REFRESH CONTENT=0;url=102school_write_allowance.php>';
	//判斷後面是否還有可申請項目，若有→到下一個項目，若無→到申請結果頁面。
	//include "allowance_set.php";
	//開始判斷下一步進哪個網頁
	//if ($a_2 == 1 || $a_3 == 1 || $a_4 == 1 || $a_5 == 1 || $a_6 == 1 || $a_7 == 1 || $a_8 == 1) {
	//	echo '<meta http-equiv=REFRESH CONTENT=0;url=check_a2.php>';
	//}else{
	//	echo '<meta http-equiv=REFRESH CONTENT=0;url=allowance_result.php>';
	//}
	//判斷結束
}else{
	echo '新增失敗!';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=102school_write_a1.php>';
}

?>
<?php
include "../../footer.php";
?>
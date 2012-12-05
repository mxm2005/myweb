<?php
require_once("lib/MyComm.php");
$ss="HELLO";

/*$root_d=$_SERVER['DOCUMENT_ROOT'];
$root_m="HOST:".$_SERVER['HTTP_HOST'];
echo "<br />";
echo "目录：".$root_d;
echo "<br/>".$root_m;
require_once("lib/MyComm.php");
echo "<br />";
echo MyComm::to_json("中文检查JSON");
echo "<br />";
echo json_encode("中文检查JSON");
echo "<br />";
echo "\"中文检查JSON\"";
*/

$yes = array('this', 'is', 'an array');
array_push($yes,"什么时候才能出太阳","你好");

$tmp=MyComm::to_json_array($yes);

echo var_dump($tmp);

echo json_encode($tmp);
echo "<br />";
$arr=new ArrayObject();
$arr->append("1agwagw");
$arr->append("2agwagw");
$arr->append(123);

//echo var_dump($arr)."<br>";

echo json_encode($arr);


?>
<html>
<body>
<br>
<?=  $ss ?>
</body>
</html>
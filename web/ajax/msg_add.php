<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 12-12-4
 * Time: 下午4:00
 * To change this template use File | Settings | File Templates.
 */
$root_d=$_SERVER['DOCUMENT_ROOT'];
$root_m="HOST:".$_SERVER['HTTP_HOST'];
echo "<br />";
echo "目录：".$root_d;
echo "<br/>".$root_m;
require_once("../lib/MyComm.php");
echo "<br />";
echo MyComm::to_json("中文检查JSON");
echo "<br />";
$arr=new ArrayObject();
$arr->append("1agwagw");
$arr->append("2agwagw");
$arr->append(123);
echo json_encode($arr);
echo "<br />";
echo json_encode("中文检查JSON");
echo "<br />";
echo "\"中文检查JSON\"";
?>
<html>
    <head>
    <title>测试数据库MYSQL连接</title>
    <META http-equiv="content-type" content="text/html; charset=utf-8">
        <style type="text/css">
            .tb_grid{border:solid 1px #686868;border-collapse:collapse;line-height:26px;width:100%;}
            .tb_grid th{border:solid 1px #686868;border-collapse:collapse;line-height:24px;padding:0px 3px;background:#ddd;}
            .tb_grid td{border:solid 1px #686868;border-collapse:collapse;line-height:24px;padding:0px 3px;}
        </style>
</head>
<body>

<?php
$conn=mysql_connect("localhost","root",'123456')
    or die("Can't connected to DB.");
mysql_select_db("myweb",$conn)
    or die("Can't found DB.");
$sql="select  * from message";
mysql_query("set names utf8");//work
//mysql_query("set names gbk"); //home
$reVal=mysql_query($sql,$conn);

?>
<table class="tb_grid">
    <tr>
        <th>
            编号
        </th>
        <th>
            标题
        </th>
        <th>
            备注
        </th>
        <th>
            时间
        </th>
    </tr>
    <?php
    while($row=mysql_fetch_object($reVal)){
        ?>
        <tr>
            <td><?= $row->id ?></td>
            <td><?= $row->title ?></td>
            <td><?= $row->remark ?></td>
            <td><?= $row->create_time ?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>

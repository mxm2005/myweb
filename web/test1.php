<html>
    <head><title>test connect database(mysql)</title>
    </head>
    <body>
        <table><tr><th>编号</th><th>标题</th><th>添加时间</th><th>内容</th></tr>
<?php
    echo "Hello,Mxm";

    require_once("/lib/Db.php");
    $db=DB::connect($dbhost, $dbuser, $dbpw, $dbname, $pconnect = 1,$charset='utf8');
    if(DB::iserror($db)){
        die($db->getMessage());
    }

    $sql="select * from myweb";
    $q=$db->query($sql);
    if(DB::iserror($q)){
        die($q->getMessage());
    }

    while($->fetchInto($row)){
?>
    <tr>
        <td><?=$row[0]?></td><td><?=$row[1]?></td><td><?=$row[2]?></td><td><?=$row[3]?></td>
    </tr>
<?php
    }
?>
        </table>
    </body>
</html>
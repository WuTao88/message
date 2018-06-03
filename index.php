<?php
$user = 'hook';      //数据库连接用户名
$pass = '123456';    //对应的密码
$dbname='exampledb';      //数据库名字
$conn = new PDO("mysql:host=172.30.202.100;dbname=$dbname", $user, $pass)or

die("***数据访问出错***");

echo "✔";

$sql="show tables";
$re= $conn->query($sql);

foreach ($re as $v){

    print_r($v);

}

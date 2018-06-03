<?php
$user = 'hook';      //数据库连接用户名
$pass = '123456';    //对应的密码
$dbname='test';      //数据库名字
$conn = new PDO("mysql:host=172.30.205.180;dbname=$dbname", $user, $pass)or

die("***数据访问出错***");

echo "✔";

$sql=file_get_contents("test.sql");

$result =$conn->query($sql);

if($result>0){
echo "success";
}

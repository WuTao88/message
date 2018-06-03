<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/6/3
 * Time: 14:09
 */

$host="172.30.205.180";$user="hook";$pass="123456";
$conn=new mysqli($host,$user,$pass)or die("error");
echo "ok1";
$conn=null;


$host="172.30.205.180";$user="hook";$pass="123456";
$conn=new mysqli($host,$user,$pass,"test")or die("error");
echo "ok2";
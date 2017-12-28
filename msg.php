<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/28
 * Time: 13:09
 */
if($_REQUEST){
    date_default_timezone_set('PRC');
    $date=date("Ymd");
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $body=$_REQUEST['message'];

    $filename="msg/$date.txt";
    $Data=date("Y-m-d H:i:s")."\n姓名：$name\nEmail:$email\n内容：$body\n";
    file_put_contents($filename,$Data,FILE_APPEND);

}
header("Location:https:wutao88.github.io");
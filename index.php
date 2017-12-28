<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/28
 * Time: 12:41
 */
date_default_timezone_set('PRC');
$date=date("Ymd");

$dir=dir("msg");

$file;
while (($file=$dir->read())!== false){
    if($file!="."&&$file!="..") {
        $files = fopen("msg/". $file, "r") or exit("无法打开文件!");

        while (!feof($files)) {
            echo fgets($files) . "<br>";
        }
        fclose($files);
    }
}
$dir->close();

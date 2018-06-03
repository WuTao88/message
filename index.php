<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/12/28
 * Time: 12:41
 */
echo "<h4>Hello world</h4>";

try{
  $conn=new mysqli("172.30.92.25","admin","root");
}
catch(mysqli_sql_exception $e){
  die("error");
}

$sql=file_get_contents("test.sql");
$conn->query($sql);
                      
echo "success";
  $sql="show tables";
$re= $conn->query($sql);

foreach ($re as $v){

    print_r($v);

}

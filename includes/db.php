<?php
// this is the database connection file
// 2018-Oct-2

$db['db_host'] = "localhost";
$db['db_user'] ="root";
$db['db_pass']="";
$db['db_name']='pioneer';

foreach($db as $key => $value){
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
//$connection = mysqli_connect('localhost','root','','pioneer');

if($connection){
    echo "connected!";
}
?>
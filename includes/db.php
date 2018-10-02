<?php
// this is the database connection file
// 2018-Oct-2

$connection = mysqli_connect('localhost','root','','pioneer');

if($connection){
    echo "connected!";
}
?>
<?php
$servername = "localhost";
$username = "db21_060";
$password = "db21_060";
$dbname = "db21_060";
$conn = new mysqli($servername,$username,$password,$dbname);
mysqli_query($conn,"SET CHARACTER SET UTF8");


if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
if(!$conn->select_db($dbname)){
    die("Connection failed:".$conn->connect_error);
}
?>
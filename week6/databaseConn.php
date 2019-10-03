<?php
$hostname = 'localhost';
$dbname = 'php_crud';
$username = 'root';
$pw = 'root';
$port = 8889;

//create connection 
$connect = new mysqli($hostname, $username, $pw, $dbname, $port); 
 
//check connection 
if($connect->connect_error) {
    die("connection failed : " . $connect->connect_error);
} else {
     //echo "Successfully Connected";
}
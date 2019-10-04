<?php

/**
 * If you are not using MAMP or XAMP or WAMP
 * You should doublecheck the credential below.
 * 
 * You must also create the 'php_crud' database 
 * before using this script.
 *
 * Go here to create database
 * http://localhost:8888/phpMyAdmin/?lang=en
 * 
 * 1. Click on Databases Tab
 * 2. Under "create database" fill in form with 'php_crud'
 * 3. Click create button
 * Congrats you have created a database!
 * It should be listed in left hand navigation list in PhpMyAdmin.
 */

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
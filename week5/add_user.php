<?php
if (isset($_POST)) {
    print_r($_POST);
} 

if (isset($_REQUEST)) {
    print_r($_REQUEST);
} 

$first_name = '';
$last_name = '';
$username = '';
$query = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `active`) VALUES (NULL, 'John', 'Doe', 'jd1', '1');";

$result = $connect->query($dropTable);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "user added" . $result ."</br>";
}

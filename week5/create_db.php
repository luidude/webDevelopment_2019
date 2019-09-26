<?php

require_once "./databaseConn.php";
//$conn = new mysqli($hostname, $username, $pw, $dbname, $port);


$dropTable = "DROP TABLE IF EXISTS users";

$query = "CREATE TABLE users (
    id smallint NOT NULL AUTO_INCREMENT,
    first_name varchar(100) NOT NULL,
    last_name varchar(100) NOT  NULL,
    username varchar(100) NOT NULL,
    active int(11) NOT NULL DEFAULT '0',
    PRIMARY KEY (id)
)";

$user1 = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `active`) VALUES (NULL, 'John', 'Doe', 'jd1', '1');";
$user2 = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `active`) VALUES (NULL, 'Jane', 'Doe', 'jd2', '1');";

$result = $connect->query($dropTable);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "table Dropped" . $result ."</br>";
}

$result = $connect->query($query);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "table Created" . $result ."</br>";
}

echo 'add users'."</br>";;
$result = $connect->query($user1);
echo $result ."</br>";;
$result = $connect->query($user2);
echo $result ."</br>";;
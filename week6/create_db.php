<?php

require_once "./databaseConn.php";
//$conn = new mysqli($hostname, $username, $pw, $dbname, $port);


$dropTable1 = "DROP TABLE IF EXISTS users";

$dropTable2 = "DROP TABLE IF EXISTS blog_posts";

$dropTable3 = "DROP TABLE IF EXISTS comments";

$dropTable4 = "DROP TABLE IF EXISTS views";

$result = $connect->query($dropTable1);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "table Dropped" . $result ."</br>";
}

$result = $connect->query($dropTable2);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "table Dropped" . $result ."</br>";
}
$result = $connect->query($dropTable3);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "table Dropped" . $result ."</br>";
}
$result = $connect->query($dropTable4);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "table Dropped" . $result ."</br>";
}

$users_table = "CREATE TABLE users (
    id smallint NOT NULL AUTO_INCREMENT,
    first_name varchar(100) NOT NULL,
    last_name varchar(100) NOT  NULL,
    username varchar(100) NOT NULL,
    active int(11) NOT NULL DEFAULT '0',
    PRIMARY KEY (id)
)";

$result = $connect->query($users_table);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "users table created" . $result ."</br>";
}

$blogPostTable = "CREATE TABLE blog_posts (
        id smallint NOT NULL AUTO_INCREMENT,
        message varchar(5000) NOT NULL,
        subject varchar(128) NOT NULL,
        created_date DATE NOT NULL,
        username varchar(100) NOT NULL,
        PRIMARY KEY (id)
    )
";

$result = $connect->query($blogPostTable);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "blogPostTable table created" . $result ."</br>";
}

$commentsTable = "CREATE TABLE comments (
    id smallint NOT NULL AUTO_INCREMENT,
    blog_post_id smallint NOT NULL,
    message varchar(140) NOT NULL,
    username varchar(100) NOT NULL,
    created_date DATE NOT NULL,
    PRIMARY KEY (id)
)
";

//
$result = $connect->query($commentsTable);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "commentsTable table created" . $result ."</br>";
}

$viewsTable = "CREATE TABLE views (
    id smallint NOT NULL AUTO_INCREMENT,
    device_type varchar(256),
    ip_address varchar(15),
    username varchar(100) NOT NULL,
    created_date DATE NOT NULL,
    comment_id smallint NOT NULL,
    PRIMARY KEY (id)
)
";

$result = $connect->query($viewsTable);
if (!$result) {
    die ('Something went wrong.'); 
} else {
    echo "viewsTable table created" . $result ."</br>";
}




/*
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
*/
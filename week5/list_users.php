<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, td, th {
            border: 1px solid black;
        }
        td, th {
            padding: 10px;
        }
        .red, td {
            color: red;
        }
        .green, td {
            color: green;
        }
    </style>
</head>
<body>
<?php require_once 'databaseConn.php'; ?>
<table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Is Active</th>
                <th>Is Active</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT id, first_name, last_name, username, active FROM users WHERE active = 1 limit 100";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['first_name']." ".$row['last_name']."</td>
                        <td>".$row['username']."</td>
                        <td>".$row['active']."</td>
                        <td>
                            <a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>
    </table>
<br/>
<br/>
     <form action="./list_users.php" method="post">
        <p>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name">
        </p>
        <p>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name">
        </p>
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </p>
        <p>
            <input type="submit" value="Add New User">
        </p>
    </form> 

    <?php
    // Print an individual cookie
    echo $_COOKIE["TestCookie"];

    // Another way to debug/test is to view all cookies
    print_r($_COOKIE);
    ?>
<?php

if (count($_POST)) {
    print_r($_POST);
} 
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
if ($_POST['first_name']) {
    $query = "INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `active`) 
VALUES (NULL, '".$first_name."', '".$last_name."', '".$_POST['username']."', '1');";
    echo $sql;
    $result = $connect->query($query);
    if (!$result) {
        die('Something went wrong.');
    } else {
        echo "<br/>User added" . $result ."</br>";
    }
}
?>
    </body>
</html>
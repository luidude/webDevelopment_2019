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
<?php require_once 'db_connect.php'; ?>
<table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM members WHERE active = 1";
            $result = $connect->query($sql);
 
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['fname']." ".$row['lname']."</td>
                        <td>".$row['age']."</td>
                        <td>".$row['contact']."</td>
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
    </body>
</html>
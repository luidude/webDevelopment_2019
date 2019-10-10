<?php
require_once 'databaseConn.php';

if (isset($_REQUEST["id"])) {
    $userIdToRemoveFromDatabase = $_REQUEST["id"];
    if($userIdToRemoveFromDatabase){
        $query = "DELETE FROM `users` where id = ".$userIdToRemoveFromDatabase." ;";
        
        $result = $connect->query($query);
        if (!$result) {
            die ('Something went wrong.'); 
        } else {
            echo "User Deleted" . $result ."</br>";
        }
    } else {
        echo "No user Id supplied.";
    }

} else {
    echo "No user Id supplied.";
}


<form action="./login.php" method="post" >
        <p>
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </p>
        <p>
            <input type="submit" value="login">
        </p>
    </form>
    <?php require_once 'databaseConn.php'; ?>
    <?php
    // Print an individual cookie
    echo $_COOKIE["TestCookie"];

    // Another way to debug/test is to view all cookies
    print_r($_COOKIE);
    ?>

<?php 

if(sizeof($_POST)){

    setcookie("TestCookie", 'I am '.$_POST['username']);

    $username = $_POST['username'];
    $query = "SELECT first_name, last_name from users where username = '".$username."' ;";
    
    $result = $connect->query($query);
    
    if($result->num_rows == 1){
        $user = $result->fetch_assoc();
        echo 'Hello '.$user["first_name"]." ".$user["last_name"];
    } else {
        echo "I don't know you.";
    }
}
?>
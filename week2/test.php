<!DOCTYPE html>
<html>
<header>
    <title>Mad Libs</title>
</header>

<body>
    <h1>
    <?php
      // My comment is only to be read by developer.  
    /* My comment is only to be read by developer.  */ 
    $x = 1;   //1
    echo "$x </br>";
    $x = $x + 1;   // 2
    echo "$x </br>";
    $x++;   // 3
    
    echo "$x </br>";
    $x--;  // 2
    echo "$x </br>";
    $x--;  // 1
    echo "$x ";
    
    echo "</br>";
    echo 1 === 1;
    echo "</br>";

    if( false && true ){
        echo 'first test true';
    } elseif ( false || true ) {
        echo 'second test true';
    } elseif ( false ) {
        echo 'Third test true';
    } 
    else {
        echo 'false';
    };



    echo "</br>";

    $myString = "Hello";

    echo "$myString World </br>";
    echo $myString  . ' World ' . $x;


    ?>



    </h1>
</body>
</html> 
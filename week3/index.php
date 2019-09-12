<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<h1>
<?php
    // $count = 99;
    // while($count <= 100 ){
    //     echo $count . ' ';
    //     $count++;
    // } 
    // 
    ?>


<?php

$cars = array('A','b','C','D','A','b','C','D','A','b','C','D','A','b','C','D',
'A','b','C','D','A','b','C','D','A','b','C','D','A','b','C','D',
'A','b','C','D','A','b','C','D','A','b','C','D','A','b','C','D',
'A','b','C','D','A','b','C','D','A','b','C','D','A','b','C','D',
'A','b','C','D','A','b','C','D','A','b','C','D','A','b','C','D',
'A','b','C','D','A','b','C','D','A','b','C','D','A','b','C','D',
'A','b','C','D','A','b','C','D','A','b','C','D','A','b','C','D',
'A','b','C','D','A','b','C','D','A','b','C','D','A','b','C','D'
);
$carsLength = count($cars);
for($x=0 ; $x < $carsLength; $x++){
    echo ($x+1).") ".$cars[$x]." ";
}

?>
</h1>

</body>
</html>
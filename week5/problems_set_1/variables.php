<?php
// what will x be at the end of the code block;

//1.
$x = 0;
$x++;

// write answer here => 


//2.
$x = 0;
$x--;

// write answer here => 


//3.
$x = 0;
$y = 100;
$x = $y * 2;

// write answer here => 


//4.
$x = 7;
$y = 10;

if($y > 10){
    $x++;
} else {
    $x--;
}

// write answer here => 


//5.
$x = 0;
$y = 10;

if($y == 10){
    $x++;
} else {
    $x--;
}

// write answer here => 


//6.
$x = "This is a string.";
$x = $x . " This is another string.";

// write answer here => 


//7
$x = "This is a string.";
$y = " This is new string.";

$x = $x . $y;

// write answer here => 

//8.
$x = 0;

for($i=0; $i<2; $i++){
    $x = $x + 10;
}

// write answer here => 

//9.
$x = 0;
for($i=0; $i<=2; $i++){
    $x = $x + 10;
}

// write answer here => 


//10.
$x = "This is a string. \n";
for($i=0; $i<=5; $i++){
    $x = $x . "This is loop $i. \n";
}

// write answer here => 


//11.
$x = 0;
$y = array(1,2,3,4,5);
foreach($y as $value){
    $x = $x + $value;
}

// write answer here => 


//12.
$x = "0";
$y = array(1,2,3,4,5);
foreach($y as $value){
    $x = $x .", ".$value;
}

// write answer here => 


//13.
$x = "0";
$y = array(1,2,3,4,5);
foreach($y as $value){
    if($value % 2 == 1){
        $x = $x .", ".$value;
    }
}

// write answer here => 


//14.
$x = 0;
$y = 'green';

if($y == 'red') {
    $x = 99;
} elseif($y == 'green') {
    $x = 50;
} elseif($y == 'blue') {
    $x = 25;
} else {
    $x = 0;
}

// write answer here => 


//15.
$x = 0;
$y = 'green';
$z = 100;

if($y == 'red') {
    if($z > 99) {
        $x = 55;
    } else {
        $x = 1;
    }
} else {
    if($z > 50) {
        $x = 25;
    } else {
        $x = 0;
    }
}

// write answer here => 


//16.
$x = 0;
$y = 'red';
$z = 50;

if($y == 'red') {
    if($z > 99) {
        $x = 55;
    } else {
        $x = 1;
    }
} else {
    if($z > 50) {
        $x = 25;
    } else {
        $x = 0;
    }
}

// write answer here => 
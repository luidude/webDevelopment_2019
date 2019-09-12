<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
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
        .red, tr {
            color: red;
        }
        .green, tr {
            color: green;
        }
    </style>
</head>
<body>
<h1>
    <?php 
    $myFirstArray = array('Foo','Bar','Baz');
    print_r($myFirstArray);
    echo "</br>";
    echo $myFirstArray[0];
    ?>
    <hr/>
    <?php 
    $myFirstArray = array('element0'=>'foo','element1'=>'Bar','element2'=>'Baz');
    print_r($myFirstArray);
    echo "</br>";
    echo $myFirstArray['element0'];
    ?>
    <hr/>

<table>
<tr>
<th>column1</th>
<th>column2</th>
<th>column3</th>
</tr>

<?php 
    $myFirstArray = array(
        "row1" => array('column1'=>'foo1','column2'=>'Bar1','column3'=>'Baz1'),
        "row2" => array('column1'=>'foo2','column2'=>'Bar2','column3'=>'Baz2'),
        "row3" => array('column1'=>'foo3','column2'=>'Bar3','column3'=>'Baz3')
    );
// NOT LIKE THIS...
        echo $row1 = "<tr>
<td>".$myFirstArray['row1']['column1']."</td>
<td>".$myFirstArray['row2']['column2']."</td>
<td>".$myFirstArray['row3']['column3']."</td>
</tr>"

    ?>
</table>
<hr/>
<table>
<tr>
<th>row#</th>
<th>column1</th>
<th>column2</th>
<th>column3</th>
</tr>

<?php 
    $myFirstArray = array(
        array('foo1','Bar1','Baz1'),
        array('foo2','Bar2','Baz2'),
        array('foo3','Bar3','Baz3'),
        array('foo1','Bar1','Baz1'),
    );
    foreach($myFirstArray as $x => $x_value){
        //echo $x .'...'.$x_value[0].'</br>';
        if($x%2){
            $class='green';
        } else {
            $class='red';
        }
        echo "<tr class='$class'>";
            echo "<td>";
            echo $x;
            echo "</td>";
        foreach($x_value as $column => $column_value){
            echo "<td>";
            echo $column_value;
            echo "</td>";
        }
        echo "</tr>";
    }

    ?>
</table>

<?php
    // echo "<pre>";
    // print_r($myFirstArray);
    // echo "</pre>";
?>
    </h1>
</body>
</html>
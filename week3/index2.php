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
<p><h1>For loop</h1></p>
    <?php 
    for($count=1;$count <= 10 ; $count++) {
        echo $count . '</br>';
    }
    ?>
    <hr/>
    <p><h1>While loop</h1></p>
    <?php
    $count = 1;
    while($count <= 10 ){
        echo $count . '</br>';
        $count++;
    } 
    ?>
    <hr/>
    <p><h1>Do...While loop</h1></p>
    <?php
    $count = 1;
    do {
        echo $count . '</br>';
        $count++;
    }
    while($count <= 10);
    ?>
    <hr/>
    <table border=solid;>
    <th>row#</th><th>column2</th>
    <?php
    $rows=10;
    for($row=1;$row<$rows;$row++){
        echo "<tr>
                <td>
                $row
                </td>
                <td>
                col 2
                </td>
            </tr>";
    }
    ?>
    </table>
    <hr/>
    <table border=solid;>
    <tr>
        <?php
        $columns=10;
        for($column=1;$column<=$columns;$column++){
                        echo"<th>
                        $column
                        </th>";
                    }
        ?>     
    </tr>    
    <?php
        $rows=5;
        for($row=1;$row<$rows;$row++){
            echo "<tr>";
                for($column=1;$column<=$columns;$column++){
                    echo"<td class='";
                    echo $column%2 == 0 ? "red" : "green";
                    echo "'>";
                    echo "<div><h1>".($column == 1 ? "$row" : $column%5)."</div></h1>";
                    echo"</td>";
                }
            echo "</tr>";
        }
    ?>
    </table>
    <hr/>
    <table border=solid;>
    <tr>
    <?php
    $columns=5;
    for($column=1;$column<=$columns;$column++){
                    echo"<th>
                    $column
                    </th>";
                }
    ?>     
    </tr>    
    <?php
        $rows=6;
        for($row=1;$row<$rows;$row++){
            echo "<tr>";
                for($column=1;$column<=$columns;$column++){
                    $foo = $column%$rows == $row ? "red" : "green";
                    $content = "<div><h1>($row , $column)</h1></div>";
                    echo"<td class='$foo'>";
                    echo $content;
                    echo"</td>";
                }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>

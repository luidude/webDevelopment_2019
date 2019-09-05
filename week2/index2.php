<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<form action="./index2.php" method="post">
        <p>
            <label for="input1">Input 1</label>
            <input type="text" name="input1" id="input1">
        </p>
        <p>
            <label for="input2">Input 2</label>
            <input type="text" name="input2" id="input2">
        </p>
        <p>
            <input type="submit" value="submit">
        </p>
</form>


    <?php
        $story = " Foo ".$_POST['input1']." Bar ".$_POST['input2'];
        echo $story;
        
        echo"<pre>";
        echo'</br> Form variables: $_POST :';
        print_r($_POST);
        echo"</br>";
        echo $_POST['input1'];
        echo"</br>";
        echo $_POST['input2'];
        echo"</pre>";
    ?>

</body>
</html>
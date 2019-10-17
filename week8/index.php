<!DOCTYPE html>
<html>
<body>

<?php require_once 'my_functions.php'; 
$optionList = array("option1" => "option1", "option2"=>"option2");
$optionList2 = array("optionA" => "optionA", "optionB"=>"optionB");
?>
<form action="./" method="post">
<?php
//This function only does one thing. Not to useful.
writeMsg();
echo "<hr>";

//This function accepts one arguement.
writeMsgWithInput('Today is rainy.');
echo "<hr>";

//this function has defualt value if nothing is passed in.
writeMsgWithInput();
echo "<hr>";

echo createDropDown("FOO",$optionList,"You can select one of these:");
echo "</br>";
echo createDropDown("Bar",$optionList2,"You can select one of these:");
echo "<hr>";
echo createBoxes("fooBox",$optionList,"You can check these:");
echo "</br>";
echo createBoxes("BarBox",$optionList2,"You can check these:");
echo "<hr>";
echo createRadioButtons("fooRadios",$optionList,"You can radio these:");
echo "</br>";
echo createRadioButtons("BarRadios",$optionList2,"You can radio these:");
?>
<hr>
<input type="submit" value="Submit">
</form>
<?php
if (sizeof($_POST)) {
    echo"<pre>";
    print_r($_POST);
    echo"</pre>";
}
?>
</body>
</html>

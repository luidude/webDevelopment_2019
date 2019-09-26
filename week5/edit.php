<div>
<?php
if (isset($_POST)) {
    print_r($_POST);
} 

if (isset($_REQUEST)) {
    print_r($_REQUEST);
} 

echo "</br>ID passed to this page :".$_REQUEST['id'];
?>
</div>
<pre>
<?php
if (count($_POST)) {
    print_r(count($_POST));
} 

if (isset($_REQUEST)) {

    print_r($_REQUEST);
} 
?>
</pre>
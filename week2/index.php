<!DOCTYPE html>
<html>
<header>
    <title>Mad Libs</title>
</header>

<body>
    <h1> My madlib! </h1>
    <form action="./" method="post">
        <p>
            <label for="animal1">Animal</label>
            <input type="text" name="animal1" id="animal1">
        </p>
        <p>
            <label for="animal2">Animal</label>
            <input type="text" name="animal2" id="animal2">
        </p>
        <p>
            <label for="adjective1">Adjective</label>
            <input type="text" name="adjective1" id="adjective1">
        </p>
        <p>
            <label for="color">Color</label>
            <input type="text" name="color" id="color">
        </p>
        <p>
            <label for="verb1">Verb</label>
            <input type="text" name="verb1" id="verb1">
        </p>
        <p>
            <label for="adjective2">Adjective</label>
            <input type="text" name="adjective2" id="adjective2">
        </p>
        <p>
            <input type="submit" value="submit">
        </p>
    </form>
    <?php
    /*
    $story = "<h2>The %s %s %s %ss over the %s %s.</h2>";
    $out = sprintf(
        $story,
        $_POST["adjective1"],
        $_POST["color"],
        $_POST["animal1"],
        $_POST["verb1"],
        $_POST["pronoun1"],
        $_POST["animal2"]
    );
    */
    $adjective1 = $_POST["adjective1"];
    $color = $_POST["color"];
    $animal1 = $_POST["animal1"];
    $verb1 = $_POST["verb1"];
    $adjective2 = $_POST["adjective2"];
    $animal2 = $_POST["animal2"];

    $out = "<h2>The $adjective1 $color $animal1 $verb1 over the $adjective2 $animal2.</h2>";

    if (sizeof($_POST) > 0) {
        echo $out;
    } else {
        echo "<h2>Please fill out form</h2>";
    }
    ?>
    <pre>
    <?php
    if ($_REQUEST[debug] == 1) {
        print_r($_POST);
        print_r($_REQUEST);
    }
    ?>
    </pre>
</body>

</html>
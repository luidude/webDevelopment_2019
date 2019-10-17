<?php
    function writeMsg() {
        echo "<h1>Week 8: Functions make our life easier!</h1>";
    }

    function writeMsgWithInput($input='Hello World!') {
        echo "<h1>$input</h1>";
    }

    function createDropDown($name,$optionsList,$labelText){
        // <label for="dropdown">You can select one of these</label>
        // <select name="dropdown">
        //   <option value="first">First</option>
        //   <option value="second">Second</option>
        //   <option value="third">Third</option>
        // </select>
        $label = "<label for=\"dropdown\">$labelText</label>";
        $options = "";
        foreach($optionsList as $key => $value ) {
            $options .= "<option value=\"$key\">$value</option>";
        }
        $dropDown = $label." <select name=\"$name\">\"$options\"</select>";
        return $dropDown;
    }
    function createBoxes($name,$optionsList,$labelText){
        /*
          <label for="boxes">You can check these:</label>
          <input type="checkbox" name="boxes" value="first">
          <label for="first">First</label>
          <input type="checkbox" name="boxes"  value="second">
          <label for="second">Second</label>
          <input type="checkbox" name="boxes" value="third">
          <label for="third">Third</label>
         */
        $label = "<label for=\"$name\">$labelText</label>";
        $options = "";
        foreach($optionsList as $key => $value ) {
            $options .= "<input type=\"checkbox\" name=\"$key\" value=\"$value\">
            <label for=\"$value\">$value</label>
            ";
        }
        return $label.$options;
    }
    function createRadioButtons($name,$optionsList,$labelText){
        /*
        <label for="radio">You can select one of these:</label>
        <input type="radio" name="radio" value="true">
        <label for="true">TRUE</label>
        <input type="radio" name="radio" value="false">
        <label for="false">FALSE</label>
        */
        $label = "<label for=\"$name\">$labelText</label>";
        $options = "";
        foreach($optionsList as $key => $value ) {
            $options .= "<input type=\"radio\" name=\"$name\" value=\"$value\">
            <label for=\"$value\">$value</label>
            ";
        }
        return $label.$options;
    }
?>
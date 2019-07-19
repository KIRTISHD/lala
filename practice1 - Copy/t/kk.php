<?php

$iname = $_POST["name"];
$iprice = $_POST["price"];

echo '<h2> INSIDE CART </h2>
        ItemName = '.$iname.'
        ItemPrice = '.$iprice.'



        <br/><br/>
        
        No of Quantities:<input type="number" value="Increase Quantity" name="ic"> <br/>

        <input type="button" value="Submit" name="sub"> <br/>

        '


?>

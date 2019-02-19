<?php
/**
 * Created by PhpStorm.
 * User: nickh
 * Date: 19/02/2019
 * Time: 18:37
 */



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Hello Planet Selector</h2>
<form action="helloPrinter.php" method="get">
    <p>Where would you like to say hello too?</p>
    <input type="radio" name="planet" value="Earth" id="earth" checked/>
    <label for="earth">Earth</label><br/><br/>

    <input type="radio" name="planet" value="Mars" id="mars"/>
    <label for="mars">Mars</label><br/><br/>

    <input type="radio" name="planet" value="Pluto" id="pluto"/>
    <label for="pluto">Pluto</label><br/><br/>

    <input type="submit" value="Submit Choice of Planet">
</form>
</body>
</html>
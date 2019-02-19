<?php
/**
 * Created by PhpStorm.
 * User: nickh
 * Date: 19/02/2019
 * Time: 19:52
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h2>Enter username and password to login</h2>

<form action="checkLogin.php" method="post">

    <label for="username">Username: </label>
    <input type="text" name="username" id="username" size="20" required/>
    <br/><br/>

    <label for="password">Password: </label>
    <input type="password" name="password" id="password" size="20" required/>
    <br/><br/>

    <input type="submit" value="Login"/>

</form>

</body>
</html>

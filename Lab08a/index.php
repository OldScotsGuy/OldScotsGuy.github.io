<?php
/**
 * Created by PhpStorm.
 * User: nickh
 * Date: 26/02/2019
 * Time: 19:14
 */

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP login Form Without Session</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>

    <body>
        <h1>PHP Login Form Without Session</h1>

        <div class="loginBox">
            <h3>Login Form</h3>
            <br><br>
            <form method="post" action="login.php">
                <label for="username">Username:</label><br>
                <input type="text" name="username" id="username" placeholder="Username" size="30" maxlength="50" required /><br><br>
                <label for="password">Password:</label><br>
                <input type="text" name="password" id="password" placeholder="Password" size="30" maxlength="50" required /><br><br>
                <input type="submit" name="submit" value="Login" />
            </form>
            <div class="error"><?php //echo $error; ?><?php //echo $username; echo $password; ?></div>
        </div>
    </body>

</html>

<?php
/**
 * Created by PhpStorm.
 * User: nickh
 * Date: 19/02/2019
 * Time: 19:59
 */

session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if (($username === 'User') && ($password == 'Password')) {
    $_SESSION['Username'] = $username;
    $_SESSION['access_level'] = 'standard_user';
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
    <h2>Result of Login Check:</h2>
    <?php
    displayAccessLevelInformation($_SESSION['access_level']);
    ?>
    </body>
    </html>

<?php
function displayAccessLevelInformation($access_level) {
    if ($access_level == "standard_user") {
        echo "<p>You are currently logged in as a standard user</p>";
    } elseif (
        $access_level == "root") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    } else {
        echo '<p>Login failure. Please <a href="login.php">try again.</a></p>';
    }
}

?>
<?php
session_start();
/**
 * Created by PhpStorm.
 * User: 1813014
 * Date: 25/02/2019
 * Time: 11:52
 */

include("dbConnect.php");

if (empty($_POST['username']) || empty($_POST['password'])) {
    echo "Both field are required";
} else {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "SELECT uid FROM user WHERE username='" . $username . "' and password = '" . $password . "'";

    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Location: home.php");
    } else {
        echo "Incorrect username and password.";
    }
}

?>



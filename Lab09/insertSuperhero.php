<?php
/**
 * Created by PhpStorm.
 * User: 1813014
 * Date: 04/03/2019
 * Time: 11:25
 */
include("dbConnect.php");
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$superpower = $_POST['superpower'];

$query = "INSERT INTO superheros (firstName, lastName, mainSuperpower) VALUES ('".$firstName."','". $lastName."','".$superpower."')";

if (mysqli_query($db, $query)) {
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($db);
}

header("location:index.php");
?>
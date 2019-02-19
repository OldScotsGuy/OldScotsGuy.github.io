<?php
/**
 * Created by PhpStorm.
 * User: nickh
 * Date: 19/02/2019
 * Time: 19:11
 */
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$gender = $_POST['gender'];
$superpower = $_POST['superpower'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero</title>
</head>
<body>
<h2>Superhero Application Summary Page</h2>
<p>Applicant details as follows:</p>
<p>Name: <?php echo $firstName . " " . $lastName; ?></p>
<p>Gender: <?php echo $gender; ?></p>
<p>Superpower:</p>
<p><?php echo $superpower; ?></p>
</body>
</html>

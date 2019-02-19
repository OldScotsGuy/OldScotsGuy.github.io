<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: nickh
 * Date: 19/02/2019
 * Time: 19:22
 */

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
?>
    <h2>Superhero Application Form</h2>
    <form action="superHeroSummary.php" method="post">
        <label for="firstname">Enter your first name</label>
        <input type="text" name="firstname" id="firstname" size="20" maxsize="20" required>
        <br/><br/>

        <label for="lastname">Enter your first name</label>
        <input type="text" name="lastname" id="lastname" size="20" maxsize="20" required>
        <br/><br/>

        <p>Enter Gender</p>
        <input type="radio" name="gender" id="male" value="Male"/>
        <label for="male">Male</label>
        <br/>

        <input type="radio" name="gender" id="female" value="Female"/>
        <label for="female">Female</label>
        <br/><br/>

        <textarea name="superpower" id="superpower" rows="5" cols="40" required>Enter superpower details here</textarea>
        <br/><br/>

        <input type="submit" value="Submit Application"/>
    </form>

<?php
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // execute if requested using HTTP POST Method
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $gender = $_POST['gender'];
    $superpower = $_POST['superpower']; ?>
    <h2>Superhero Application Summary Page</h2>
    <p>Applicant details as follows:</p>
    <p>Name: <?php echo $firstName . " " . $lastName; ?></p>
    <p>Gender: <?php echo $gender; ?></p>
    <p>Superpower:</p>
    <p><?php echo $superpower; ?></p>
<?php
} else {
    print("<h1>Really don't know how you got here</h1>");
}
?>
</body>
</html>


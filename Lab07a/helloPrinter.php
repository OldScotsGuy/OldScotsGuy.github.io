<?php
/**
 * Created by PhpStorm.
 * User: nickh
 * Date: 19/02/2019
 * Time: 18:47
 */
$planet = $_GET['planet'];
$message = "<p>Hello " . $planet . "</p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Hello to Multiple Worlds</h2>
<?php echo $message; ?>
</body>
</html>

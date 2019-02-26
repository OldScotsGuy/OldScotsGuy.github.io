<?php
session_start();
/**
 * Created by PhpStorm.
 * User: nickh
 * Date: 26/02/2019
 * Time: 19:34
 */
require_once "dbConnect.php";
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>Hello</h1>
<p>Username: <?php echo $_SESSION['username']; ?></p>
<p>Password: <?php echo $_SESSION['password']; ?></p>
<h3>Users Are:</h3>
<ul>
<?php
$sql = "SELECT * FROM user";

$result = mysqli_query($db,$sql);

while ($row = $result->fetch_array()) {
    echo '<li>' . $row['username'] . '</li>';
}

?>
</ul>
</body>
</html>
<?php
$_SESSION = array();
session_destroy();
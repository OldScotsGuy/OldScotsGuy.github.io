<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Superhero System</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System </h1>
    <h2>Superhero Home Page</h2>
</header>
<p>What would you like to do?</p>
<ul>
    <li><a href="superheroForm.html">Insert a Superhero</a></li>
    <li><a href="displaySuperheros.php">Dislay all Superhero</a></li>
    <li><a href="battle.php">Insert a Battle</a></li>
    <li><a href="dislayBattles.php">Display All Battles</a></li>
    <ul>
        <?php
        include ("dbConnect.php");
        $query = "SELECT * FROM superheros";
        $result = $db->query($query);
        while ($row = $result->fetch_array()) {
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $id = $row['superheroID'];
            echo '<li><a href="displayBattles.php?id=' . $id . '">Battles for ' . $firstname . ' ' . $lastname . '</a></li>';
        }
        ?>
    </ul>
</ul>


</body>
</html>
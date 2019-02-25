<?php
/**
 * Created by PhpStorm.
 * User: 1813014
 * Date: 25/02/2019
 * Time: 10:18
 */
include("dbConnect.php");

$sql_query = "SELECT * FROM marvelmovies WHERE productionStudio = 'Marvel Studios'";
$result = $db->query($sql_query);

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Read Marvel Database</title>
    </head>
    <body>
    <h2>Marvel Database Contents</h2>
    <p>Table contents</p>
    <table>
        <thead>
        <tr><th>Year</th><th>Title</th><th>Studio</th><th>Notes</th></tr>
        </thead>
        <tbody>
        <?php
        while ($row = $result->fetch_array()) {
            $output = "<tr><td>" . $row['yearReleased'] . "</td><td>" . $row['title'] . "</td>";
            $output .= "<td>" . $row['productionStudio'] . "</td><td>" . $row['notes'] . "</td></tr>";
            echo $output;
        }

        ?>
        </tbody>
    </table>
    </body>
    </html>
<?php
$result->close();
$db->close;
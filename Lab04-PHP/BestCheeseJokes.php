<?php
/**
 * Created by PhpStorm.
 * User: nickh
 * Date: 09/02/2019
 * Time: 11:54
 */

require("objects/cheesePage.php");

$HomePage = new \pages\cheesePage();

$HomePage->content = "
            <section class=\"grid-100\">
            <h2>The Best Cheese Jokes</h2>
            </section>
            
            <section class=\"grid-33\">
            <img src=\"assets/images/gouda.png\" alt=\"Gouda Cheese\" width =\"300\" height=\"200\" />
            <p>Some cheese maybe feta than this, but this one is still quite gouda</p>
            </section>
            
            <section class=\"grid-33\">
            <img src=\"assets/images/mascarpone.png\" alt=\"Mascarpone Cheese\" width =\"300\" height=\"200\" />
            <p>This cheese is really good if you are looking to hide livestock</p>
            </section>

            <section class=\"grid-33\">
            <img src=\"assets/images/brie.png\" alt=\"Brie Cheese\" width =\"300\" height=\"200\" />
            <p>At the end of the night all that is left is deBrie</p>
            </section>";

$HomePage->Display();

?>
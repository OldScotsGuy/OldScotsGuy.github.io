<?php
/**
 * Created by PhpStorm.
 * User: nickh
 * Date: 09/02/2019
 * Time: 11:40
 */

require("objects/cheesePage.php");

$FavouriteCheese = new \pages\cheesePage();

$FavouriteCheese->content = '
            <section class="grid-100">
            <h2>My Favourite Cheese</h2>
            <p>My favourite cheeses in order are:</p>
            <ul>
                <li>Chedder</li>
                <li>Brie</li>
                <li>Gouda</li>
            </ul>
            </section>';

$FavouriteCheese->Display();

?>
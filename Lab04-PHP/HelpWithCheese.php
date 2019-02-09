<?php
/**
 * Created by PhpStorm.
 * User: nickh
 * Date: 09/02/2019
 * Time: 12:16
 */

require("objects/cheesePage.php");

if (!isset($HelpWithCheese)) {
    $HelpWithCheese = new \pages\cheesePage();
}

$HelpWithCheese->content = '

            <h2>Help With Cheese</h2>
                <form action="#" method="post" id="formlayout">
                
                    <!-- Labels -->
                    <section class="grid-20">
                        <label for="name">Name:</label>
                        <br><br>
                        <label for="email">Email:</label>
                        <br><br>
                        <label for="favcheese">Favourite Cheese</label>
                        <br><br>
                        <label for="problem">What is your cheese problem?</label>
                    </section>
                    
                    <!-- Input fields -->
                    <section class="grid-80">
                        <input type="text" name="name" size="25" maxlength="20" required/>
                        <br><br>
                        <input type="email" name="email" size="25" maxlength="20" required/>
                        <br><br>
                        <input type="radio" name="favcheese" value="feta" />
                        Feta
                        <input type="radio" name="favcheese" value="gouda" />
                        Gouda
                        <br><br>
                        <textarea name="problem", rows="10" cols="50">Enter your cheese problem here
                        </textarea>
                    </section>
                    <input type="submit" value="Submit"/>
                </form>';

$HelpWithCheese->title ="Help With Cheese";

$HelpWithCheese->Display();

?>
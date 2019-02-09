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
            <div class="container">
                <form action="#" method="post" id="formlayout">
                
                    <!-- NAME -->
                    <div class="row">
                        <div class="col-25">
                            <label for="name"><p>Name:</p></label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="name" size="25" maxlength="20" required/>
                        </div>
                    </div>
                    
                    <!-- EMAIL -->
                    <div class="row">
                        <div class="col-25">
                            <label for="email"><p>Email:</p></label>
                        </div>
                        <div class="col-75">
                            <input type="email" name="email" size="25" maxlength="20" required/>
                        </div>
                    </div>
                    
                    <!-- FAVOURITE CHEESE -->
                    <div class="row">
                        <div class="col-25">
                            <label for="favcheese"><p>Favourite Cheese</p></label>
                        </div>
                        <div class="col-75">
                            <input type="radio" name="favcheese" value="feta" />
                            <span id="radio">Feta</span>
                            <input type="radio" name="favcheese" value="gouda" />
                            <span id="radio">Gouda</span>
                        </div>
                    </div>
                    
                    <!-- CHEESE PROBLEM -->
                    <div class="row">
                        <div class="col-25">
                            <label for="problem"><p>What is your cheese problem?</p></label>
                        </div>
                        <div class="col-75">
                            <textarea name="problem", rows="10" cols="50">Enter your cheese problem here
                            </textarea>
                        </div>
                    </div>
                    
                    <!-- SUBMIT -->
                    <div class="row">
                        <input type="submit" value="Submit"/>
                    </div>
                </form>
            </div>';

$HelpWithCheese->title ="Help With Cheese";

$HelpWithCheese->Display();

?>
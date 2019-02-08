<?php
/**
 * Created by PhpStorm.
 * User: nickh
 * Date: 08/02/2019
 * Time: 19:35
 */

namespace pages;

class cheesePage
{
    // class Page's attributes
    public $content;
    public $title = "World of Cheese";
    public $keywords = "Cheese";
    public $buttons = array("Hone"   => "index.php",
                            "The History of Cheese"  => "HistoryOfCheese.php",
                            "My Favourite Cheese" => "MyFavouriteCheese.php",
                            "Best Cheese Jokes" => "BestCheeseJokes.php",
                            "Help With Cheese" => "HelpWithCheese.php"
    );

    // Generalised setter
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function Display()
    {
        echo "<!DOCTYPE html>\n<html lang=\"en\">\n";
        $this -> DisplayHead();
        $this -> DisplayBody();
        echo "</html>\n";
    }

    public function DisplayHead() {
        echo "<head>\n";
        echo "<meta charset=\"UTF-8\" name=\"keywords\" content=\"".$this->keywords."\"/>";
        echo "<title>".$this->title."</title>";
        ?>
        <link href="assets/CSS/styles.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="assets/CSS/unsemantic-grid-responsive-tablet.css">
        <?php
        echo "</head>\n";
    }

    public function DisplayBody() {
        echo "<body>\n";
        $this -> DisplayHeader();
        $this -> DisplayMain();
        $this -> DisplayFooter();
        echo "</body>\n";
    }

    public function DisplayHeader()
    {
        ?>
        <!-- page header -->
        <header class="grid-container">
            <section class="grid-100">
                <img src="assets/images/cheese.png" alt="The Big Cheese" id="logo"/>
                <h1>The Magical World of Cheese!</h1>
            </section>
            <nav class="grid-100">
                <ul>
        <?php
        while (list($name, $url) = each($buttons)) {
            echo "<li><a href=\"<?=$url?>\"><div><span><?=$name?></span></div></a></li> ";
        }
        ?>
                </ul>
            </nav>
        </header>
        <?php
    }

    public function DisplayMain() {
        echo $this->content;
    }

    public function DisplayFooter()
    {
        ?>
        <!-- page footer -->
        <footer>
            <hr>
            <p><strong>(c)2016 The Mice People</strong></p>
        </footer>
        <?php
    }
}
?>
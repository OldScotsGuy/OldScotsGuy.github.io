<?php
// Age related code
// ================
$myage = 31;
$ableToBuy = "You can buy: ";

if ($myage <= 16) {
    $ableToBuy .= "nothing";
} else {
    if ($myage > 16){
        $ableToBuy .= "specs ";
    }
    if ($myage > 18) {
        $ableToBuy .= "mugs ";
    }
    if ($myage > 21) {
        $ableToBuy .= "sausage rolls ";
    }
}

// Product related code
// ====================
$wantedGoods='mugs';
switch ($wantedGoods) {
    case "specs" :
        $message = " you have to be over 16";
        break;
    case "mugs" :
        $message = " you have to be over 18";
        break;
    case "sausage rolls" :
        $message = " you have to be over 18";
        break;
    default:
        $message = " there are no age restrictions on that good";
}

// Arrays
// ======
$provisionedActivities = array("Specs", "Mugs", "Sausage Rolls");
$items = "<p><ol><li>Mugs are being modified to the friendly alternative of hugs</li>";
$items .= "<li>Sausage Rolls are to be removed.</li></ol></p>";

foreach ($provisionedActivities as $item) {
    $items .= "<p>" . $item . "</p>";
}

// Armageddon hits Aberdeen
// ========================
$output = null;
for ($i = 1; $i < 32 ; $i++) {
    $output .= "<p>On Day " . $i;
    $new = null;
    if ($i % 2 == 0) {
        $new .= " Specs are available ";
    }
    if ($i % 3 == 0) {
        $new .= " Mugs are available ";
    }
    if ($i % 4 == 0) {
        $new .= " Sausage Rolls are available ";
    }
    if (!isset($new)) {
        $new = " No products available";
    }
    $output .= $new . "</p>";
}

// Limited Goods Supply
// ====================
$day = 1;
$numSpecs = 7;
$numMugs = 7;
$numSausageRolls = 7;
$goods = null;
do  {
    $goods .= '<p>On Day ' . $day;
    $num = rand(0,3);
    switch ($num) {
        case ($num <= 1.0) :
            $goods .= ' Specs are available';
            $numSpecs -= 1;
            break;
        case ($num <= 2.0) :
            $goods .= ' Mugs are available';
            $numMugs -= 1;
            break;
        case ($num <= 3.0) :
            $goods .= ' Sausage Rolls are available';
            $numSausageRolls -= 1;
            break;
    }
    $goods .= '</p>';
    $day += 1;
}
while (($numSpecs > 0) && ($numMugs > 0) && ($numSausageRolls > 0));

// Lottery Code ...
// ================
$names = array("Helen", "Lex", "Mike", "Enricho", "Pauline", "Tom", "Dick", "Harry", "Sally", "Harriet");
$sortedNames = $names;
sort($sortedNames);
$first = (int) round(rand(0,(count($names)-1)));
$firstWinner = "<p> The first winner is: " . strtoupper($names[$first]) . "</p>";
$secondNames = $names;
unset($secondNames[$first]);
$second = (int) round(rand(0,(count($secondNames)-1)));
$secondWinner = "<p> The second winner is: " . strtoupper($secondNames[$second]) . "</p>";
$thirdNames = $secondNames;
unset($thirdNames[$second]);

// Goods Function
// ==============
function reward($noSpec, $noMugs, $noSausageRolls) {
    return 10 * (($noSpec * $noMugs * $noSausageRolls)/2);
}

function wantedBanner($name, $noSpec, $noMugs, $noSausageRolls) {
    $banner = "<p><strong>Wanted:</strong> ". $name . "</p>";
    $banner .= "<p>Known to be in posession of:</p>";
    $banner .= "<p>Specs: " . $noSpec . "</p>";
    $banner .= "<p>Mugs:" . $noMugs . "</p>";
    $banner .= "<p>Sausage Rolls: " . $noSausageRolls . "</p>";
    $banner .= "<p>Award for capture: £" . reward($noSpec, $noMugs, $noSausageRolls) . "</p><br><br>";
    return $banner;
}

$banner1 = wantedBanner("Nick", 2, 5, 1);
$banner2 = wantedBanner("Jake", 4, 2, 10);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Aberdeen Age Related Purchase Opportunities</h2>
<p><?php
        echo $ableToBuy;
    ?></p>
<h2>Aberdeen Goods Restrictions</h2>
<p> <?php
        echo "To buy " . $wantedGoods . $message;
    ?>
</p>
<h2>Aberdeen Goods Simplication</h2>
<?php echo $items; ?>
<h2>Aberdeen Goods Armageddon</h2>
<?php echo $output; ?>
<h2>Aberdeen Goods Random Supply</h2>
<?php echo $goods; ?>
<h2>Aberdeen Goods Lottery</h2>
<?php echo '<p>Names array: ' . implode(" ", $names) . '</p>'; ?>
<?php echo '<p>Sorted names array: ' . implode(" ", $sortedNames) . '</p>'; ?>
<?php echo $firstWinner; ?>
<?php echo '<p>Second names array: ' . implode(" ", $secondNames) . '</p>'; ?>
<?php echo $secondWinner; ?>
<?php echo '<p>Third names array: ' . implode(" ", $thirdNames) . '</p>'; ?>
<h2>Aberdeen Wanted List</h2>
<?php echo $banner1; ?>
<?php echo $banner2; ?>
</body>
</html>

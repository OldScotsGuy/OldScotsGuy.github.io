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
<h2>Aderdeen Goods Simplication</h2>
<?php echo $items; ?>
<h2>Aderdeen Goods Armageddon</h2>
<?php echo $output; ?>
</body>
</html>

<?php
$months = 24;
$car_price_new = 30000;
$depraciation = 2;
$i = 0;
$car_price_used = 0;
$depr_perc = 0;

for ($i = 1; $i <= $months; $i++) {
    $nuvertejimas = $car_price_new * $depraciation / 100;
    $car_price_used += $nuvertejimas;
}
$depr_perc = round($car_price_used / $car_price_new * 100);

$h1 = 'Kiek vertas grabas';
$h2 = "Naujos mašinos kaina: $car_price_new";
$h3 = "Po $months men, masinos verte bus: $car_price_used eur.";
$h4 = "Masina nuvertes $depr_perc proc."
?>
<html>
    <head>
        <title>Loops</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <h4><?php print $h4; ?></h4>
    </body>
</html>    
<?php
$distance = rand(500, 2000);
$consumption = 7.5;
$price_1 = 1.3;
$fuel_total = round($distance / $consumption, 2);
$price_trip = round($fuel_total * $price_1, 2);
$my_money = 100;

$h1 = 'Keliones skaiciuokle';
$li_1 = "Nuvaziuota distancija: $distance";
$li_2 = "Sunaudota $fuel_total l. kuro.";
$li_3 = "Kaina: $price_trip pinigu";
$iperkama = 'Isvada: Kelione iperkama';
$neiperkama = "Isvada: Kelione neiperkama';"
?>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>V-1 užduotis</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <ul>
            <li><?php echo $li_1; ?></li>
            <li><?php echo $li_2; ?></li>
            <li><?php echo $li_3; ?></li>
        </ul>
        <hr>
        <p><?php
if ($my_money > $price_trip) {
    print $iperkama;
} else {
    print $neiperkama;
}
?></p>
    </body>
</html>
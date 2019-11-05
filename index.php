<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$pavyko = rand(0, 3);
$katasuniai = 0;

for ($z = 0; $z < $kates; $z++) {       // ima kates ir tikrina su sunim
    for ($x = 0; $x < $sunys; $x++) {   // tikrina suns pajegumus
        $pavyko = rand(0, 1);           // patikrina ar pavyko
        if ($pavyko) {                  // jei pavyko, prideda katasuni
            $katasuniai++;
            break;                      // nutraukia 8 eilute
        }
    }
}

$h1 = 'Katašunių išeiga';
$h2 = "Dalyvavo $kates katės ir $sunys šunys";
$h3 = "Katašunių išeiga: $katasuniai";
?>
<html>
    <head>
        <title>2 ciklas</title>
    </head>
    <body>
        <h1><?php echo $h1; ?></h1>
        <h2><?php echo $h2; ?></h2>
        <h3><?php echo $h3; ?></h3>
    </body>
</html>
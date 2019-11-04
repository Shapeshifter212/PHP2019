<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);
$miegosi = 'nemiegosi';
$img = 'https://pics.me.me/www-wiocha-pl-0-07-2004-happy-wife-happy-life-31594936.png';

if ($grizai_velai && !$grizai_isgeres) {
    $situacija = 'Grizai velai';
} else if (!$grizai_velai && $grizai_isgeres) {
    $situacija = 'Grizai isgeres';
} else if ($grizai_velai && $grizai_isgeres) {
    $situacija = 'Grizai velai ir isgeres';
    $miegosi = 'miegosi';
    $img = 'http://4.bp.blogspot.com/_un923qgN4h8/SnpnEzu0WLI/AAAAAAAAAXs/RctcWJGicjk/s400/angry-wife-funny5.jpg';
} else {
    $situacija = 'Nieko nepadarei';
}

$h1 = 'Buitine skaiciuokle';
$h2 = "Situacija: $situacija";
$h3 = "Isvada: $miegosi ant sofos";
?>
<html>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <img src="<?php print $img ?>">
    </body>
</html>
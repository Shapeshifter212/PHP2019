<?php
$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);
$h1 = 'Buitine skaiciuokle';

if ($grizai_velai && !$grizai_isgeres) {
    $h2 = 'grizai velai';
}
elseif (!$grizai_velai && $grizai_isgeres) {
    $h2 = 'grizai isgeres';
} 
elseif ($grizai_velai && $grizai_isgeres) {
    $h2 = 'grizai velai ir isgeres';
}
else {
    $h2 = 'neakltass';
}
?>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>3 užduotis</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
    </body>
</html>   
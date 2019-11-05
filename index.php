<?php
$sunny = rand(0,1);
$rainy = rand(0,1);

if ($sunny) {
    if ($rainy) {
        $h1 = 'Lietus su pragiedruliais';
        $class = 'bg-clear-rainy';
    }
    else {
        $h1 = 'Saulėta';
        $class = 'bg-sunny';
    }
}
    elseif {
    $clear = 1; } 
else{
    $cloudy = 1;
} 
if ($cloudy && $rainy) {
    $h1 = 'Stiprus lietus';
    $class = 'bg-cloudy-rainy';
} 
else {
    $h1 = 'Debesuota';
    $class = 'bg-cloudy';
} 
if ($clear && !$rainy) {
    
} 
else {
    
} 
?>
<html lang="en">
    <body> 
        <ul>
            <li><?php print $li_1; ?></li>
            <li><?php print $li_2; ?></li>
            <li><?php print $li_3; ?></li>
        </ul>
<html>
    <head>
        <style>
            .content {
                display: flex;
                flex-direction: row;
                align-items: center;
            }
            .bg-img {
                width: 150px;
                height: 150px;
                background-size: cover;
            }
            .bg-cloudy {
                background-image: url("https://cdn1.iconfinder.com/data/icons/weather-429/64/weather_icons_color-08-128.png")
            }
            .bg-sunny {
                background-image: url("https://cdn1.iconfinder.com/data/icons/weather-429/64/weather_icons_color-01-128.png");
            }
            .bg-cloudy-rainy {
                background-image: url("https://cdn1.iconfinder.com/data/icons/weather-429/64/weather_icons_color-11-128.png");
            }
            .bg-clear-rainy {
                background-image: url("https://cdn1.iconfinder.com/data/icons/weather-429/64/weather_icons_color-04-128.png");
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class="bg-img <?php print $class; ?>"></div>
            <h1><?php print $h1; ?></h1>
        </div>
    </body>
</html> 
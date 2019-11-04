<?php
$sunny = rand(0, 1);
​
if ($sunny) {
    $h1 = 'Sauleta';
    $class = 'bg-sunny';
} else {
    $h1 = 'Debesuota';
    $class = 'bg-cloudy';
}
?>
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
                background-image: url("https://icon-library.net/images/cloud-icon-png-transparent/cloud-icon-png-transparent-0.jpg")
            }
            .bg-sunny {
                background-image: url("https://images.vexels.com/media/users/3/145134/isolated/preview/46b65a02ff99e7bb4e84d4d3d627a729-sun-sharp-beams-icon-by-vexels.png");
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
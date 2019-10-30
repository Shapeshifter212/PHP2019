<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>X užduotis</title>
        <style>
            .bomb-<?php print date('s'); ?> {
                background-image: url(https://images-na.ssl-images-amazon.com/images/I/61V2cX4JqGL.png);
                background-size: cover;
                height: <?php print date('s'); ?>px;
                width: <?php print date('s'); ?>px;
            }
            .bomb-00 {
                background-image: url(https://images2.minutemediacdn.com/image/upload/c_fill,g_auto,h_1248,w_2220/f_auto,q_auto,w_1100/v1554933379/shape/mentalfloss/nuclear-bomb-dirty-470309868.jpg);
                height: 60vh;
                width: 60vh;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="bomb-<?php print date('s'); ?>"></div>
            <div><?php print date('s'); ?></div>   
        </div>
    </body>
</html>
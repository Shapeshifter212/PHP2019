<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>X užduotis</title>
        <style>
            .bomb {
                background-image: url(https://images-na.ssl-images-amazon.com/images/I/61V2cX4JqGL.png);
                background-size: cover;
                height: <?php print date('s'); ?>px;
                width: <?php print date('s'); ?>px;
            }
        </style>
    </head>
    <body>
        <div class="bomb"></div>
        <div><?php print date('s'); ?></div> 
    </body>
</html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>9b užduotis</title>
        <style>
            .imag-1 {background-image: url(https://upload.wikimedia.org/wikipedia/commons/2/2c/Alea_1.png);}
            .imag-2 {background-image: url(https://upload.wikimedia.org/wikipedia/commons/b/b8/Alea_2.png);}  
            .imag-3 {background-image: url(https://upload.wikimedia.org/wikipedia/commons/2/2f/Alea_3.png);}  
            .imag-4 {background-image: url(https://upload.wikimedia.org/wikipedia/commons/8/8d/Alea_4.png);}  
            .imag-5 {background-image: url(https://upload.wikimedia.org/wikipedia/commons/5/55/Alea_5.png);}  
            .imag-6 {background-image: url(https://upload.wikimedia.org/wikipedia/commons/f/f4/Alea_6.png);}  
            .kaulas {
                height: 112px;
                width:  112px;
            }
        </style>
    </head>
    <body>
        <div class="kaulas <?php print 'imag-' . rand(1, 6); ?>">

        </div>
    </body>
</html>
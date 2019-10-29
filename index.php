<html lang="en" dir="ltr">
    <head>
        <title><?php print 'PHP lydės ir ' . date('Y-m-d', strtotime('+1 day')); ?></title>
    </head>
    <body>
        <h1>
            <b>Justas</b> - HTML <?php print 'PHP su manim buvo ' . date('h:i:s', strtotime('-1 hour')); ?>
        </h1>
        <p> 
            <?php print date('y-m-d', strtotime('+1 year')) . ' ne už kalnų!'; ?> 
        </p>
    </body>
</html> 
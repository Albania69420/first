<!DOCTYPE html>
<html>
    <head>
        <title>PHP28</title>
    </head>
    <body>
        <?php
        $x = 25;
        $y = 35;
        $z = "25";
        var_dump($x == $z);
        echo("<br>");
        var_dump($x === $z);
        echo("<br>");
        var_dump($x != $y);
        echo("<br>");
        var_dump($x !== $z);
        echo("<br>");
        var_dump($x < $y);
        echo("<br>");
        var_dump($x > $y);
        echo("<br>");
        var_dump($x <= $y);
        echo("<br>");
        var_dump($x >= $y);
        ?>
    </body>
</html>
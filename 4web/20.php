<!DOCTYPE html>
<html>
    <head>
        <title>PHP20</title>
    </head>
    <body>
        <?php
        $handle = fopen("3.php", "r");
        var_dump($handle);
        echo "<br>";
        $link = mysqli_connect("localhost", "root", "");
        var_dump($link);
        ?>
    </body>
</html>
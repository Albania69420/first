<!DOCTYPE html>
<html>
    <head>
        <title>PHP17</title>
    </head>
    <body>
        <?php
        $colors = array("Red", "Green", "Blue");
        var_dump($colors);
        echo "<br>";
        $color_codes = array (
            "Red" => "#ff0000",
            "Green" => "#00ff00",
            "Blue" => "#0000ff"
        );
        var_dump($color_codes);
        ?>
    </body>
</html>
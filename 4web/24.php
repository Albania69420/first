<!DOCTYPE html>
<html>
    <head>
        <title>PHP24</title>
    </head>
    <body>
        <?php
        $my_str = 'If the facts do not fit the theory, change the facts.';
        str_replace("facts", "truth", $my_str, $count);
        echo "The text was replaced $count times.";
        ?>
    </body>
</html>
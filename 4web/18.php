<!DOCTYPE html>
<html>
    <head>
        <title>PHP18</title>
    </head>
    <body>
        <?php 
        class greeting {
            public $str = "Hello World!";
            function show_greeting(){
                return $this ->str;
            }
        }
        $message = new greeting;
        var_dump($message);
        ?>
    </body>
</html>
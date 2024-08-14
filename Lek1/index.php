<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>
        <?php
            // phpinfo();

            $txt = "Python";
            echo "I love $txt", "<br>";    
            echo "Vilken version: ", phpversion(), "<br>";

            include 'exc1.php';
            include 'exc2.php';
            include 'php_ovn_1.php';

        ?>
    </body>
</html>
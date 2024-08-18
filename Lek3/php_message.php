<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Message: <input type="text" name="fname">
            <input type="submit">
        </form>
        
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $message = $_POST['fname'];
                $file = 'messages.txt';

                file_put_contents($file, $message . PHP_EOL, FILE_APPEND | LOCK_EX);

                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } 

            if (file_exists("messages.txt")) {
                $myfile = fopen("messages.txt", "r");
                
                while (($line = fgets($myfile)) !== false) {
                    echo nl2br(htmlspecialchars($line));
                }

                fclose($myfile);
            } else {
                echo "No messages yet.";
            }
        ?>
    </body>
</html>

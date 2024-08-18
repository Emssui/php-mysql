<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign Up</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h3>Sign up</h3>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Username: <input type="text" name="fusername" required>
            <br />
            Password: <input type="password" name="fpassword" required>
            <br />
            <input type="submit" value="Sign Up">
        </form>

        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $fusername = $_POST['fusername'];
                $fpassword = $_POST['fpassword'];               
                
                $file = 'login.txt';
                $message = "Username: $fusername, Password: $fpassword";
                file_put_contents($file, $message . PHP_EOL, FILE_APPEND | LOCK_EX);

                header("Location: php_signin.php");
                exit();
            } 
        ?>
    </body>
</html>

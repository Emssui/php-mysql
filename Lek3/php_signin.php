<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign In</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h3>Sign in</h3>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Username: <input type="text" name="fusername" required>
            <br />
            Password: <input type="password" name="fpassword" required>
            <br />
            <input type="submit" value="Sign In">
        </form>

        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $fusername = $_POST['fusername'];
                $fpassword = $_POST['fpassword'];  
                $credentialsValid = false;
                $file = 'login.txt';

                if (file_exists($file)) {
                    $lines = file($file, FILE_IGNORE_NEW_LINES);

                    foreach ($lines as $line) {
                        $line = trim($line); 
                        $parts = explode(',', $line);

                        if (count($parts) == 2) {
                            $storedUsername = trim(str_replace('Username: ', '', $parts[0]));
                            $storedPassword = trim(str_replace('Password: ', '', $parts[1]));

                            if ($fusername === $storedUsername && $fpassword === $storedPassword) {
                                $credentialsValid = true;
                                break;
                            }
                        }
                    }
                }

                if ($credentialsValid) {
                    echo "Welcome, " . htmlspecialchars($fusername) . "! You have successfully signed in.";
                } else {
                    echo "Invalid username or password. Please try again.";
                }
            } 
        ?>
    </body>
</html>

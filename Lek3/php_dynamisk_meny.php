<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Change Background Color with PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <?php
            // Default background color
            $backgroundColor = "white";

            // Check if a color has been selected and set the background color
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($_POST['colorSelect'])) {
                    $backgroundColor = $_POST['colorSelect'];
                }
            }
        ?>
        <style>
            body {
                background-color: <?php echo htmlspecialchars($backgroundColor); ?>;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="colorSelect">Choose a background color:</label>
            <select name="colorSelect" id="colorSelect">
                <option value="white" <?php if($backgroundColor == "white") echo "selected"; ?>>Select a color</option>
                <option value="blue" <?php if($backgroundColor == "blue") echo "selected"; ?>>Blue</option>
                <option value="red" <?php if($backgroundColor == "red") echo "selected"; ?>>Red</option>
                <option value="green" <?php if($backgroundColor == "green") echo "selected"; ?>>Green</option>
            </select>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

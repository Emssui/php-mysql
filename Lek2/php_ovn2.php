<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ovn2</title>
</head>
<body>
    

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <br>
    Age: <input type="text" name="fage">
    <br>
    <input type="submit">
    </form>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Number 1: <input type="number" name="fnumber1">
    <br>
    Number 2: <input type="number" name="fnumber2">
    <br>
    <select name="fmath">
        <option  value="+">+</option>
        <option  value="-">-</option>
        <option  value="*">*</option>
        <option value="/">/</option>
    </select>
    <br>
    <input type="submit">
    </form>

    <?php 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    $age = $_POST['fage'];
    if (empty($name) || empty($age)) {
        echo "Name or age is empty" . "<br>";
    } else {
        echo $name . "<br>";
        echo $age . "<br>";

    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $number1 = $_POST['fnumber1'];
    $number2 = $_POST['fnumber2'];
    $math = $_POST['fmath'];
    if (empty($number1) || empty($number2)) {
        echo "numbers are empty";
    } else {
        switch($math) {
            case $math === "+":
                echo $number1 + $number2 . "<br>";
            break;
            case $math === "-":
                echo $number1 - $number2 . "<br>";
            break;
            case $math === "/":
                echo $number1 / $number2 . "<br>";
            break;
            case $math === "*":
                echo $number1 * $number2 . "<br>";
            break;
            default:
            echo "Empty numbers";
        }
    }
}

$text = "tomosart future crypto site";

        echo strlen($text) . "<br>";
        echo str_replace("future", "PAST", $text . "<br>");

        $str1 = "Future";
        $str2 = "Future";

        if($str1 === $str2) {
            echo "str1 och str2 är samma" . "<br>";
        }

        $myfile = fopen("tommensarts.txt", "r");

        // echo fread($myfile,filesize("tommensarts.txt"));


        // Uppg 7

        $day = "Monday";

        switch ($day) {
            case $day === "Monday":
                echo "<p>LEGDAY som början</p>";
            break;
            case $day === "Tisdag":
                echo "<p>day är Chest day på tisdag</p>";
            break;
            case $day === "Onsdag":
                echo "<p>Onsdag är claf day</p>";
            break;
            case $day === "Torsdag":
                echo "<p>New day så back day</p>";
            break;
            case $day === "Fredag":
                echo "<p>Arms day</p>";
            break;
            case $day === "Lördag":
                echo "<p>Lördag är restday</p>";
            break;
            case $day === "Söndag":
                echo "<p>Söndag är bulking day</p>";
            break;
            default:
                echo "<p>Invalid answer!</p>";
        }

        // Uppg 8

        $arr = array(2,1,5,6,3);
        sort($arr);

        $arrlength = count($arr);
        for($x = 0; $x < $arrlength; $x++) {
            echo $arr[$x];
            echo "<br>";
        }

        // Uppg 9 finns vid förra namnet

        // Uppg 10
    ?>
</body>
</html>
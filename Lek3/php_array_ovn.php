<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ovn</title>
</head>
<body>
    <?php
        // Uppg 1
        $code = array("C#", "Python", "Java", "Rust");

        // Uppg 2
        foreach($code as $x) {
            echo "<p>$x</p>";
        }

        // Uppg 3
        $pris = array(array("C#", 5, 14), array("Bulla", 1.50, 10), array("Kaka", 2.50, 12));

        foreach ($pris as $x) {
            foreach ($x as $num) {
                echo "$num, ";
            }
              echo "<br>";
        }

        // Uppg 4
        echo $pris[0][2] . "<br>"; 
        echo $pris[1][2] . "<br>"; 
        echo $pris[2][2] . "<br>"; 

        // Uppg 5
        $same = count($pris);
        echo "<p>$same</p>";

        // Uppg 6
        $total = 0;

        for($x = 0; $x <= 2; $x++) {
            $total += $pris[$x][2]; 
        }
        echo $total;

    ?>
</body>
</html>
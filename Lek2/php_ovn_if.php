<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ovn</title>
</head>
<body>
    <?php 
        $i = 1;
        $Kalle = "Svetsare";
        $x = 5;
        $today = date('D');

        if($i < 2) {
            echo "$i is larger than 2", "<br>";
        }

        if($Kalle === "Svetsare") {
            echo "<p>Kalle är en $Kalle</p>";
        } else if ($Kalle === "kock") {
            echo "<p>Kalle är en $Kalle</p>";
        } else if ($Kalle === "kodare") {
            echo "<p>Kalle är en $Kalle</p>";
        } else {
            echo "<p>Vet inte om Kalles yrke!</p>";
        }

        switch ($Kalle) {
            case $Kalle === "Svetsare":
                echo "<p>Kalle är en $Kalle</p>";
            break;
            case $Kalle === "kock":
                echo "<p>Kalle är en $Kalle</p>";
            break;
            case $Kalle === "kodare":
                echo "<p>Kalle är en $Kalle</p>";
            break;
            default:
                echo "<p>Vet inte om Kalles yrke!</p>";
        }
        
        if($x > 2 && $x < 10) {
            echo "<p>Variabeln x är $x och befinner sig mellan siffrorna 2-10</p>";
        }

        // date('D') skriver ut dagen
        echo date('D');

        if($today === "Fri"){
            echo "<p>Idag är det fredag</p>";
        } else if($today === "Sat"){
            echo "<p>Idag är det Lördag</p>";
        } else if($today === "Sun"){
            echo "<p>Idag är det Söndag</p>";
        } else if($today === "Mon"){
            echo "<p>Idag är det Måndag</p>";
        } else if($today === "Tue"){
            echo "<p>Idag är det Torsdag</p>";
        } else if($today === "Wed"){
            echo "<p>Idag är det Onsdag</p>";
        } else if($today === "Thu"){
            echo "<p>Idag är det Torsdag</p>";
        } else {
            echo "Ogiltigt värde!";
        }
    ?>
</body>
</html>
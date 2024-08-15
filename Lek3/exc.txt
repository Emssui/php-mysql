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
        <?php 
            // Uppg 1
            
            $x = 0;

            while($x < 7) {
                if($x === 7) break;
                echo "<p>Hej på dig!</p>";
                $x++;
            }

            // Uppg 2 and 3
            $i = 0;
            $resultat = 0;

            while($i < 11) {
                if($i === 11) break;
                if($i > 0) { 
                    $resultat .= $i;
                }
                $i++;
            }

            echo "<p>$resultat</p>";

            $forresultat = 0;

            for($x = 0; $x <= 10; $x++) {  
                if($x > 0) { 
                    $forresultat .= $x;
                }
            }

            echo "<p>$forresultat</p>";

            // Uppg 4
            $capital = array(
                "Finland" => "Helsingfors",
                "Sverige" => "Stockholm",
                "Japan" => "Tokyo",
                "Tyskland" => "Berlin",
            );

            foreach($capital as $country => $city) {
                echo "<p>$city är huvudstaden i $country</p>";
            }

            // Uppg 5
            $bilar = "audi,jeep,volkswagen,ford,opel";

            $bilArray = explode(",",$bilar);

            foreach($bilArray as $bil) {
                echo "<p>$bil</p>";
            }

            // Uppg 6
            $rad = 6;
            $i = 0;

            if($rad === 0) {
                echo "Noll rader";
            } else if($rad === 1) {
                echo "endast en rad";
            } else if($rad > 2 && $rad < 10) {
                while($i < $rad) {
                    echo "<p>New row</p>";
                    $i++;
                }
            } else {
                echo "För mycket rader eller ogiltig mängd";
            }

            // Uppg 7
            $persons = array("Paul" => "14.03.1990", "Ems" => "20.04.2000", "Karl" => "21.03.2022");

            $months = array("Januari", "Februari", "Mars", "April", "Maj", "Juni", "Juli", "Augusti", "September", "Oktober", "November", "December");
         
            foreach ($persons as $name => $age)
            {
              echo $name . " är född i " . $months[str_replace('0', '', explode('.', $age)[1])-1] . "<br>";
            }

            // Uppg 8

            $cities = array("Esbo" => 255000, "Vanda" => 320000, "Tammerfors" => 234000);
            
            asort($cities);
            $arrlength = count($cities);
        
            foreach($cities as $city => $size) {
                echo "size is $size and city is $city";
                echo "<br>";
            }
        ?>
    </body>
</html>
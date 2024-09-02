<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Calculator</h2>
        <form method="post">
            <div class="form-group">
                <label for="num1">Input 1:</label>
                <input type="number" class="form-control" id="num1" name="num1" step="any" placeholder="Enter first number">
            </div>

            <div class="form-group">
                <label for="operation">Operation:</label>
                <select id="operation" name="operation" class="form-control">
                    <option value="add">Addition</option>
                    <option value="subtract">Subtraction</option>
                    <option value="multiply">Multiplication</option>
                    <option value="divide">Division</option>
                </select>
            </div>

            <div class="form-group">
                <label for="num2">Input 2:</label>
                <input type="number" class="form-control" id="num2" name="num2" step="any" placeholder="Enter second number">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>


        <?php

            // UPPG 1
            $base = 52.2331222442;
            $height = 30;

            function countArea($param1, $param2) {
                $area = $param1 * $param2;

                return $area;
            };

            $newArea = countArea($base, $height);

            if(!is_numeric($newArea)){
                echo "Area is not a number";
            } else {
                $rounded = round($newArea, 2);
                echo "Area of reactangle is: $rounded";
            }

            // UPPG 2
            $tal = "3.234, 24.121, 80.5666, 9.4343, 1.2324";

            $arr = explode(",", $tal);

            $sum = 0;

            $count = count($arr);

            for($i = 0; $i < $count; $i++) {
                $sum += (float)trim($arr[$i]);
            }

            $average = $sum / $count;

            $roundedAverage = round($average, 2);

            echo "<p>The average is: " . $roundedAverage . "</p>";

            // UPPG 3
            $num1 = 52.2331222442;
            $num2 = 30;

            function add($param1, $param2) {
                $sum = $param1 + $param2;

                return $sum;
            }

            $value = add($num1, $num2);

            echo "Sum is: $value";

            // UPPG 4
            function addition($num1, $num2) {
                return $num1 + $num2;
            }

            function subtract($num1, $num2) {
                return $num1 - $num2;
            }

            function multiply($num1, $num2) {
                return $num1 * $num2;
            }

            function divide($num1, $num2) {
                if ($num2 == 0) {
                    return "Error: Division by zero!";
                } else {
                    return $num1 / $num2;
                }
            }

            function calculate($num1, $num2, $operation) {
                switch ($operation) {
                    case 'add':
                        return add($num1, $num2);
                    case 'subtract':
                        return subtract($num1, $num2);
                    case 'multiply':
                        return multiply($num1, $num2);
                    case 'divide':
                        return divide($num1, $num2);
                    default:
                        return "Invalid operation selected.";
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = (float)$_POST['num1'];
                $num2 = (float)$_POST['num2'];
                $operation = $_POST['operation'];

                $result = calculate($num1, $num2, $operation);
                
                echo "<p>Result: $result</p>";
            }
        ?>
        <script src="" ></script>
    </body>
</html>
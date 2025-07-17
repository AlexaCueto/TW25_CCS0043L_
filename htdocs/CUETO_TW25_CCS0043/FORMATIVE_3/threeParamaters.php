<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Calculation using Functions (Predefined Parameters)</title>
    <style>
        body {
            margin: 0;
            padding: 40px;
            background: #f3e8ff; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #4b2c83; 
        }
        .container {
            background: #e6d7ff; 
            padding: 30px 40px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(107, 70, 193, 0.3);
            max-width: 450px;
            width: 100%;
            text-align: center;
        }
        h1 {
            text-align: center;
            color: #6a4baf;
            margin-bottom: 30px;
            font-weight: 700;
            letter-spacing: 1.2px;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 15px;
        }
        th, td {
            background: #d9cfff; 
            padding: 12px 20px;
            border-radius: 15px;
            text-align: center;
            font-size: 1.1rem;
            box-shadow: 2px 2px 8px rgba(107, 70, 193, 0.2);
            color: #4b2c83;
        }
        th {
            background: #b39ddb; 
            color: #fff;
            font-weight: 700;
            font-size: 1.2rem;
        }
        tr:hover td {
            background: #a084d7;
            color: #fff;
            cursor: default;
            box-shadow: 3px 3px 12px rgba(107, 70, 193, 0.4);
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .parameters-row td {
            font-weight: 600;
            background: #cfc1ff;
            color: #4b2c83;
            box-shadow: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Calculation Results</h1>

    <?php
    function calculate($param1, $param2, $param3) {
        $sum = $param1 + $param2 + $param3;
        $difference = $param1 - $param2 - $param3;
        $product = $param1 * $param2 * $param3;
        if ($param2 != 0 && $param3 != 0) {
            $quotient = $param1 / ($param2 * $param3);
        } else {
            $quotient = "Division by zero error";
        }

        return [
            'sum' => $sum,
            'difference' => $difference,
            'product' => $product,
            'quotient' => $quotient
        ];
    }

    $param1 = 40;
    $param2 = 38;
    $param3 = 23;

    
    $results = calculate($param1, $param2, $param3);

    echo "<table>";
    echo "<tr class='parameters-row'><td>My 3 Parameters: </td><td>$param1 $param2 $param3</td></tr>";
    echo "<tr><th>Operation</th><th>Result</th></tr>";
    echo "<tr><td>Additon</td><td>{$results['sum']}</td></tr>";
    echo "<tr><td>Subtraction</td><td>{$results['difference']}</td></tr>";
    echo "<tr><td>Multiplication</td><td>{$results['product']}</td></tr>";
    echo "<tr><td>Division</td><td>{$results['quotient']}</td></tr>";
    echo "</table>";
    ?>
</div>

</body>
</html>

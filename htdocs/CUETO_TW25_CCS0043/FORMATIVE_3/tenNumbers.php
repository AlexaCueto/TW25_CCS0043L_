<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Ten Numbers Calculations - Cute Layout</title>
    <style>
        body {
            margin: 0;
            padding: 40px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #ffe4e1; 
            color: #555;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: #fff0f5; 
            padding: 30px 40px;
            border-radius: 20px;
            box-shadow: 0 8px 15px rgba(255, 182, 193, 0.5);
            max-width: 450px;
            width: 100%;
            text-align: center;
        }
        h1 {
            margin-bottom: 25px;
            color: #ff69b4; 
            font-weight: 700;
            font-size: 2rem;
            letter-spacing: 1.5px;
            text-shadow: 1px 1px 2px #f8bbd0;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 12px;
        }
        th, td {
            padding: 12px 15px;
            background: #ffd1dc;
            border-radius: 15px;
            box-shadow: 2px 2px 6px rgba(255, 182, 193, 0.4);
            font-size: 1.1rem;
        }
        th {
            background: #ff69b4; 
            color: #880e4f;
            font-weight: 700;
            font-size: 1.2rem;
        }
        .numbers-row td {
            background: #ffe4e1; 
            font-weight: 700;
            color: #d81b60;
            font-size: 1.1rem;
            box-shadow: none;
            border-radius: 15px;
        }
        tr:hover td {
            background: #ff69b4;
            color: white;
            cursor: default;
            box-shadow: 3px 3px 10px rgba(255, 105, 180, 0.6);
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        @media (max-width: 500px) {
            body {
                padding: 20px;
            }
            .container {
                padding: 20px;
            }
            th, td {
                font-size: 1rem;
                padding: 10px 12px;
            }
            h1 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Ten Numbers Calculations</h1>

    <?php
    //array with 10 different numbers
    $numbers = array(30, 18, 27, 21, 20, 15, 42, 52, 10, 25);

    //addition
    $sum = 0; 
    foreach ($numbers as $num) {
        $sum += $num;
    }

    //subtraction
    $diff = $numbers[0]; 
    for ($i = 1; $i < count($numbers); $i++) {
        $diff -= $numbers[$i];
    }

    //multiplication
    $product = 1; 
    foreach ($numbers as $num) {
        $product *= $num;
    }

    //division
    $quotient = $numbers[0];
    $divisionByZero = false;
    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] != 0) {
            $quotient /= $numbers[$i];
        } else {
            $divisionByZero = true;
            break;
        }
    }
    ?>

    <table>
        <tr class="numbers-row">
            <td colspan="2">Array List: <?php echo implode(", ", $numbers); ?></td>
            
        </tr>
        <tr>
            <th>Operation</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>Addition</td>
            <td><?php echo $sum; ?></td>
        </tr>
        <tr>
            <td>Subtraction</td>
            <td><?php echo $diff; ?></td>
        </tr>
        <tr>
            <td>Multiplication</td>
            <td><?php echo $product; ?></td>
        </tr>
        <tr>
            <td>Division</td>
            <td>
                <?php
                if ($divisionByZero) {
                    echo "Division by zero encountered, calculation stopped.";
                } else {
                    echo $quotient;
                }
                ?>
            </td>
        </tr>
    </table>
</div>

</body>
</html>

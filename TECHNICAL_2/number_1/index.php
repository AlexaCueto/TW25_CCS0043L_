<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Highest and Lowest Number</title>
</head>

<body>
    <div class="container">
        <h1>Randomized 15 numbers</h1>
        <?php
        $numbers = [];
        for ($x = 1; $x <= 15; $x++){
            $numbers[]= rand(1, 100);
        }
        $highest = max($numbers);
        $lowest = min($numbers);
        $sum = array_sum($numbers);
        $avg = $sum / count($numbers);
        ?>

        <div class="results">
            <p>Numbers</p>
            <!-- implode will join array elements -->
            <div class="numbers"><?= implode(", ", $numbers); ?></div>
            <p> Highest Number:<br><?= $highest; ?></p>
            <p> Lowest Number:<br><?= $lowest; ?></p>
            <p> Sum:<br><?= $sum; ?></p>
            <p> Average:<br><?= number_format($avg, 2); ?></p>
        </div>
    </div>
</body>

</html>
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
        $sum = $numbers[0] + $numbers[1] + $numbers[2] + $numbers[3] 
        + $numbers[4] + $numbers[5] + $numbers[6] + $numbers[7] 
        + $numbers[8] + $numbers[9] + $numbers[10] + $numbers[11] 
        + $numbers[12] + $numbers[13] + $numbers[14];
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
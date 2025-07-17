<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two Digit Combination</title>
    <style>
        body {
            font-family: 'Lucida Sans', sans-serif;
            background-image: linear-gradient(to right,rgb(244, 152, 237),rgb(180, 79, 170));
            margin-top: 200px;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color:rgb(109, 20, 100);
        }
        .results {
            font-size: 18px;
            line-height: 1.6;
            color:rgb(109, 20, 100);
            margin-left: 10px;
        }
        .results p {
            margin: 0;
        }
        </style>
</head>
<body>
    <div class="container">
        <h2>Two Digit Decimal Combination</h2>
        <div class="results">
            <?php
            for($x =0; $x <=99; $x++){
                if($x < 10){ 
                    echo "0$x, "; 
                }else{
                    echo "$x, ";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
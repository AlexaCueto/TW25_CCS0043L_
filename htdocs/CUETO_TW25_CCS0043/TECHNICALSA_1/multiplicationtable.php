<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
    body {
        font-family: 'Lucida Sans', sans-serif;
        background-image: linear-gradient(to bottom right, #ff8f84, #fed4a4);
        margin-top: 50px;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #fff;
        font-size: 30px;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        font-weight: 700;
    }

    /*Table*/
    table {
        border-collapse: collapse;
        width: 30%;
        margin: auto;
        background-color: rgba(255, 255, 255, 0.9);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        border-radius: 12px;
        overflow: hidden;
    }

    /*Table cells*/
    td {
        padding: 20px;
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        color: #fff;
        transition: background-color 0.3s ease, transform 0.2s ease;
        cursor: default;
    }

    /*Add hover effect to cells*/
    td:hover {
        color: #f8f9fa;
        transform: scale(1.1);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 8px;
    }

    /* Responsive design*/
    @media (min-width: 601px) and (max-width: 1200px) {
        table {
            width: 50%;
        }

        td {
            font-size: 18px;
            padding: 15px;
        }

        h1 {
            font-size: 28px;
        }
    }

    @media (max-width: 600px) {
        table {
            width: 80%;
        }

        td {
            font-size: 16px;
            padding: 10px;
        }

        h1 {
            font-size: 24px;
        }
    }
    </style>
</head>

<body>
    <table border="1">
        <h1>Multiplication Table</h1>
        <?php
            for($row = 0; $row <= 10; $row++){
                echo "<tr>";
                for($col = 0; $col <= 10; $col++){
                    $product = $row * $col;
                    $backgroundColor = (($row + $col) % 2 == 0) ? '#ff787f' : '#e0da48'; 
                echo "<td style='background-color: $backgroundColor;'>$product</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
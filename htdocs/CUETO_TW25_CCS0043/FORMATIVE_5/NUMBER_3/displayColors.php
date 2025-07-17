<?php 
session_start();
$colors = $_SESSION['colors'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Favorite Colors</title>
    <style>
    body {
        font-family: 'Comic Sans MS', cursive, sans-serif;
        background: linear-gradient(135deg, #fffde7,rgb(255, 178, 196));
        color:rgb(255, 131, 148);
        padding: 40px 20px;
        text-align: center;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h2 {
        font-weight: bold;
        font-size: 2.2rem;
        margin-bottom: 35px;
        color:rgb(226, 63, 104);
        text-shadow: 1px 1px #fff3e0;
    }

    .color-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        max-width: 800px;
        width: 100%;
    }

    .color-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 150px;
        transition: transform 0.3s ease;
    }

    .color-wrapper:hover {
        transform: rotate(-2deg) scale(1.05);
    }

    .color {
        width: 140px;
        height: 140px;
        border-radius: 50%;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        color: #fff;
        font-weight: bold;
        font-size: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        text-shadow: 1px 1px 2px #000;
        border: 4px solid rgb(255, 179, 207);
        transition: all 0.3s;
    }

    .label {
        margin-top: 14px;
        font-weight: bold;
        font-size: 1rem;
        color:rgb(245, 0, 98);
        background-color: #fff3e0;
        padding: 5px 12px;
        border-radius: 12px;
        border: 2px dashed rgb(211, 2, 89);
        margin-top: 10px;
    }

    p {
        font-size: 1.1rem;
        color:rgb(211, 2, 89);
        font-style: italic;
        margin-top: 30px;
    }

    @media (max-width: 480px) {
        .color {
            width: 110px;
            height: 110px;
            font-size: 0.9rem;
        }
        .color-wrapper {
            width: 110px;
        }
        h2 {
            font-size: 1.6rem;
        }
    }

    </style>

</head>
<body>
    <h2>My Favorite Colors</h2>

    <div class ="color-list">
        <?php
        if(empty($colors)) {
            echo "<p>No colors submitted yet.</p>";
        } else {
            foreach($colors as $index => $color){
                $chosenColor = htmlspecialchars($color);
                echo "<div class = 'color-wrapper'>
                       <div class='color' style='background-color: $chosenColor;'>$chosenColor</div>
                       <div class='label'>Color " . ($index + 1) . "</div>
                       </div>";
            }
        }
        ?>
    </div>
</body>
</html>
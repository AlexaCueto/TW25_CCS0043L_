<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['colors'] = [
        $_POST['color1'],
        $_POST['color2'],
        $_POST['color3'],
        $_POST['color4'],
        $_POST['color5']
    ];
    header("Location: displayColors.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Colors Session</title>
    <style>
    body {
        font-family: 'Comic Sans MS', cursive, sans-serif;
        background: linear-gradient(to right, #fdf0d5, #f9c5d1);
        padding: 40px 20px;
        text-align: center;
        color: #ff4081;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    form {
        background: #fff3f9;
        padding: 40px 50px;
        border-radius: 25px;
        box-shadow: 0 12px 25px rgba(255, 105, 180, 0.3);
        max-width: 500px;
        width: 100%;
        border: 5px solid  #ff80ab;
        transition: transform 0.3s ease-in-out;
    }

    form:hover {
        transform: scale(1.02);
    }

    h2 {
        margin-bottom: 30px;
        font-weight: bold;
        font-size: 2rem;
        color: #d81b60;
        text-shadow: 1px 1px #ffc1e3;
    }

    label {
        display: block;
        margin: 16px 0 8px 0;
        font-weight: bold;
        font-size: 1.1rem;
        color: #ab47bc;
        text-align: left;
    }

    input[type="text"] {
        padding: 12px;
        width: 100%;
        border-radius: 12px;
        border: 2px dashed #ce93d8;
        font-size: 1rem;
        background-color: #fff0f5;
        color: #6a1b9a;
        box-sizing: border-box;
        transition: all 0.3s;
    }

    input[type="text"]:focus {
        border-color: #f48fb1;
        background-color: #fce4ec;
        outline: none;
    }

    input[type="submit"] {
        background: #ff80ab;
        color: white;
        border: none;
        padding: 15px 0;
        font-weight: bold;
        border-radius: 16px;
        font-size: 1.2rem;
        margin-top: 30px;
        width: 100%;
        cursor: pointer;
        box-shadow: 0 6px 15px rgba(255, 105, 180, 0.4);
        transition: background 0.3s ease;
    }

    input[type="submit"]:hover {
        background: #f06292;
    }

    @media (max-width: 480px) {
        form {
            padding: 30px;
        }
        h2 {
            font-size: 1.6rem;
        }
    }
    </style>

</head>
<body>
    <form method="POST" action="">
        <h2>Enter Your Favorite Colors</h2>
        <label for="color1">Color 1:</label>
        <input type="text" id="color1" name="color1" required>

        <label for="color2">Color 2:</label>
        <input type="text" id="color2" name="color2" required>

        <label for="color3">Color 3:</label>
        <input type="text" id="color3" name="color3" required>

        <label for="color4">Color 4:</label>
        <input type="text" id="color4" name="color4" required>

        <label for="color5">Color 5:</label>
        <input type="text" id="color5" name="color5" required>

        <input type="submit" value="Submit Colors">
    </form>

</body>
</html>
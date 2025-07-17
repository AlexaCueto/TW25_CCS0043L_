<?php
$start_time = $_COOKIE['start_time'] ?? null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fname = htmlspecialchars(trim($_POST["fname"]));
    $mname = htmlspecialchars(trim($_POST["mname"]));
    $lname = htmlspecialchars(trim($_POST["lname"]));

    setcookie('fname', $fname, time() + 60);
    setcookie('mname', $mname, time() + 60);
    setcookie('lname', $lname, time() + 60);
    setcookie('start_time', time(), time() + 60);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Using Cookies</title>
    <style>
        body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #f3e8ff, #ede7f6);
      color: #3e206d;
      max-width: 750px;
      margin: 60px auto;
      padding: 20px;
    }

    h2 {
      text-align: center;
      color: #5e35b1;
      margin-bottom: 30px;
    }

    form {
      background: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 5px 20px rgba(94, 53, 177, 0.1);
    }

    label {
      font-weight: 600;
      margin-top: 15px;
      display: block;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border: 1.5px solid #b39ddb;
      border-radius: 8px;
    }

    input[type="submit"] {
      background-color: #5e35b1;
      color: white;
      padding: 12px;
      width: 100%;
      border: none;
      border-radius: 8px;
      font-weight: bold;
      font-size: 1rem;
      cursor: pointer;
      margin-top: 10px;
    }

    .output {
      background: #f4ecff;
      padding: 20px;
      border-radius: 10px;
      margin-top: 30px;
      box-shadow: inset 0 0 10px #ccc;
    }

    .output p {
      font-size: 1.1rem;
      margin: 10px 0;
    }

    </style>
</head>
<body>
    <h2>Personal Information</h2>
    <form method ="post" action="personalinfoCookie.php">
        <label> First Name: </label>
        <input type ="text" name = "fname" placeholder= "Enter First Name" required>
        <br><br>

        <label> Middle Name: </label>
        <input type ="text" name = "mname" placeholder = "Enter Middle Name" required>
        <br><br>

        <label> Last Name: </label>
        <input type ="text" name="lname" placeholder = "Enter Last Name" required>
        <br><br>

        <input type = "submit" value ="Submit">
    </form>

    <?php
        if (isset($_COOKIE['start_time'])) {
            $elapsed = time() - $_COOKIE['start_time'];
            echo "<div class='output'>";
            echo "<h3>Personal Information (cookies)</h3>";

            if ($elapsed >= 10 && isset($_COOKIE['fname'])) {
                echo "<p><strong>First name:</strong> " . $_COOKIE['fname'] . "</p>";
            } else {
                echo "<p><strong>First name:</strong> The first name will show after 10 seconds.</p>";
            }

            if ($elapsed >= 20 && isset($_COOKIE['mname'])) {
                echo "<p><strong>Middle name:</strong> " . $_COOKIE['mname'] . "</p>";
            } else {
                echo "<p><strong>Middle name:</strong> The middle name will show after 20 seconds.</p>";
            }

            if ($elapsed >= 30 && isset($_COOKIE['lname'])) {
                echo "<p><strong>Last name:</strong> " . $_COOKIE['lname'] . "</p>";
            } else {
                echo "<p><strong>Last name:</strong> The last name will show after 30 seconds</p>";
            }

            echo "</div>";
            echo "<p class='note'>Refresh the page after 10s, 20s, and 30s to see the names appear.<br>After 1 minute, cookies will reset automatically.</p>";
        }
    ?>

</body>
</html>
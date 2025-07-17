<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information - GET METHOD</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #f8fbff,rgb(224, 230, 252));
            max-width: 750px;
            margin: 50px auto;
            padding: 20px;
            color: #2c3e50;
        }

        h2 {
            text-align: center;
            color: #1a2a6c;
        }

        form {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 50, 0.1);
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
            border: 1.5px solid #ccc;
            border-radius: 8px;
        }

        input[type="submit"] {
            background-color: #1a2a6c;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 1rem;
            cursor: pointer;
        }

        .output, .error {
            background-color: #eef;
            padding: 20px;
            border-radius: 8px;
            margin-top: 30px;
            box-shadow: inset 0 0 5px #aaa;
        }

        .error {
            background-color: #ffe6e6;
            color: red;
        }

    </style>
</head>
<body>
    <h2> Personal Information Form</h2>
    <form method="get" action="personalinfoGet.php">
        <label> First Name: </label>
        <input type ="text" name = "fname" placeholder= "Enter First Name" required>
        <br><br>

        <label> Middle Name: </label>
        <input type ="text" name = "mname" placeholder = "Enter Middle Name" required>
        <br><br>

        <label> Last Name: </label>
        <input type ="text" name="lname" placeholder = "Enter Last Name" required>
        <br><br>

        <label> Date of Birth: </label>
        <input type="text" name="dob" placeholder = "MM/DD/YYYY" required>
        <br><br>

        <label> Adress: </label>
        <input type="text" name="address" placeholder = "Enter Address" required>
        <br><br>

        <input type="submit" value="Submit">
</form>

<?php 
//REGULAR EXPRESSION VALIDATION
$nameValidation = "/^[A-Za-z\s]+$/";
$dobValidation = "/^(0[1-9]|1[0-2])\/(0[1-9]|[12][0-9]|3[01])\/(19|20)\d{2}$/";
$addressValidation = "/^[A-Za-z0-9\s,.'#-]{3,}$/";

if (isset($_GET['fname'])) {  

    $fname = trim($_GET["fname"] ?? '');
    $mname = trim($_GET["mname"] ?? '');
    $lname = trim($_GET["lname"] ?? '');
    $dob = trim($_GET["dob"] ?? '');
    $address = trim($_GET["address"] ?? '');

    $valid = true; 

    
    if (!preg_match($nameValidation, $fname)) {
        $valid = false;
        $fnameError = "Invalid First Name. Please use letters only.";
    }
    if (!preg_match($nameValidation, $mname)) {
        $valid = false;
        $mnameError = "Invalid Middle Name. Please use letters only.";
    }
    if (!preg_match($nameValidation, $lname)) {
        $valid = false;
        $lnameError = "Invalid Last Name. Please use letters only.";
    }
    if (!preg_match($dobValidation, $dob)) {
        $valid = false;
        $dobError = "Invalid Date of Birth. Please use the format MM/DD/YYYY.";
    }
    if (!preg_match($addressValidation, $address)) {
        $valid = false;
        $addressError = "Invalid Address. Please enter a valid address.";
    }

    if ($valid) {
        echo "<div class='output'>";
        echo "<h3>Personal Information Submitted Successfully!</h3>";
        echo "<p><strong>First Name:</strong> " . htmlspecialchars($fname) . "</p>";
        echo "<p><strong>Middle Name:</strong> " . htmlspecialchars($mname) . "</p>";
        echo "<p><strong>Last Name:</strong> " . htmlspecialchars($lname) . "</p>";
        echo "<p><strong>Date of Birth:</strong> " . htmlspecialchars($dob) . "</p>";
        echo "<p><strong>Address:</strong> " . htmlspecialchars($address) . "</p>";
        echo "</div>";
    } else {
        echo "<div class='error'>";
        echo "<h3>Error: Invalid Input</h3>";
        if (isset($fnameError)) echo "<p>$fnameError</p>";
        if (isset($mnameError)) echo "<p>$mnameError</p>";
        if (isset($lnameError)) echo "<p>$lnameError</p>";
        if (isset($dobError)) echo "<p>$dobError</p>";
        if (isset($addressError)) echo "<p>$addressError</p>";
        echo "</div>";
    }
}
?>

</body>
</html>
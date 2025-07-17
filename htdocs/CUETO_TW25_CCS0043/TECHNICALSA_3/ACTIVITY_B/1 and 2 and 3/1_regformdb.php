<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "registrationdb";

$conn = new mysqli($server, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection to the database has failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Personal Information - POST METHOD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #dbcacf, #926c87);
        margin: 0;
        padding-top: 80px;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        min-height: 100vh;
    }

    .navbar {
        background-color: #f0e0e6;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand,
    .nav-link {
        color: #333;
        font-weight: bold;
    }

    .nav-link:hover {
        color: #555;
    }

    .container {
        width: 100%;
        max-width: 640px;
        padding: 0 15px;
    }

    form {
        background: #ffffff;
        padding: 35px 30px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        animation: fadeInUp 0.6s ease;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .icon {
        display: block;
        margin: 0 auto 15px;
        width: 80px;
        height: 80px;
        object-fit: contain;
    }

    h2 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    label {
        font-weight: 600;
        margin-top: 10px;
        display: block;
        color: #34495e;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 12px;
        margin-top: 6px;
        margin-bottom: 16px;
        border: 1.5px solid #ccc;
        border-radius: 10px;
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.05);
        transition: border 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        border-color: #926c87;
        outline: none;
        box-shadow: 0 0 6px rgba(146, 108, 135, 0.5);
    }

    input[type="submit"] {
        background-color: #926c87;
        color: #fff;
        padding: 14px;
        width: 100%;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #7a546e;
    }

    .output,
    .error {
        background-color: #ffffff;
        padding: 25px 30px;
        border-radius: 16px;
        margin-top: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        animation: fadeInUp 0.6s ease;
    }

    .output h3,
    .error h3 {
        margin-top: 0;
        color: #2c3e50;
    }

    .output p {
        margin: 6px 0;
        color: #34495e;
    }

    .error {
        background-color: #ffe6e6;
        color: #a94442;
    }

    .error p {
        margin: 6px 0;
    }

    @media (max-width: 600px) {
        form {
            padding: 25px 20px;
        }

        .output,
        .error {
            padding: 20px;
        }

        .icon {
            width: 60px;
            height: 60px;
        }
    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Registration Form</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="2_logindb.php">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="container">
        <form method="post" action="">
            <img src="formicon.png" alt="Registration Icon" class="icon" />
            <h2>My Personal Information Registration Form</h2>

            <label>First Name</label>
            <input type="text" name="fname" placeholder="Enter First Name" required>

            <label>Middle Name</label>
            <input type="text" name="mname" placeholder="Enter Middle Name" required>

            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Enter Last Name" required>

            <label>Username</label>
            <input type="text" name="username" placeholder="Enter Username" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Enter Password" required>

            <label>Confirm Password</label>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>

            <label>Birthday</label>
            <input type="text" name="dob" placeholder="e.g. January 1 2001" required>

            <label>Email</label>
            <input type="text" name="email" placeholder="penny20@gmail.com" required>

            <label>Contact Number</label>
            <input type="text" name="contact" placeholder="Enter Contact Number" required>

            <input type="submit" value="Submit">
        </form>

        <?php 
$nameValidation = "/^[A-Za-z\s]+$/";
$usernameValidation = "/^[A-Za-z0-9_]{3,20}$/";
$dobValidation = "/^(January|February|March|April|May|June|July|August|September|October|November|December)\s(0?[1-9]|[12][0-9]|3[01])\s(19|20)\d{2}$/";
$passwordValidation = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/";
$emailValidation = "/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9._-]+)+$/";
$contactValidation = "/^\d{11}$/";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
    $fname = trim($_POST["fname"] ?? '');
    $mname = trim($_POST["mname"] ?? '');
    $lname = trim($_POST["lname"] ?? '');
    $username = trim($_POST["username"] ?? '');
    $password = trim($_POST["password"] ?? '');
    $confirm_password = trim($_POST["confirm_password"] ?? '');
    $dob = trim($_POST["dob"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $contact  = trim($_POST["contact"] ?? '');

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
    if (!preg_match($usernameValidation, $username)) {
        $valid = false;
        $usernameError = "Invalid Username. 3-20 characters, letters, numbers, underscores.";
    }
    if (!preg_match($dobValidation, $dob)) {
        $valid = false;
        $dobError = "Invalid Date of Birth. Use format: Month Day Year.";
    }
    if (!preg_match($passwordValidation, $password)) {
        $valid = false;
        $passwordError = "Invalid Password. At least 8 characters, 1 letter, 1 number.";
    }
    if ($password !== $confirm_password) {
        $valid = false;
        $passwordMatchError = "Passwords do not match.";
    }
    if (!preg_match($emailValidation, $email)) {
        $valid = false;
        $emailError = "Invalid Email format.";
    }
    if (!preg_match($contactValidation, $contact)) {
        $valid = false;
        $contactError = "Invalid Contact Number. Must be 11 digits.";
    }

    if ($valid) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (fname, mname, lname, username, password, dob, email, contact) 
                VALUES ('$fname', '$mname', '$lname', '$username', '$hashedPassword', '$dob', '$email', '$contact')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<div class='output'><h3>Registration Successful!</h3></div>";
        } else {
            echo "<div class='error'><h3>Error: " . $conn->error . "</h3></div>";
        }
    } else {
        echo "<div class='error'><h3>Error: Invalid Input</h3>";
        if (isset($fnameError)) echo "<p>$fnameError</p>";
        if (isset($mnameError)) echo "<p>$mnameError</p>";
        if (isset($lnameError)) echo "<p>$lnameError</p>";
        if (isset($usernameError)) echo "<p>$usernameError</p>";
        if (isset($dobError)) echo "<p>$dobError</p>";
        if (isset($passwordError)) echo "<p>$passwordError</p>";
        if (isset($passwordMatchError)) echo "<p>$passwordMatchError</p>";
        if (isset($emailError)) echo "<p>$emailError</p>";
        if (isset($contactError)) echo "<p>$contactError</p>";
        echo "</div>";
    }
}
$conn->close();
?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

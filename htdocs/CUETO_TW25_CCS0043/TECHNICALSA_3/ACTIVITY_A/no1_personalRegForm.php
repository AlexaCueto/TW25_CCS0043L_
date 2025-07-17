<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Personal Information - POST METHOD</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #9ed2c8, #e7f0dc);
      margin: 0;
      padding: 40px 20px;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
    }

    .container {
      width: 100%;
      max-width: 650px;
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
      padding: 10px 2px;
      margin-top: 6px;
      margin-bottom: 16px;
      border: 1.5px solid #ccc;
      border-radius: 10px;
      box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.05);
      transition: border 0.3s ease, box-shadow 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      border-color: #9ed2c8;
      outline: none;
      box-shadow: 0 0 6px rgba(158, 210, 200, 0.5);
    }

    input[type="submit"] {
      background-color: #9ed2c8;
      color: #2c3e50;
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
      background-color: #7fc0b2;
    }

    .output, .error {
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
      .container {
        padding: 0 10px;
      }

      form {
        padding: 25px 20px;
      }

      .output, .error {
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
  <div class="container">
    <form method="post" action="">
      <img src="regicon.png" alt="Registration Icon" class="icon" />
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
      <input type="text" name="email" placeholder="penny20@gmmail.com" required>

      <label>Contact Number</label>
      <input type="text" name="contact" placeholder="Enter Contact Number" required>

      <input type="submit" value="Submit">
    </form>

<?php 
$nameValidation = "/^[A-Za-z\s]+$/";
$usernameValidation = "/^[A-Za-z0-9_]{3,20}$/";
$dobValidation = "/^(January|February|March|April|May|June|July|August|September|October|November|December)\s(0?[1-9]|[12][0-9]|3[01])\s(19|20)\d{2}$/";
$passwordValidation = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/"; //at least 8 characters, at least one letter and one number
$emailValidation = "/^([a-zA-Z0-9])+(a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/";
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
        $usernameError = "Invalid Username. Username must be 3-20 characters long and can contain letters, numbers, and underscores.";
    }

    if (!preg_match($dobValidation, $dob)) {
        $valid = false;
        $dobError = "Invalid Date of Birth. Use format: Month Day Year (e.g., January 30 1993).";
    }

    if (!preg_match($passwordValidation, $password)) {
        $valid = false;
        $passwordError = "Invalid Password. Must be at least 8 characters, include a letter and a number.";
    }

    if ($password !== $confirm_password) {
        $valid = false;
        $passwordMatchError = "Passwords do not match.";
    }

    if (!preg_match($emailValidation, $email)) {
        $valid = false;
        $emailError = "Invalid Email.";
    }

    if (!preg_match($contactValidation, $contact)) {
        $valid = false;
        $contactError = "Invalid Contact Number. Enter a valid 11-digit number.";
    }

    if ($valid) {
        echo "<div class='output'>";
        echo "<h3>Personal Information</h3>";
        echo "<p><strong>Full Name:</strong> " . htmlspecialchars($fname) . " " . htmlspecialchars($mname) . " " . htmlspecialchars($lname) . "</p>";
        echo "<p><strong>Username:</strong> " . htmlspecialchars($username) . "</p>";
        echo "<p><strong>Password:</strong> " . htmlspecialchars($password) . "</p>";
        echo "<p><strong>Birthday:</strong> " . htmlspecialchars($dob) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Contact Number:</strong> " . htmlspecialchars($contact) . "</p>";
        echo "</div>";
    } else {
        echo "<div class='error'>";
        echo "<h3>Error: Invalid Input</h3>";
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
?>
  </div>
</body>
</html>

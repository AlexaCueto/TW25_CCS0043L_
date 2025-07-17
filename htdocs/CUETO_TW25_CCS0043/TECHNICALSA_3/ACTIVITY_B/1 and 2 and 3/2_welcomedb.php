<?php
session_name("DBLoginSession");
session_start();

if (!isset($_SESSION["logged"])) {
    header("Location: 2_logindb.php");
    exit;
}

$server = "localhost";
$user = "root";
$password = ""; 
$database = "registrationdb";

//connection
$conn = new mysqli($server, $user, $password, $database);

//check connection
if ($conn->connect_error) {
    die("Connection to the database has failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #dbcacf, #926c87);
            font-family: Arial, sans-serif;
            margin: 0;
            padding-top: 80px; 
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .navbar {
            background-color: #f0e0e6;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand, .nav-link {
            color: #333;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #555;
        }

        .container {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 40px 30px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 600px;
            width: 100%;
            margin-bottom: 40px;
        }

        h1 {
            color: #333;
        }

        p {
            margin-top: 20px;
            font-size: 1.1rem;
            color: #555;
        }
        
        .logout-btn {
            margin-top: 20px;
            background-color: #dc3545;
            color: white;
            padding: 10px 24px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .logout-btn:hover {
            background-color: #bb2d3b;
        }

    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home Page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text" href="2_logindb.php">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text" href="3_recordret.php">Change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="2_logoutdb.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <h1>Welcome, <?= htmlspecialchars($_SESSION["username"]) ?>!</h1>
    <p>You have successfully logged in.</p>
    <a href="2_logoutdb.php" class ="logout-btn">Logout</a>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

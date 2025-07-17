<?php
session_name("StaticLoginSession");
session_start();
if (!isset($_SESSION["logged"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom right, #9ed2c8, #e7f0dc);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding-top: 80px; 
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .navbar {
      background-color: #e7f0dc;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand, .nav-link {
      color: #2c3e50;
      font-weight: 600;
    }

    .container {
      background-color: #ffffff;
      border-radius: 12px;
      margin-top: 10px; 
      padding: 40px 30px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 600px;
      width: 100%;
      margin-bottom: 40px;
    }

    h1 {
      color: #2c3e50;
      margin-bottom: 10px;
    }

    p {
      color: #34495e;
      font-size: 1.1rem;
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
          <a class="nav-link text" href="login.php">Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text" href="registrationform.php">Registration Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Welcome Message -->
<div class="container mt-5">
  <h1>Welcome, <?= htmlspecialchars($_SESSION["username"]) ?>!</h1>
  <p>You are now logged in.</p>
  <a href="logout.php" class="logout-btn">Logout</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

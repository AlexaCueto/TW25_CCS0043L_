<?php
session_name("StaticLoginSession");
session_start();

$validUsername = "admin";
$validPassword = "admin123";

$username = "";
$password = "";

if (isset($_COOKIE["username"])) {
    $username = $_COOKIE["username"];
}
if (isset($_COOKIE["password"])) {
    $password = $_COOKIE["password"];
}

if (isset($_SESSION["logged"])) {
    header("Location: welcome.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $inputUsername = $_POST["username"] ?? "";
    $inputPassword = $_POST["password"] ?? "";
    $remember = isset($_POST["remember"]);

    if ($inputUsername === $validUsername && $inputPassword === $validPassword) {
        $_SESSION["username"] = $inputUsername;
        $_SESSION["logged"] = true;

        if ($remember) {
            setcookie("username", $inputUsername, time() + 3600);
            setcookie("password", $inputPassword, time() + 3600);
        } else {
            setcookie("username", "", time() - 3600);
            setcookie("password", "", time() - 3600);
        }

        header("Location: welcome.php");
        exit;
    } else {
        echo "<div class='text-center mt-4 text-danger'><strong>Invalid credentials.</strong></div>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Module</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to bottom right, #9ed2c8, #e7f0dc);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding-top: 80px;
    }

    .navbar {
      background-color: #e7f0dc;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand, .nav-link {
      color: #2c3e50;
      font-weight: 600;
    }

    .nav-link:hover {
      color: #1b2838;
    }

    .main-content {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 140px);
    }

    .login-form {
      max-width: 420px;
      width: 100%;
      background: #ffffff;
      padding: 35px;
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
      text-align: center;
    }

    .login-form img {
      width: 80px;
      height: 80px;
      margin-bottom: 20px;
    }

    .form-control {
      border-radius: 10px;
      border: 1.5px solid #ccc;
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.05);
      transition: 0.3s ease;
    }

    .form-control:focus {
      border-color: #9ed2c8;
      box-shadow: 0 0 6px rgba(158, 210, 200, 0.5);
    }

    .btn-custom {
      background-color: #9ed2c8;
      color: #2c3e50;
      font-weight: bold;
      border: none;
      transition: 0.3s ease;
    }

    .btn-custom:hover {
      background-color: #83c2b4;
    }

    .footer {
      text-align: center;
      margin-top: 30px;
      color: #2c3e50;
      font-weight: bold;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Login</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="welcome.php">Welcome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registrationform.php">Registration Form</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Login Form -->
<div class="main-content">
  <div class="login-form">
    <img src="logoicon.png" alt="Login Icon">

    <form method="post">
      <div class="mb-3 text-start">
        <label for="username" class="form-label"><strong>Username</strong></label>
        <input type="text" class="form-control" name="username" id="username"
               value="<?= htmlspecialchars($username) ?>" required>
      </div>

      <div class="mb-3 text-start">
        <label for="password" class="form-label"><strong>Password</strong></label>
        <input type="password" class="form-control" name="password" id="password"
               value="<?= htmlspecialchars($password) ?>" required>
      </div>

      <div class="form-check mb-3 text-start">
        <input type="checkbox" class="form-check-input" id="remember" name="remember"
               <?= isset($_POST["remember"]) || isset($_COOKIE["username"]) ? 'checked' : '' ?>>
        <label class="form-check-label" for="remember">Remember Me</label>
      </div>

      <button type="submit" class="btn btn-custom w-100">Submit</button>
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

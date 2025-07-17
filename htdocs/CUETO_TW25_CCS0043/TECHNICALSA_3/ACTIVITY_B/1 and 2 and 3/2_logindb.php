<?php
session_name("DBLoginSession");
session_start();

//Database connection
$server = "localhost";
$user = "root";
$password = ""; 
$database = "registrationdb";

$conn = new mysqli($server, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION["logged"])) {
    header("Location: 2_welcomedb.php");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $inputUsername = trim($_POST["username"] ?? "");
    $inputPassword = trim($_POST["password"] ?? "");

    $sql = "SELECT * FROM users WHERE username = '$inputUsername'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();
        
        if (password_verify($inputPassword, $row["password"])) {
            $_SESSION["username"] = $row["username"];
            $_SESSION["logged"] = true;
            header("Location: 2_welcomedb.php");
            exit;
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }
}

$conn->close();
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
      background: linear-gradient(135deg, #dbcacf, #926c87);
      font-family: Arial, sans-serif;
      padding-top: 80px;
    }

    .navbar {
      background-color: #f0e0e6;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand, .nav-link {
      color: #333;
      font-weight: bold;
    }

    .main-content {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 140px);
    }

    .login-form {
      max-width: 400px;
      width: 100%;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      text-align: center;
    }

    .login-form img {
      width: 70px;
      height: 70px;
      margin-bottom: 20px;
    }

    .form-control {
      border-radius: 5px;
      border: 1px solid #ccc;
      margin-bottom: 15px;
    }

    .btn-submit {
      background-color: #926c87;
      color: white;
      padding: 10px;
      width: 100%;
      border: none;
      border-radius: 5px;
    }

    .btn-submit:hover {
      background-color: #7b566e;
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
          <a class="nav-link" href="2_welcomedb.php">Welcome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="1_regformdb.php">Registration</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Login Form -->
<div class="main-content">
  <div class="login-form">
    <img src="usericon.png" alt="Login Icon">

    <form method="post">
      <div class="text-start mb-3">
        <label for="username" class="form-label"><strong>Username</strong></label>
        <input type="text" class="form-control" name="username" id="username"
               value="<?= isset($_POST["username"]) ? htmlspecialchars($_POST["username"]) : '' ?>" required>
      </div>

      <div class="text-start mb-3">
        <label for="password" class="form-label"><strong>Password</strong></label>
        <input type="password" class="form-control" name="password" id="password" required>
      </div>

      <?php if ($error): ?>
      <div class="text-danger mb-3">
        <strong><?= $error ?></strong>
      </div>
      <?php endif; ?>

      <button type="submit" class="btn-submit">Submit</button>
    </form>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

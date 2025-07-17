<?php
session_name('DBLoginSession');
session_start();

$server = "localhost";
$user = "root";
$password = ""; 
$database = "registrationdb";

$conn = new mysqli($server, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection to the database has failed: " . $conn->connect_error);
}

if (!isset($_SESSION['logged']) || !isset($_SESSION['username'])) {
    header("Location: 2_logindb.php");
    exit;
}

$username = $_SESSION['username'];

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: 2_logindb.php");
    exit;
}

$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result && $result->num_rows === 1) {
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit;
}

$successMsg = $errorMsg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current = $_POST['current_password'] ?? '';
    $new = $_POST['new_password'] ?? '';
    $reenter = $_POST['reenter_password'] ?? '';

    if (!password_verify($current, $user['password'])) {
        $errorMsg = "Current password is not the same with the old password.";
    } elseif ($new !== $reenter) {
        $errorMsg = "New password and Re-Enter new password should be the same.";
    } else {
        $hashedNewPassword = password_hash($new, PASSWORD_DEFAULT);
        $updateSql = "UPDATE users SET password = '$hashedNewPassword' WHERE username = '$username'";
        
        if ($conn->query($updateSql) === TRUE) {
            $successMsg = "Password has been successfully updated.";
            $user['password'] = $hashedNewPassword;
        } else {
            $errorMsg = "Error updating password.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to bottom right, #dbcacf, #926c87);
        margin: 0;
        padding: 0;
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
        background: #fff;
        border: 2px solid #926c87;
        border-radius: 8px;
        padding: 20px 30px;
        max-width: 400px;
        width: 100%;
        margin: 100px auto 60px auto; 
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    h2 {
        text-align: center;
        color: #926c87;
    }

    .logout {
        text-align: center;
        margin-bottom: 15px;
    }

    .logout a {
        background-color: red;
        color: white;
        text-decoration: none;
        padding: 6px 12px;
        border-radius: 4px;
        font-weight: bold;
        display: inline-block;
    }

    .logout a:hover {
        background-color: darkred;
    }

    strong {
        display: inline-block;
        margin-top: 10px;
        color: #333;
    }

    hr {
        margin: 20px 0;
        border: 1px solid #dbcacf;
    }

    input[type="password"] {
        width: 100%;
        padding: 8px;
        margin-top: 6px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn {
        width: 100%;
        background: #926c87;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
        margin-top: 10px;
        margin-bottom: 20px;
    }

    .btn:hover {
        background: #7b566e;
    }

    .message {
        text-align: center;
        margin: 10px 0;
        font-weight: bold;
    }

    .error {
        color: red;
    }

    .success {
        color: green;
    }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Change Password</a>
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
            </ul>
        </div>
    </div>
</nav>

<!-- Main Content -->
<div class="container">
    <h2>User Information Form</h2>
    <div class="logout">
        <a href="?logout=true">Log-out</a>
    </div>

    <p><strong>Welcome</strong> <?= htmlspecialchars($user['fname']." ".$user['mname']." ".$user['lname']) ?></p>
    <p><strong>Birthday:</strong> <?= htmlspecialchars($user['dob']) ?></p>
    <p><strong>Contact Details</strong></p>
    <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
    <p><strong>Contact:</strong> <?= htmlspecialchars($user['contact']) ?></p>

    <hr>
    <strong>RESET PASSWORD</strong>
    <?php if ($errorMsg): ?>
        <div class="message error"><?= $errorMsg ?></div>
    <?php endif; ?>
    <?php if ($successMsg): ?>
        <div class="message success"><?= $successMsg ?></div>
    <?php endif; ?>

    <form method="post">
        <label>Enter Current Password:</label>
        <input type="password" name="current_password" required>

        <label>Enter New Password:</label>
        <input type="password" name="new_password" required>

        <label>Re-Enter New Password:</label>
        <input type="password" name="reenter_password" required>

        <button type="submit" class="btn">Reset Password</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

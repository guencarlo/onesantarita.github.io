<?php
session_start();
require("database.php");

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$loginError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $stmt = $connection->prepare("SELECT id, first_name, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['first_name'];

                // ✅ Insert user login into user_logins table
                $loginStmt = $connection->prepare("INSERT INTO user_logins (user_id) VALUES (?)");
                $loginStmt->bind_param("i", $user['id']);
                $loginStmt->execute();

                // ✅ Delete login records older than 30 days
                $connection->query("DELETE FROM user_logins WHERE login_time < NOW() - INTERVAL 30 DAY");

                // ✅ Redirect after successful login
                header("Location: card.php");
                exit();
            } else {
                $loginError = true;
            }
        } else {
            $loginError = true;
        }

        $stmt->close();
    } catch (Exception $e) {
        error_log("Login error: " . $e->getMessage());
        $loginError = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Business Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgba(193, 140, 48, 0.62);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-button:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: #ff4d4d;
            background: #ffe0e0;
            padding: 10px;
            border-radius: 4px;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="login.php" method="POST">
    <h2 style="text-align:center;">Login</h2>
    
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" class="login-button">Log In</button>

    <?php if ($loginError): ?>
        <div class="error-message">Invalid email or password.</div>
    <?php endif; ?>

    <!-- Registration link -->
    <p style="text-align:center; margin-top: 15px;">
        Don't have an account? <a href="registration.php">Register here</a>
    </p>
</form>

</body>
</html>

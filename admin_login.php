<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin_user = $_POST['username'];
    $admin_pass = $_POST['password'];

    // Simple hardcoded login
    if ($admin_user === 'admin' && $admin_pass === 'admin123') {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin_update_status.php");
        exit();
    } else {
        $error = "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #ecf0f1;
            margin: 0;
            padding: 0;
        }

        .login-container {
            width: 350px;
            margin: 100px auto;
            padding: 30px 40px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            text-align: center;
        }

        h2 {
            margin-bottom: 25px;
            color: #2c3e50;
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 8px;
            font-weight: 500;
            color: #34495e;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        button {
            background-color: #2980b9;
            color: white;
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #1c658c;
        }

        .error {
            color: red;
            margin-top: 15px;
            font-size: 14px;
        }

        @media screen and (max-width: 400px) {
            .login-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Admin Login</h2>
        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
    </div>

</body>
</html>

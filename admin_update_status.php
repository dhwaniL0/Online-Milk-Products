<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

// Update status if form submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_stage'])) {
    $stage = (int)$_POST['order_stage'];
    $_SESSION['order_stage'] = $stage;
    $message = "Order status updated to stage $stage.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - Update Order Status</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: #f4f6f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        h1 {
            margin-bottom: 30px;
            color: #2c3e50;
        }

        label {
            font-size: 16px;
            color: #34495e;
        }

        select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background-color: #2980b9;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1c658c;
        }

        .msg {
            margin-top: 20px;
            color: green;
            font-weight: bold;
        }

        .logout {
            margin-top: 25px;
        }

        .logout a {
            text-decoration: none;
            color: #e74c3c;
            font-weight: bold;
        }

        .logout a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Update Order Status</h1>

        <form method="POST">
            <label for="order_stage">Select Order Stage:</label><br>
            <select name="order_stage" id="order_stage" required>
                <option value="1">Placed</option>
                <option value="2">Packed</option>
                <option value="3">On the Way</option>
                <option value="4">Delivered</option>
            </select><br>
            <button type="submit">Update Status</button>
        </form>

        <?php if (isset($message)) echo "<div class='msg'>$message</div>"; ?>

        <div class="logout">
            <a href="admin_logout.php">Logout</a>
        </div>
    </div>

</body>
</html>

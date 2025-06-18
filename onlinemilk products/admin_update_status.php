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
        body {
            font-family: Arial, sans-serif;
            margin: 60px;
            text-align: center;
        }

        h1 {
            margin-bottom: 30px;
        }

        select, button {
            font-size: 18px;
            padding: 10px;
            margin-top: 10px;
        }

        .msg {
            margin-top: 20px;
            color: green;
            font-weight: bold;
        }

        .logout {
            margin-top: 40px;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Update Order Status</h1>

    <form method="POST">
        <label for="order_stage">Select Order Stage:</label><br>
        <select name="order_stage" id="order_stage">
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
</body>
</html>

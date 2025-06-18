<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}

// Generate random estimated delivery window between 0 and 60 minutes
$min_time = rand(10, 30);          // Minimum delivery time
$max_time = $min_time + rand(5, 30); // Maximum delivery time
if ($max_time > 60) {
    $max_time = 60; // Cap at 60 minutes
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 80px;
        }

        .status {
            font-size: 24px;
            color: green;
        }

        .delivery-time {
            font-size: 18px;
            margin-top: 10px;
            color: gray;
        }

        .back-btn {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <h1>Thank you for your order!</h1>
    <div class="status">Your order has been placed successfully.</div>
    <div class="delivery-time">
        Estimated Delivery Time: <?php echo $min_time . "–" . $max_time; ?> minutes
    </div>

    <div class="back-btn">
        <a href="index.php">← Back to Home</a>
    </div>
</body>
</html>

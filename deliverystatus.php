<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
date_default_timezone_set('Asia/Kolkata'); // Replace with your local timezone

// Store and reuse single delivery time (e.g., 14 minutes)
if (!isset($_SESSION['delivery_time'])) {
    $delivery_minutes = rand(30, 60); // Single delivery time between 10–45 min
    $_SESSION['delivery_time'] = $delivery_minutes;
}
$delivery_time = $_SESSION['delivery_time'];
// $delivery_target = strtotime($_SESSION['order_datetime']) + ($delivery_time * 60);


// Store and reuse order time
if (!isset($_SESSION['order_datetime'])) {
    $_SESSION['order_datetime'] = date("d M Y, h:i A"); // Example: 03 May 2025, 02:15 PM
}

$order_datetime = $_SESSION['order_datetime'];



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
            margin-top: 60px;
        }

        .status {
            font-size: 24px;
            color: green;
        }

        .delivery-time,
        .order-time {
            font-size: 18px;
            margin-top: 10px;
            color: #555;
        }

        .timeline {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
            position: relative;
            width: 70%;
            margin: auto;
            margin-top: 40px;
        }

        .step {
            text-align: center;
            position: relative;
            flex: 1;
        }

        .step:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 15px;
            left: 50%;
            width: 100%;
            height: 2px;
            background-color: #ccc;
            z-index: -1;
        }

        .circle {
            width: 30px;
            height: 30px;
            background-color: #ccc;
            /* default gray */
            color: white;
            border-radius: 50%;
            display: inline-block;
            line-height: 30px;
            margin: 0 auto 10px;
            z-index: 1;
            position: relative;
        }

        .step.active .circle {
            background-color: green;
            /* active step */
        }

        .step.completed .circle {
            background-color: green;
        }

        .step.current .circle {
            background-color: #007BFF;
            /* Blue */
        }

        .step .circle {
            background-color: #ccc;
            color: white;
        }


        .label {
            font-size: 14px;
        }


        .back-btn {
            margin: auto;
            margin-top: 40px;
        }

        a {
            text-decoration: none;
            color: #007BFF;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<script>
    const deliveryTimestamp = <?php echo $delivery_target * 1000; ?>; // JS uses milliseconds
</script>

<body>
    <h1>Thank you for your order!</h1>
    <div class="status">Your order has been placed successfully.</div>

    <div class="order-time">Order Placed On: <?php echo $order_datetime; ?></div>
    <div class="delivery-time">Estimated Delivery Time: <?php echo $delivery_time; ?> minutes</div>
    <!-- <div class="delivery-time">
    Estimated Delivery Time: <span id="countdown"></span>
</div> -->


    <?php
    $order_stage = $_SESSION['order_stage'] ?? 0;
    ?>

    <!-- <div class="timeline">
        <div class="step <?php echo $order_stage >= 1 ? 'active' : ''; ?>">
            <div class="circle">1</div>
            <div class="label">Placed</div>
        </div>
        <div class="step <?php echo $order_stage >= 2 ? 'active' : ''; ?>">
            <div class="circle">2</div>
            <div class="label">Packed</div>
        </div>
        <div class="step <?php echo $order_stage >= 3 ? 'active' : ''; ?>">
            <div class="circle">3</div>
            <div class="label">On the Way</div>
        </div>
        <div class="step <?php echo $order_stage >= 4 ? 'active' : ''; ?>">
            <div class="circle">4</div>
            <div class="label">Delivered</div>
        </div>
    </div> -->


    <div class="timeline">
        <?php
        $labels = ['Placed', 'Packed', 'On the Way', 'Delivered'];
        for ($i = 1; $i <= 4; $i++):
            $stepClass = '';
            if ($order_stage > $i) {
                $stepClass = 'completed';
            } elseif ($order_stage == $i) {
                $stepClass = 'current';
            }
        ?>
            <div class="step <?php echo $stepClass; ?>">
                <div class="circle"><?php echo $i; ?></div>
                <div class="label"><?php echo $labels[$i - 1]; ?></div>
            </div>
        <?php endfor; ?>
    </div>



    <div class="back-btn">
        <a href="index.php"><img src="home.png" alt="Home" style="width: 25px;"></a>
    </div>


</body>

<script>
    function updateCountdown() {
        const now = new Date().getTime();
        const distance = deliveryTimestamp - now;

        if (distance <= 0) {
            document.getElementById("countdown").innerHTML = "Delivered";
            clearInterval(timer);
            return;
        }

        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("countdown").innerHTML = `${minutes} min ${seconds} sec`;
    }

    updateCountdown(); // Initial call
    const timer = setInterval(updateCountdown, 1000); // Update every second
</script>


</html>
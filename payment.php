<?php
session_start();

// Ensure order was submitted and total is available
if (!isset($_SESSION['order_id']) || !isset($_SESSION['gtotal'])) {
    header("Location: index.php");
    exit();
}
$_SESSION['order_stage'] = 1; 
$_SESSION['order_submitted'] = false;  // Reset to show the delivery icon again

// Now $_SESSION['gtotal'] is ready to be shown
?>



<!DOCTYPE html>
<html>

<head>
    <title>Payment Page</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body,
    html {
        height: 100%;
        font-family: Arial, sans-serif;
        background: #f3f4f6;
    }

    .container {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .payment-box {
        background-color: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 350px;
    }

    .payment-box h2 {
        margin-bottom: 20px;
        color: #333;
    }

    .payment-box p {
        margin-bottom: 30px;
        font-size: 18px;
        color: #555;
    }

    .payment-box label {
        display: block;
        margin: 10px 0;
        text-align: left;
        color: #444;
    }

    .payment-box button {
        background-color: #38b6ff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .payment-box button:hover {
        background-color: #259edb;
    }
</style>



<body>
    <div class="container">
        <div class="payment-box">
            <h2>Payment for Order #<?php echo $_SESSION['order_id']; ?></h2>
            <p>Total amount: ₹<?php echo $_SESSION['gtotal'] ?? '0'; ?></p>

            <form action="deliverystatus.php" method="POST">
                <label>
                    <input type="radio" name="payment_method" value="Credit Card" required> Credit Card
                </label>
                <label>
                    <input type="radio" name="payment_method" value="UPI" required> UPI
                </label>
                <label>
                    <input type="radio" name="payment_method" value="Cash on Delivery" required> Cash on Delivery
                </label><br><br>

                <button type="submit">Pay Now</button>
            </form>
        </div>
    </div>
</body>

</html>
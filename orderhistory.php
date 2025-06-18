<?php
session_start();
include 'connection.php'; // Make sure this connects to your database

if (!isset($_SESSION['email'])) {
    echo "<script>alert('Please login to view your order history'); window.location.href='login.html';</script>";
    exit;
}

$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Order History</title>
    <link rel="stylesheet" href="orderhistory.css">

</head>

<body>

    <div class="topnav">

        <div class="brand">
            <!-- <img src="logo.jpg" alt="Dairy Dash Logo" class="logo"> -->
            <a href="index.php"><span class="brand-name">Dairy Dash</span></a>
        </div>

        <div class="nav-links">
            <a class="active" href="index.php">HOME</a>
            <a href="index.php#products">OUR PRODUCT</a>
            <a href="about.php">ABOUT US</a>
            <a href="contactus.php">CONTACT</a>
        </div>

        <div class="topnav-right">
            <?php if (isset($_SESSION['email'])): ?>
                <a href="logout.html">LOGOUT</a>
                 <a href="addcart.php"><img src="cart.png" height="20" width="20"></a>
                <a href="orderhistory.php"><img src="history.svg" style="width: 24px; margin-top: -2px; vertical-align: middle; margin-right: 5px;"></a>
                <?php if (isset($_SESSION['order_submitted']) && $_SESSION['order_submitted'] === false): ?>
                    <a href="deliverystatus.php">
                        <img src="package.png" alt="Delivery Icon" style="width: 24px; margin-top: -9px; vertical-align: middle; margin-right: 5px;">
                    </a>
                <?php endif; ?>

            <?php else: ?>
                <a href="login.html">LOGIN</a>
                <a href="regis.html">REGISTER</a>

            <?php endif; ?>
        </div>

    </div>


    <h1 style="text-align: center;">Order History</h1>

    <table>
        <tr>
            <th>No.</th> <!-- New column for serial number -->
            <!-- <th>Order ID</th> -->
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Order Date</th>
        </tr>

        <?php
        $sql = "SELECT * FROM orders WHERE customer_email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        $sr = 1; // Serial number counter

        if ($result->num_rows > 0):
            while ($row = $result->fetch_assoc()):
                echo "<tr>
                <td>{$sr}</td>
                
                <td>{$row['product_name']}</td>
                <td>{$row['quantity']}</td>
                <td>₹{$row['price']}</td>
                <td>₹{$row['total']}</td>
                <td>{$row['order_date']}</td>
              </tr>";
                $sr++;
            endwhile;
        else:
            echo "<tr><td colspan='7'>No order history found.</td></tr>";
        endif;

        $stmt->close();
        $conn->close();
        ?>
    </table>


</body>

</html>
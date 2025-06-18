<?php
session_start();
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="p1.css">
</head>

<body>
    <?php
    $count = 0;
    if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
    }
    ?>
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="product1.php">OUR PRODUCT</a>
        <a href="about.php">ABOUT US</a>
        <a href="contactus.php">CONTACT</a>
        <div class="topnav-right">
        <a href="logout.html">LOGOUT</a>
        <a href="addcart.php"><img src="cart.png" height="20" width="20"><?php echo $count; ?></a>
        </div>
    </div>
    <div class="bg-text">UNWRAPPING MORE DELIGHT!</div>
    <div class="bg-image">
        <div class="bg-image img1"></div>
        <div class="bg-image img2"></div>
        <div class="bg-image img3"></div>

    </div>
</body>

</html>
<?php
session_start();
?>
<html>

<head>
    <title>Online milk product</title>
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
    <a class="active" href="home.php">Home</a>
        <a href="product1.php">OUR PRODUCT</a>
        <a href="about.php">ABOUT US</a>
        <a href="contactus.php">CONTACT</a>
        <div class="topnav-right">
            <a href="logout.html">LOGOUT</a>
            <a href="addcart.php"><img src="cart.png" height="20" width="20"><?php echo $count; ?></a>
        </div>
    </div>
    <div class="img">
        <h1 align="center">OUR PRODUCTS</h1>
        <div id="sideNav">
            <side>
                <ul>
                    <li><a href="dairy-essentials.php">DAIRY ESSENTIALS</a></li>
                    <li><a href="ice-cream.php">ICE-CREAM</a></li>
                    <li><a href="mithai.php">MITHAI</a></li>
                    <li><a href="srikhand.php">SHRIKHAND</a></li>
                </ul>
            </side>
        </div>
    </div>
</body>

</html>
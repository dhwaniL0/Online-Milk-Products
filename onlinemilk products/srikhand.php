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
        <a href="dairy-essentials.php">DAIRY ESSENTIALS</a>
        <a href="ice-cream.php">ICE-CREAM</a>
        <a href="mithai.php">MITHAI</a>
        <a href="srikhand.php">SHRIKHAND</a>
        <div class="topnav-right">
            <a href="addcart.php"><img src="cart.png" height="20" width="20"><?php echo $count; ?></a>
        </div>
    </div>
    <selection class="items">
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="badampistashrikhand.jpeg.jpg">
                <h4>Badam Pista Shrikhand(250gms)</h4>
                <h4>Rs.120</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Badam Pista Shrikhand(250gms)">
                <input type="hidden" name="Price" value="120">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="dryfruitshrikhand.jpg">
                <h4>Dry Fruit Shrikhand(250gms)</h4>
                <h4>Rs.170</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Dry Fruit Shrikhand(250gms)">
                <input type="hidden" name="Price" value="170">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="ElaichiShrikhand.jpg">
                <h4>Elaichi Shrikhand(250gms)</h4>
                <h4>Rs.120</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Elaichi Shrikhand(250gms)">
                <input type="hidden" name="Price" value="120">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="MangoShrikhand.jpg">
                <h4>Mango Shrikhand(250gms)</h4>
                <h4>Rs.140</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Mango Shrikhand(250gms)">
                <input type="hidden" name="Price" value="140">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="Rajbhogshirkhand.jpg">
                <h4>Rajbhog Shirkhand(250gms)</h4>
                <h4>Rs.120</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Rajbhog Shirkhand(250gms)">
                <input type="hidden" name="Price" value="120">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="strawberryshrikhand.jpg">
                <h4>Straw Berry Shrikhand(250ml)</h4>
                <h4>Rs.130</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Straw Berry Shrikhand(250ml)">
                <input type="hidden" name="Price" value="130">
            </div>
        </form>
    </selection>
</body>

</html>
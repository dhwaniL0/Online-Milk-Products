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
                <img src="vanilla.jpg">
                <h4>Vanilla Ice-Cream(500ml)</h4>
                <h4>Rs.70</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Vanilla Ice-Cream(500ml)">
                <input type="hidden" name="Price" value="70">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="kesarpista.jpg">
                <h4>Kesar Pista Ice-Cream(500ml)</h4>
                <h4>Rs.130</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Kesar Pista Ice-Cream(500ml)">
                <input type="hidden" name="Price" value="130">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="chocolate.jpg">
                <h4>Chocolate Ice-Cream(500ml)</h4>
                <h4>Rs.100</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Chocolate Ice-Cream(500ml)">
                <input type="hidden" name="Price" value="10">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="strawberry.jpg">
                <h4>Strawberry Ice-Cream(500ml)</h4>
                <h4>Rs.90</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="StrawberryIce-Cream(500ml)">
                <input type="hidden" name="Price" value="90">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="mango.jpg">
                <h4>Mango Ice-Cream(500ml)</h4>
                <h4>Rs.90</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Mango Ice-Cream(500ml)">
                <input type="hidden" name="Price" value="90">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="mavamalaikulfi.jpg">
                <h4>Mava Malai Kulfi</h4>
                <h4>Rs.40</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Mava Malai Kulfi">
                <input type="hidden" name="Price" value="40">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="kesarpistakulfi.jpg">
                <h4>Kesar Pista Kulfi</h4>
                <h4>Rs.60</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Kesar Pista Kulfi">
                <input type="hidden" name="Price" value="60">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="malaikulfi.jpg">
                <h4>Malai Kulfi</h4>
                <h4>Rs.40</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Malai Kulfi">
                <input type="hidden" name="Price" value="40">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="blueberry.jpg">
                <h4>Blueberry Ice-Cream(500ml)</h4>
                <h4>Rs.150</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Blueberry Ice-Cream(500ml)">
                <input type="hidden" name="Price" value="150">
            </div>
        </form>
    </selection>
</body>

</html>
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
                <img src="milk.jpg">
                <h4>Milk(500ml)</h4>
                <h4>Rs.39</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Milk(500ml)">
                <input type="hidden" name="Price" value="39">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="ghee.jpg">
                <h4>Ghee(1L)</h4>
                <h4>Rs.750</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Ghee(1L)">
                <input type="hidden" name="Price" value="750">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="curd.jpg">
                <h4>Curd(100gms)</h4>
                <h4>Rs.60</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Curd(100gms)">
                <input type="hidden" name="Price" value="60">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="butter.jpg">
                <h4>Butter(200gms)</h4>
                <h4>Rs.250</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Butter(200gms)">
                <input type="hidden" name="Price" value="250">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="cheese.webp">
                <h4>Cheese(200gms)</h4>
                <h4>Rs.150</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Cheese(200gms)">
                <input type="hidden" name="Price" value="150">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="cottage-cheese.jpg">
                <h4>Cottage-Cheese(200gms)</h4>
                <h4>Rs.200</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Cottage-Cheese(200gms)">
                <input type="hidden" name="Price" value="200">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="paneer.jpg">
                <h4>Paneer(500gms)</h4>
                <h4>Rs.120</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Paneer(500gms)">
                <input type="hidden" name="Price" value="120">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="chaas.jpg">
                <h4>Plain Chaas</h4>
                <h4>Rs.70</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Plain Chaas">
                <input type="hidden" name="Price" value="70">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="cream.jpg">
                <h4>Dairy cream(200ml)</h4>
                <h4>Rs.120</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Dairy cream(200ml)">
                <input type="hidden" name="Price" value="120">
            </div>
        </form>
    </selection>
</body>

</html>
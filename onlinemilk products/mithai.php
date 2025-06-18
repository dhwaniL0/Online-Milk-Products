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
                <img src="peda.jpg">
                <h4>Pure milk Pedas(250gms)</h4>
                <h4>Rs.350</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Pure milk Pedas(250gms)">
                <input type="hidden" name="Price" value="350">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="mavapeda.jpeg">
                <h4>Mawa Peda(250gms)</h4>
                <h4>Rs.240</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Mawa Peda(250gms)">
                <input type="hidden" name="Price" value="240">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="brownpeda.jpg">
                <h4>Barela Peda(250gms)</h4>
                <h4>Rs.240</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Barela Peda(250gms)">
                <input type="hidden" name="Price" value="240">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="kesar-Peda.jpg">
                <h4>Sugarfree Kesari Peda(250gms)</h4>
                <h4>Rs.270</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Sugarfree Kesari Peda(250gms)">
                <input type="hidden" name="Price" value="270">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="burffee.jpeg">
                <h4>Burfi(250gms)</h4>
                <h4>Rs.235</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Burfi(250gms)">
                <input type="hidden" name="Price" value="235">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="KesarDryfruitBurfi.jpg">
                <h4>Kesar Dryfruit Burfi(250gms)</h4>
                <h4>Rs.220</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Kesar Dryfruit Burfi(250gms)">
                <input type="hidden" name="Price" value="220">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="pistaburfi.webp">
                <h4>Pista Burfi(250gms)</h4>
                <h4>Rs.275</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Pista Burfi(250gms)">
                <input type="hidden" name="Price" value="275">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="rabri.jpg">
                <h4>Rabri(250ml)</h4>
                <h4>Rs.350</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Rabri(250ml)">
                <input type="hidden" name="Price" value="350">
            </div>
        </form>
        <form action="managecart.php" method="post">
            <div class="item">
                <img src="yogurt.jpg">
                <h4>Raw Milk yogurt(250gms)</h4>
                <h4>Rs.355</h4>
                <button type="submit" name="addtocart" class="btn">Add To Cart</button>
                <input type="hidden" name="Item_Name" value="Raw Milk yogurt(250gms)">
                <input type="hidden" name="Price" value="355">
            </div>
        </form>
    </selection>
</body>

</html>
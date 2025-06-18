<?php
session_start();
$count = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="addcart.css">
</head>

<body style="
    display: flex;
    flex-direction: column;
    justify-self: center;
    justify-content: center;
    justify-items: center;
">
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

    <h1 class="center-text">MY CART</h1>

    <div class="div_table" style="align-items: center; margin-left: 100px;">
        <table class="center-table" border="1" style="
    justify-content: center;
    justify-items: center;
    justify-self: center;">
            <tr>
                <th>Serial No.</th>
                <th>Item Image</th>
                <th>Item Name</th>
                <th>Item Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th></th>
            </tr>
            <?php
            $total = 0;
            if (isset($_SESSION['cart'])) {
                $sr = 0;
                foreach ($_SESSION['cart'] as $key => $value) {
                    $sr++;
                    $total += $value['Price'] * $value['Quantity'];
                    echo "
                        <tr>
                            <td>$sr</td>
                            <td><img class='product-image' src='{$value['Image']}' height='90' width='120'></td>
                            <td>{$value['Item_Name']}</td>
                            <td>{$value['Price']}<input type='hidden' class='iprice' value='{$value['Price']}'></td>
                            <td><input class='iquantity' type='number' value='{$value['Quantity']}' min='1' max='10'></td>
                            <td class='itotal'>0</td>
                            <td>
                                <form action='managecart.php' method='POST'>
                                    <button type='submit' name='remove_item'>REMOVE</button>
                                    <input type='hidden' name='Item_Name' value='{$value['Item_Name']}'>
                                </form>
                            </td>
                        </tr>
                    ";
                }
            }
            ?>
            <tr>
                <td colspan='5'>Grand Total</td>
                <td id='gtotal'><?php echo $total; ?></td>
                <td></td>
            </tr>
        </table>
    </div>

    <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) { ?>
        <form action="placeorder.php" method="POST" class="center-form">
            <input type="text" name="customer_name" placeholder="Enter your name" required><br><br>
            <button type="submit" name="place_order">Place Order</button>
        </form>
    <?php } ?>

    <script>
        var gt = <?php echo $total; ?>;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal() {
            gt = 0;
            for (var i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                gt += (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;
        }

        for (var i = 0; i < iquantity.length; i++) {
            iquantity[i].addEventListener('change', subTotal);
        }

        subTotal();
    </script>
</body>

</html>

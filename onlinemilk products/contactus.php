<?php
session_start();
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact US Page</title>
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <section class="contact">
    <div class="content">
        <h1><b>Stay in Touch!</b></h1>
		<h2><b>Your Queries...</b></h2>
    </div>
    <div class="container"> 
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Address</h3>
                    <p>4671 Sugar Camp Road, <br>Owatonna, Minnesota, <br>55060</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>9974651071</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>xyz@gmail.com</p> 
                </div>
            </div>
            </div>
        </div>
    </section>
</body>
</html>
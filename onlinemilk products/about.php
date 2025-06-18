<?php
session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    <title>About Us</title>
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

    <section class="about">
        <h1>About Us</h1>
        <p style="font-weight: bold">
            When you choose this, you bring home unconditional love and pure, unadulterated joy.
        </p>
        <div class="about-info">
            <div class="about-img">
                <img src="background.jpg">
            </div>
            <div>
                <p style="font-size: 14px"> Shop anything you want - starting from farm fresh milk to dairy products to Icecreams & Mithai,
                    organic products, Milk, to other daily essentials - everything at once. enjoy a hassle-free, convenient, easy shopping experience.
                    If savings is your priority,
                    Dairy.com is the place to be - flash sales, reasonable pricing, easy subscription, 24*7 delivery,
                    free delivery at MRP makes for a budget-friendly, delightful shopping experience.
                    Do you generally forget to stock up on groceries & other daily essentials?
                    Or searching “milk delivery near me” on Google is keeping you busy? If your answer is,‘YES’,
                    Dairy.com is just the right app for you. Place your order, buy your milk online, & we take care of the rest.
                    Dairy.com is the smartest way of getting your fresh milk. It is practically a boon to people
                    looking for milk home delivery, who isn’t finding farm fresh milk in the local kirana stores,
                    who is having a tough time searching for organic milk online. Why only milk, buy your butter online,
                    cheese online or any other dairy or daily essentials online with just a simple click, have all of them delivered along
                    with your milk. Furthermore, you can even buy your dairy products like paneer, ghee, everything that's on your mind.
                </p>
                <button>Read More...</button>
            </div>
        </div>
    </section>

    <section class="value">
        <h1>Our Values</h1>
        <div class="value-cards">
            <div class="card">
                <div class="card-img">
                    <img src="milk.jpg">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Fresh Ingredients</h2>
                    <p class="card-role">Our secret? It lies in our ingredients.
                        We use only what’s fresh — from the milk in our butter to the fruits in our yoghurt.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="ghee.jpg">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Finest Quality</h2>
                    <p class="card-role">You give your family the best, and so do we.
                        That’s why we obsess over every detail giving you daanedar ghee, thick lassi and more.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="curd.jpg">
                </div>
                <div class="card-info">
                    <h2 class="card-name">Preservatives Free</h2>
                    <p class="card-role">Our kulfis melt in a minute and our curd cuts clean.
                        Why? Because we use no preservatives, ever</p>

                </div>
            </div>
        </div>
    </section>

</body>

</html>
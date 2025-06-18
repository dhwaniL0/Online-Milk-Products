<?php
session_start();
include("connection.php"); // Your DB connection

// ✅ LOGIN CHECK FIRST
if (!isset($_SESSION['email'])) { // Change 'email' if your login system uses a different session key
    echo "<script>
        alert(' Please login');
        window.location.href = 'login.html';
    </script>";
    // header("Location: login.html");
    exit();
}

// ✅ CART CHECK
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<script>
        alert('Your cart is empty. Please add items before placing an order.');
        window.location.href = 'index.php';
    </script>";
    exit();
}






if (isset($_POST['submit'])) {
    // Store the shipping details in the session (Optional: store in DB for future reference)
    $_SESSION['order_details'] = [
        'first_name' => $_POST['name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
        'city' => $_POST['city'],
        'pincode' => $_POST['pincode'],
    ];

    // Database connection for inserting shipping details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "milkshop";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the statement for shipping details
    $stmt = $conn->prepare("INSERT INTO orders_details (name, last_name, email, phone, address, city, pincode) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $_POST['name'], $_POST['last_name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['city'], $_POST['pincode']);

    // Execute the query
    if (!$stmt->execute()) {
        echo "<script>
            alert('Error submitting shipping details. Please try again.');
            window.location.href = 'addcart.php';
        </script>";
        exit();
    }


    // Calculate the total price
    $total_price = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total_price += $item['Price'] * $item['Quantity'];
    }

    // Store the grand total in session to use in the payment page
    $_SESSION['gtotal'] = $total_price;

    // Create a unique order ID and store in session
    $_SESSION['order_id'] = uniqid('order_');

    // ✅ Insert each item into 'product_orders' table
    $customer_email = $_SESSION['email']; // Assuming email is stored in session
    
    // Loop through the cart and insert data into the database
    foreach ($_SESSION['cart'] as $item) {
        $product_name = $item['Item_Name'];  // Assuming the item name is stored in cart
        $price = $item['Price'];  // Price of the product
        $quantity = $item['Quantity'];  // Quantity of the product in the cart
        $total = $price * $quantity;  // Total cost for the product
        
        // Insert into product_orders table
        $query = "INSERT INTO orders (customer_email, product_name, price, quantity, total)
                  VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssdis", $customer_email, $product_name, $price, $quantity, $total);
        
        if (!$stmt->execute()) {
            echo "<script>
                alert('Error placing the order. Please try again.');
                window.location.href = 'addcart.php';
            </script>";
            exit();
        }
    }

    // Clear the cart after successful order placement
    unset($_SESSION['cart']);

    // Redirect to payment page
    header("Location: payment.php");
    exit();
}
?>

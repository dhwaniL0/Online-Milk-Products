<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "milkshop";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT customer_email, product_name, price, quantity, total, order_date FROM orders";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Order Page</title>
    <style>
        table {
            width: 90%;
            margin: 0 auto 50px;
            border-collapse: collapse;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #1a1a1a;
            color: white;
            font-size: 16px;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>

    <h1 style="text-align:center;">Customer Orders</h1>

    <table>
        <tr>
            <th>No</th>
            <th>Customer Email</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Order Date</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            $serial = 1; // ✅ Initialize serial number
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$serial}</td>
                    <td>{$row['customer_email']}</td>
                    <td>{$row['product_name']}</td>
                    <td>{$row['price']}</td>
                    <td>{$row['quantity']}</td>
                    <td>{$row['total']}</td>
                    <td>{$row['order_date']}</td>
                  </tr>";
                $serial++; // ✅ Increment serial number
            }
        } else {
            echo "<tr><td colspan='7'>No orders found.</td></tr>";
        }
        ?>
    </table>

</body>

</html>
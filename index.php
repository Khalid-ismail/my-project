<?php
include 'cart.php';

if (isset($_POST['action'])) {
    if ($_POST['action'] == 'add') {
        addToCart(101, "Laptop", 1200, 1);
    }
    if ($_POST['action'] == 'remove') {
        removeFromCart(101);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Cart System</title>
</head>
<body>
    <h2>Simple Shopping Cart</h2>

    <form method="post">
        <button name="action" value="add">Add Laptop to Cart</button>
        <button name="action" value="remove">Remove Laptop from Cart</button>
    </form>

    <h3>Cart Contents:</h3>
    <?php displayCart(); ?>
</body>
</html
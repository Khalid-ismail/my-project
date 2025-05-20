<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

function addToCart($id, $name, $price, $quantity) {
    $_SESSION['cart'][$id] = [
        "name" => $name,
        "price" => $price,
        "quantity" => $quantity
    ];
}

function displayCart() {
    if (empty($_SESSION['cart'])) {
        echo "Your cart is empty.<br>";
        return;
    }

    foreach ($_SESSION['cart'] as $id => $item) {
        echo "Product: " . $item['name'] . " - $" . $item['price'] . " (Qty: " . $item['quantity'] . ")<br>";
    }
}

function removeFromCart($id) {
    if (isset($_SESSION['cart'][$id])) {
        unset($_SESSION['cart'][$id]);
    }
}
?>
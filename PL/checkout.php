<?php
require_once('connection.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product_id => $cart_item) {
        $quantity = $cart_item['quantity'];
        $sql = "SELECT stacks FROM products WHERE product_id = '$product_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $current_quantity = $row['stacks'];
        if ($current_quantity - $quantity < 0) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Out of stacks')
                    window.location.href='addtocart.php';
                    </SCRIPT>");
            exit();
        }
        $new_quantity = $current_quantity - $quantity;
        $sql = "UPDATE products SET stacks = '$new_quantity' WHERE product_id = '$product_id'";
        if (mysqli_query($conn, $sql)) {
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Thanks for buying!!')
                    window.location.href='userproduct.php';
                    </SCRIPT>");
            unset($_SESSION['cart'][$product_id]);
            exit();
        }
    }
}
header("Location: userproduct.php");
?>

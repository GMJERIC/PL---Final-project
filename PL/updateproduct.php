<?php
require_once('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $stack = $_POST['stacks'];
    $product_desc = $_POST['product_desc'];
    $new_product_name = $_POST['new_product_name'];
    $new_price =$_POST['new_price'];
    $new_stack =$_POST['new_stack'];


    // update product in database
    $sql = "UPDATE products SET product_name = '$new_product_name', product_price = ' $new_price',stacks= '$new_stack', product_desc = '$product_desc' WHERE product_id = '$product_id'";
    if (mysqli_query($conn, $sql)) {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Product Updated Successfully')
        window.location.href='adminproducts.php';
        </SCRIPT>");
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <link rel="stylesheet" href="updateproduct.css">
    <title>Update Product</title>
    
        
</head>
<body>
    <h2>Update Product</h2>
    <form method="POST">
        <label for="product_id">Select a Product to Update:</label>
        <select name="product_id">
            <?php
                // retrieve product names and IDs from database
                $sql = "SELECT product_id, product_name FROM products";
                $result = mysqli_query($conn, $sql);

                // display product names and IDs in dropdown menu
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['product_id'] . "'>" . $row['product_name'] ;
                }
            ?>
        </select>
        <label for="new_product_name">New Product Name:</label>
        <input type="text" name="new_product_name">
        <label for="new_price">New Price:</label>
        <input type="text" name="new_price">
        <label for="new_stack">New Stack:</label>
        <input type="text" name="new_stack">
        <label for="product_desc">Product Description:</label>
        <textarea name="product_desc"></textarea>
        <input type="submit" value="Update Product">
       
        
           
    </form>
    <br>
    <button class="backbutton"onclick="location.href='adminproducts.php'" >Back</button>
</body>
</html>

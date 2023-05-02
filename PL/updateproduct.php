<?php
require_once('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $new_product_name = $_POST['new_product_name'];

    // update product in database
    $sql = "UPDATE products SET product_name = '$new_product_name', product_desc = '$product_desc' WHERE product_id = '$product_id'";
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
    <title>Update Product</title>
    <style>
        body {
            text-align:center;
            font-family: Arial, sans-serif;
            font-size: 18px;
            padding:50px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], textarea, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            margin-bottom: 15px;
            text-align:center;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
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
        <label for="product_desc">Product Description:</label>
        <textarea name="product_desc"></textarea>
        <input type="submit" value="Update Product">
        
    </form>
</body>
</html>

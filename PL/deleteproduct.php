<?php
require_once ('connection.php');


$sql = "SELECT product_id, product_name FROM products";
$result = mysqli_query($conn, $sql);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'];

   
    $sql = "DELETE FROM products WHERE product_id = $product_id";
    if (mysqli_query($conn, $sql)) {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Product Deleted Successfully')
        window.location.href='adminproducts.php';
        </SCRIPT>");
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <link rel="stylesheet" href="deleteproduct.css">
    <title>Update Product</title>
    
<body>
<form method="POST">
    <label for="product_id">Select product to delete:</label>
    <select name="product_id">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <option value="<?php echo $row['product_id']; ?>"><?php echo $row['product_name']; ?></option>
        <?php endwhile; ?>
    </select>
    <input type="submit" value="Delete Product">
</form>
<br>
    <button class="back_button" onclick="location.href='adminproducts.php'" >Back</button>
</body>
</html>
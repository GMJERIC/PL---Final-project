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
<link rel="stylesheet" href="deleteproduct.css">

<form method="POST">
    <label for="product_id">Select product to delete:</label>
    <select name="product_id">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
            <option value="<?php echo $row['product_id']; ?>"><?php echo $row['product_name']; ?></option>
        <?php endwhile; ?>
    </select>
    <input type="submit" value="Delete Product">
</form>

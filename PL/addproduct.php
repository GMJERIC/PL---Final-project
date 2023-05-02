<?php
require_once ('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    $product_name = $_POST['product_name'];
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["product_pic"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(move_uploaded_file($_FILES["product_pic"]["tmp_name"], $target_file)) {
        $product_pic = $target_file;
    } else {
        echo "Error uploading image.";
        exit;
    }
    
    $product_desc = $_POST['product_desc'];
        
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO products (product_name, product_pic, product_desc) VALUES ('$product_name', '$product_pic', '$product_desc')";

    if (mysqli_query($conn, $sql)) {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('New Product Added Successfully')
    window.location.href='adminproducts.php';
    </SCRIPT>");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <link rel="stylesheet" href="addproduct.css">

<head>
	<title>Add New Product</title>
</head>
<body>
<div class="form-popup" id="addProductForm">
      <form action="addproduct.php" method="post" class="form-container" enctype="multipart/form-data">
        <h2>Add Product</h2>
        <label for="product_name"><b>Product Name</b></label>
        <input type="text" placeholder="Enter Product Name" name="product_name" required>
        <br>
        <label for="product_pic"><b>Product Picture</b></label>
        <br>
        <input type="file" name="product_pic" accept="image/*" required>
        <label for="product_desc"><b><br><br>Product Description</b></label>
        <textarea placeholder="Enter Product Description" name="product_desc" required></textarea>
        <button type="submit" class="btn success" onclick="location.href='adminproducts.php'">Add Product</button>
        <button type="button" class="btn cancel" onclick="location.href='adminproducts.php'">Close</button>
      </form>
    </div>
  </body>
  <script>
    function showForm() {
      document.getElementById("addProductForm").style.display = "block";
    }
   
  </script>
</html>

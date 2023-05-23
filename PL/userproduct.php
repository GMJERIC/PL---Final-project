<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <link rel="stylesheet" href="userproduct.css">
    <title>INFINIX</title>

</head>
<body>
  <div class="header">
  <a  class="logo" href="userproduct.php">Infinix</a>
  <div class="header-right">
    
    <a href="userproduct.php"> Products</a>
    <a href="addtocart.php"> Add to cart items</a>
    <a class="loginbanner"href="userlogin.php">Logout</a>
  
  </div>
  
  </div> 
 
  <center >
    <h1 class="smartphonesheader">Smartphones</h1>
  </center>
  
  <?php
require_once('connection.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // retrieve product from database
    $sql = "SELECT * FROM products WHERE product_id = '$product_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // add product to cart
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$product_id] = array(
            'product_id' => $product_id,
            'product_name' => $row['product_name'],
            'product_price' => $row['product_price'],
            'quantity' => $quantity
        );
         // update stacks in database
  $new_stacks = $row['stacks'] - $quantity;
  $sql = "UPDATE products SET stacks = '$new_stacks' WHERE product_id = '$product_id'";
  mysqli_query($conn, $sql);
    }
   
}

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="container">
              <h3 class="title">' . $row['product_name'] . '</h3>
              <h3 class="title"> Price: '. $row['product_price'] . '</h3>
              <h3 class="title"> Stacks: '. $row['stacks'] . '</h3>
              <div class="content">
                <div class="image-overlay"></div>
                <img class="content-image" src="' . $row['product_pic'] . '" alt="' . $row['product_name'] . '">
                <div class="content-details fadeIn-bottom">
                    <p>' . $row['product_desc'] . '</p>
                    
                </div>
              </div>
              <br>
              <form class="quantitylabel" method="post" action="addtocartprocess.php">
                        <input type="hidden" name="product_id" value="' . $row['product_id'] . '">
                        <label for="quantity">Quantity:</label>
                        <input class=""type="number" id="quantity" name="quantity" min="1" value="1">
                        <button class="addtocartbut"type="submit">Add to Cart</button>
                    </form>
          </div>';
}
mysqli_close($conn);
?>

  <br>
  
  <br>
</body>
</html>


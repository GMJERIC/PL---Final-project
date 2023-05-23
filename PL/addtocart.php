<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <link rel="stylesheet" href="addtocart.css">
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
    <h1 class="smartphonesheader">Add to cart items</h1>
  </center>
  <?php
    require_once('connection.php');
    session_start();

    if (!empty($_SESSION['cart'])) {
      echo '<table>';
      echo '<thead><tr><th>Product Name</th><th>Quantity</th><th>Picture</th><th>Price</th><th>Subtotal</th></tr></thead>';
      echo '<tbody>';
      $total_price = 0;
      foreach ($_SESSION['cart'] as $product_id => $cart_item) {
          $quantity = $cart_item['quantity'];
          $product_name = $cart_item['product_name'];
          $product_price = $cart_item['product_price'];
          $product_pic = $cart_item['product_pic'];
          $subtotal = $quantity * $product_price;
          $total_price += $subtotal;
  
          echo '<tr>';  
          echo '<td>' . $product_name . '</td>';
          echo '<td>' . $quantity . '</td>';
          echo '<td><img src="' . $product_pic . '" alt="' . $product_name . '" class="product_image"></td>';
          echo '<td>' . $product_price . '</td>';
          echo '<td>' . $subtotal . '</td>';
          echo '</tr>';
      }
      echo '<tr><td colspan="4" align="right">Total Price:</td><td>' . $total_price . '</td></tr>';
      echo '</tbody>';
      echo '</table>';
      echo '<br>';
      
      echo '<div class="button-container">';
      echo '<form class="clear_cart" method="post" action="addtocartprocess.php">';
      echo '<input type="hidden" name="action" value="clear_cart">';
      echo '<button class="clear_cart_butt" type="submit">Clear Cart</button>';
      echo '</form>';

      echo '<form class="checkout" method="post" action="checkout.php">';
      echo '<button  class="checkoutbutt"type="submit">Checkout</button>';
      echo '</form>';
      echo '</div>';

  } else {
      echo '<p>Your cart is empty.</p>';
  }
  
    ?>  
    

</body>
</html>
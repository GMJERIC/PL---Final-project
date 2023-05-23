<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <link rel="stylesheet" href="product.css">
    <title>INFINIX</title>

</head>
<body>
  <div class="header">
  <a  class="logo" href="index.php">Infinix</a>
  <div class="header-right">
    <a class="active" href="index.php"> Home</a>
    <a href="products.php"> Products</a>
    <a href="aboutus.php"> About us</a>
    <a class="loginbanner"href="userlogin.php">Login</a>

  </div>
  
  </div> 
  
  <center >
    <h1 class="smartphonesheader">Smartphones</h1>
  </center>

  <?php
    require_once('connection.php');
   
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
  </div>';
}
mysqli_close($conn);
?>
</body>
</html>


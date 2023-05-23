<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <link rel="stylesheet" href="adminproducts.css">
    <title>INFINIX</title>

</head>
<body>
  <div class="header">
  <a  class="logo" href="adminproducts.php">Infinix</a>
  <div class="header-right">
    
    <a href="adminproducts.php"> Products</a>
    <a href="create_admin.php"> Create Admin</a>
    <a class="loginbanner"href="userlogin.php">Logout</a>

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



  
    <br>
    <br>
  <div class="button-container">
		<button onclick="location.href='addproduct.php'" class="btn add">Add</button>
		<button onclick="location.href='updateproduct.php'" class="btn update">Update</button>
		<button onclick="location.href='deleteproduct.php'" class="btn delete">Delete</button>
		
	</div>
 <br>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <link rel="stylesheet" href="create_admin.css">
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
        
  <div class="create_admin_box">
  <h1>Create Admin</h1>
  <form action="create_admin_process.php" method="POST">
    <p>Username</p>
    <input type="text" name="username" placeholder="Enter Username" required>
    <p>Password</p>
    <input type="password" name="password" id="password" placeholder="Enter Password" required>
    <input type="submit" name="create_admin" value="Create Admin" >
  </form>
</div>



</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <link rel="stylesheet" href="create_user.css">
    <title>INFINIX</title>

</head>
<body>
<div class="header">
            <a  class="logo" href="index.php" >Infinix</a>
                <div class="header-right">
                    <a class="active" href="index.php"> Home</a>
                    <a href="products.php"> Products</a>
                    <a href="aboutus.php"> About us</a>
                    <a class="loginbanner"href="userlogin.php">Login</a>
                </div>
        </div>
        
        
  <div class="create_admin_box">
  <h1>Create User</h1>
  <form action="create_user_process.php" method="POST">
    <p>name</p>
    <input type="text" name="name" placeholder="Enter name" required>
    <p>Username</p>
    <input type="text" name="username" placeholder="Enter Username" required>
    <p>Password</p>
    <input type="password" name="password" id="password" placeholder="Enter Password" required>
    <input type="submit" name="create_admin" value="Create User" >
    <a class="userlogin" href="userlogin.php">User Login</a>
</div>



</body>

</html>
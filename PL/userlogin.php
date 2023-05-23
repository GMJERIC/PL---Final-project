<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <meta http-equiv="X-UA-Compatible" content="ei=edge">
    <link rel="stylesheet" href="userlogin.css">
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
        
        <div class="loginbox">
        <h1>User Login Here</h1>
        <form action="userloginprocess.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" required="required">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required="required">
            <input type="submit" name="login-submit" value="Login">
            <a class="create_account" href="create_user.php">Create New Account?</a>
            <br>
            <a class="adminlogin" href="adminlogin.php">Admin Login</a>
        </form>
</body>

</html>
<?php

require_once ('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from `admins` WHERE username = '$username' AND password = '$password'";



$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 1){
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Login Successfully')
    window.location.href='adminproducts.php';
    </SCRIPT>");


    
   
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Username or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>
<?php

require_once('connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    $hashed_password = $user['password'];

    if (password_verify($password, $hashed_password)) {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Successfully')
        window.location.href='userproduct.php';
        </SCRIPT>");
    } else {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Invalid Username or Password')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
    }
} else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Username or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

?>

<?php
require_once ('connection.php');
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

$encrypted_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `users` (name, username, password) VALUES ('$name','$username', '$encrypted_password')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('User created successfully')
    window.location.href='userlogin.php';
    </SCRIPT>");
} else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Error creating admin')
    window.location.href='create_admin.php';
    </SCRIPT>");
}

mysqli_close($conn);
?>

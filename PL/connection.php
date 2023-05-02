<?php

$servername = "localhost";
$Username = "root";
$Password = "";
$database = "dbs";

$conn = mysqli_connect($servername, $Username, $Password, $database);

if(!$conn){
	echo "Databese Connection Failed";
}

?>
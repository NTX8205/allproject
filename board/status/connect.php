<?php

//connect server data

$servername = "localhost";
$username = "root";
$password = "";

$link = mysqli_connect("localhost", "root", "", "board") or die("connect error!");

$conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);

?>

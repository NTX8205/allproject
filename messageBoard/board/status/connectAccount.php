<?php

//connect server data

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "board";

$con = new mysqli($servername,$username,$password,$dbname);

$link = mysqli_connect("localhost","root","","board") or die("connect error!");

?>
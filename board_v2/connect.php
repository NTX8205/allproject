<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "mesboard";

$connect= new mysqli($servername, $user, $password, $dbname);


if($connect->connect_error){
    die("failed". $connect->connect_error);
}
?>
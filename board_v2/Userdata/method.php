<?php

require_once("/xampp/htdocs/allproject/board_v2/connect.php");

$_POST["method"] = isset($_POST["method"]) ? $_POST["method"] : null;
$_POST["id"] = isset($_POST["id"]) ? $_POST["id"] : null;
$fun = $_POST["method"];
$id = $_POST["id"];



switch ($fun) {
    case "login":
        login($id,$pdo);
        break;
    case "register":
        register($pdo);
        break;
    case "logout":
        delete($id, $pdo);
        break;
    default:
        echo "no";
        break;
}

function register($pdo)
{
    $query = "INSERT INTO `user` (`name`, `password`) VALUES ('$_POST[user]', '$_POST[password]')";
    $pdo->query($query);
    header("location:board.php");
}

function login($pdo)
{
    
    header("location:board.php");
}

function logout($pdo)
{
    
    header("location:board.php");
}


?>
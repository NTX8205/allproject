<?php

require '../../model/users.php';
require '../../../vendor/autoload.php';
use App\Model\User;

$users = new User();

$email = $_POST['emailAddress'];
$password = $_POST['password'];
$user = $_POST['userName'];

$password_hash = password_hash($password, PASSWORD_BCRYPT);



$statement = $users->userRegister($user, $email, $password_hash);


header('Location: /allproject/messageBoard/board_v3/src/user/login.php');

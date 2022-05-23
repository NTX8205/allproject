<?php

use App\Model\User;

require '../../model/users.php';
require '../../../vendor/autoload.php';

session_start();
$user = new User();

if (isset($_SESSION['userName'])) {
    unset($_SESSION['userName']);
    header('Location: /allproject/messageBoard/board_v3/src/user/login.php');
} else {
    $email = $_POST['emailAddress'];
    $password = $_POST['password'];

    $statement = $user->userLogin($email);

    $count = 0;
    foreach ($statement as $row) {
        $count++;
        $username = $row['name'];
        $password_hash = $row['password'];
    }
    if ($count === 1) {
        $pass  = password_verify($password, $password_hash);
        if ($pass) {
            $_SESSION['userName'] = $username;
            header('Location: /allproject/messageBoard/board_v3/src/user/login.php');
        } else {
            echo '<h1><p style="text-align: center;">登入失敗</p></h1>
                    <p style="text-align: center;">2秒後返回登入頁面</p>';
            echo '<meta http-equiv="refresh" content="2;url=../../user/login.php">';
        }
    } else {
        echo '<h1><p style="text-align: center;">登入失敗</p></h1>
                    <p style="text-align: center;">2秒後返回登入頁面</p>';
        echo '<meta http-equiv="refresh" content="2;url=../../user/login.php">';
    }
}

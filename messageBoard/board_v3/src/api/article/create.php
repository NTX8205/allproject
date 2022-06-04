<?php

session_start();
use App\Model\User;
use App\Model\Article;

require '../../model/users.php';
require "../../model/articles.php";
require '../../../vendor/autoload.php';
$user = new User();
$article = new Article();
$title = $_POST['title'];
$content = $_POST['content'];
if (isset($_SESSION['userName'])) {
    $userStatement = $user->findUser($_SESSION['userName']);
    $articleStatement = $article->addArticle($title, $content, $userStatement['id']);
    header('Location: ../../../src/article/list.php');
} else {
    header('Location: ../../../src/user/login.php');
}

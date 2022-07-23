<?php

session_start();
use App\Model\Article;
use App\Model\User;

require '../../model/users.php';
require "../../model/article.php";
require '../../../vendor/autoload.php';

$id = $_GET['id'];
$article = new Article();
$users = new User();
$statement = $article->viewArticle($id);
if (isset($_SESSION['userName'])) {
    $user = $users->findUser($_SESSION['userName']);
}
include("../../article/view.php");

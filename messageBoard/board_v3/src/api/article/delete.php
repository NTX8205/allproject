<?php

session_start();

use App\Model\Article;
use App\Model\User;

require '../../model/users.php';
require "../../model/articles.php";
require '../../../vendor/autoload.php';


$id = $_POST['id'];
$article = new Article();
$users = new User();
$user = $users->findUser($_SESSION['userName']);
if ($statement['user_id'] == $user['id']) {
    $statement = $article->deleteArticle($id);
}
header("Location: ../../article/list.php");

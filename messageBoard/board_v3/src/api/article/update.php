<?php

//include("../../model/article.php");
//$id = $_POST['id'];
//$statement = editArticle($id);
//header('Location: /message_board/index.php');
session_start();
use App\Model\Article;
use App\Model\User;

require '../../model/users.php';
require "../../model/articles.php";
require '../../../vendor/autoload.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content =  $_POST['content'];
$article = new Article();
$users = new User();
$user = $users->findUser($_SESSION['userName']);
$statement = $article->getSingalArticle($id);
if ($statement['user_id'] == $user['id']) {
    $statement = $article->updateArticle($id, $title, $content);
    header("Location: ../../article/fullmes.php?id=$id");
} else {
    echo '<h1><p style="text-align: center;">請勿修改他人留言</p></h1>
                <p style="text-align: center;">1秒後返回登入頁面</p>';
    echo '<meta http-equiv="refresh" content="5;url=../../article/list.php">';
}

//header('Location: /message_board/public/index.php');
//include("../../model/article.php");

//include ("../");

<?php

//include("../../model/article.php");
//$id = $_POST['id'];
//$statement = editArticle($id);
//header('Location: /message_board/index.php');

use App\Model\Article;

require '../../../vendor/autoload.php';

$id = $_POST['id'];
$title = $_POST['title'];
$content =  $_POST['content'];
$article = new Article();
$statement = $article->updateArticle($id, $title, $content);
header('Location: /message_board/public/index.php');
//header('Location: /message_board/public/index.php');
//include("../../model/article.php");

//include ("../");
////header('Location: /message_board/index.php');

<?php
use App\Model\Article;
require '../../../vendor/autoload.php';

//$db = require_once "../../Config/database.php";


$id = $_GET['id'];
$article = new Article();
$statement = $article->editArticle($id);
include ("../../article/edit.php");
//header('Location: /message_board/public/index.php');
//include("../../model/article.php");

//include ("../");
////header('Location: /message_board/index.php');
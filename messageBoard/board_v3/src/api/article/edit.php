<?php

use App\Model\Article;

require "../../model/articles.php";
require '../../../vendor/autoload.php';


$id = $_GET['id'];
$article = new Article();
$statement = $article->editArticle($id);

include("../../article/edit.php");

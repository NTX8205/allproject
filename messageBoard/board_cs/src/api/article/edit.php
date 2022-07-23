<?php

use App\Model\Article;

require '../../../vendor/autoload.php';
include("../../Config/header.php");
$id = $_GET['id'];
$article = new Article();
$statement = $article->editArticle($id);
include("../../article/edit.php");
?>
<html>
    <link rel="stylesheet" type="text/css" href="../../../css/practice.css">
    <link rel="stylesheet" type="text/css" href="../../../css/article/edit.css">
</html>
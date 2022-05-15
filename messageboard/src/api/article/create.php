<?php
include("../../model/articles.php");
$title = $_POST['title'];
$content = $_POST['content'];
$statement = createArticle($title, $content);
header('Location: /message_board/index.php');
?>
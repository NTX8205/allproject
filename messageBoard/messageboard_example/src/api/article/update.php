<?php
include("../../model/articles.php");
$id = $_POST['id'];
$statement = editArticle($id);
header('Location: /message_board/index.php');
?>
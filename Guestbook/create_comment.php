<?php

    include("datatable.php");
    $name = $_POST["name"];
    $comment = $_POST['comment'];
    $statement = createComment($name, $comment);
    header('Location: /allproject/Guestbook/index.php');

?>
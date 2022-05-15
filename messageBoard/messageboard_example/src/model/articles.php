<?php

//include ("../../Config/Database.php");
//$db = dbConnect();


function dbConnect(): PDO
{
    $db_type = 'mysql';
    $db_host = 'localhost';
    $db_name = 'board';
    $db_user = 'root';
    $db_password = '';
    $connect = $db_type . ":host=" . $db_host . ";dbname=" . $db_name;
    $db = new PDO($connect, $db_user, $db_password);
    $db->query("SET NAMES UTF8");
    return $db;
}

/**
 * 編輯留言
 * @param $id
 * @return array|false
 */

function createArticle( string $title,string $content){
    $db = dbConnect();
    $statement = $db->prepare("INSERT INTO articles(`title`, `content`,`user_id`) VALUES (?,?,?)");
    $statement->execute([$title, $content,2]);
    return $statement;
}

function editArticle($id)
{
    $db = dbConnect();
    $statement = $db->prepare("SELECT * FROM articles WHERE id=?");
    $statement->execute([$id]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
function updateArticle($id, $title, $content)
{
    $db = dbConnect();
    $statement = $db->prepare("UPDATE articles SET title =? WHERE content=?");
    $statement->execute([$title,$content]);
    return $statement;
}
function deleteArticle($id)
{
    $db = dbConnect();
    $statement = $db->prepare("DELETE FROM articles WHERE id=?");
    $statement->execute([$id]);
    return $statement;
}

function getAllArticle(): array
{
    $db = dbConnect();
    $statement = $db->prepare("SELECT * FROM articles");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}





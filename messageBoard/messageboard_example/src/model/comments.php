<?php

/**
* 連接資料庫
* PHP 資料庫
*
* @param string $name 暱稱
* @param string $comment 留言訊息
*
* @return false|PDOStatement
*/
function createComment( $name, $comment)
{
$db = dbConnect();
$statement = $db->prepare("INSERT INTO message(`name`, `comment`) VALUES (?,?)");
$statement->execute([$name,$comment]);
return $statement;
}
/**
* 把所有留言撈出來
* PHP 資料庫
*
* @return array
*/
function getAllComments()
{
$db = dbConnect();
$statement = $db->prepare("SELECT * FROM message");
$statement->execute();
return $statement->fetchAll(PDO::FETCH_ASSOC);
}

/**
* 編輯留言
* @param $id
* @return array|false
*/
function editComment($id)
{
$db = dbConnect();
$statement = $db->prepare("SELECT * FROM message WHERE id=?");
$statement->execute([$id]);
return $statement->fetchAll(PDO::FETCH_ASSOC);
}
function updateComment($id, $name, $comment)
{
$db = dbConnect();
$statement = $db->prepare("UPDATE message SET name=?, comment =? WHERE id=?");
$statement->execute([$name,$comment,$id]);
return $statement;
}
function deleteComment($id)
{
$db = dbConnect();
$statement = $db->prepare("DELETE FROM message WHERE id=?");
$statement->execute([$id]);
return $statement;
}

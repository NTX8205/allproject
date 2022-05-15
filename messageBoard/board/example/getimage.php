<?php

$id = 2; // $_GET['id']; 為簡潔,直接將id寫上了,正常應該是通過使用者填入的id獲取的
$dsn = 'mysql:dbname=example;host=localhost';
$pdo = new PDO($dsn, 'root', '');
$query = "select bin_data,filetype from ccs_image where id=2";
$result = $pdo->query($query);
$result = $result->fetchAll(2);
//    var_dump($result);
$data = $result[0]['bin_data'];
$type = $result[0]['filetype'];
Header("Content-type: $type");
echo $data;

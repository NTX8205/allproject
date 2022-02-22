<?php

$servername = "127.0.0.1";
$username = "root";
$passsword = "";
$dbname = "list";

try{
    $dblink = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8",$username,$passsword);
    $dblink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";

    $result=$dblink->query("SELECT * FROM user ORDER BY id ASC");

    if(!$result) print_r($dblink->errorInfo());

    while($row = $result->fetch()){
        print_r($row);
        echo "<br>";
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



?>
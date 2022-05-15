<?php

namespace App\Model;
use App\Config\Database;
use PDO;

class user{
    function dbconnect()
    {
        $db_type = Database::DATABASE_INFO['db_type'];
        $db_host = Database::DATABASE_INFO['db_host'];
        $db_name = Database::DATABASE_INFO['db_name'];
        $db_user = Database::DATABASE_INFO['db_user'];
        $db_password = '';
        $connect = $db_type . ":host=" . $db_host . ";dbname=" . $db_name;
        $db = new PDO($connect, $db_user, $db_password);
        $db->query("SET NAMES UTF8");
        return $db;
    }
    /**
     * 新增使用者
     * PHP 資料庫
     *
     * @param string $name 暱稱
     * @param string $password 原密碼
     * @param string $email 信箱
     *
     * @return false | true 回傳
     */

    function createUser( $name, $password, $email){
        echo "This is a test";
        $db = $this->dbconnect();
        $hash_password=hash('sha256',$password);
        $statement = $db->prepare("INSERT INTO users(`name`, `password`, `email`) VALUES (?,?,?)");
        $statement->execute([$name, $hash_password, $email]);
        return $statement;
    }
}
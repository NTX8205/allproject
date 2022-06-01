<?php

namespace App\Model;

use App\Config\Database;
use PDO;

class User
{
    public function dbConnect()
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
    public function userLogin($email)
    {
        $db = $this->dbConnect();
        $statement = $db->prepare("SELECT * FROM users WHERE email=?");
        $statement->execute([$email]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function userRegister($user, $email, $password)
    {
        $db = $this->dbConnect();
        $statement = $db->prepare("INSERT INTO users(name, email, password) VALUE (?,?,?)");
        $statement->execute([$user, $email, $password]);
        return $statement;
    }
}

<?php

namespace App\Model;

use App\Config\Database;
use PDO;

class Article
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

    public function addArticle($title, $content, $user_id)
    {
        $db = $this->dbConnect();
        $statement = $db->prepare("INSERT INTO articles(title, content, user_id) VALUES(?,?,?)");
        $statement->execute([$title, $content, $user_id]);
        return $statement;
    }

    public function editArticle($id)
    {
        $db = $this->dbConnect();
        $statement = $db->prepare("SELECT * FROM articles WHERE id=?");
        $statement->execute([$id]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function viewArticle($id)
    {
        $db = $this->dbConnect();
        $statement = $db->prepare("SELECT * FROM articles WHERE id=?");
        $statement->execute([$id]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function updateArticle($id, $title, $content)
    {
        $db = $this->dbConnect();
        $statement = $db->prepare("UPDATE articles SET title =? ,content=? WHERE id=?");
        $statement->execute([$title,$content,$id]);
        return $statement;
    }

    public function deleteArticle($id)
    {
        $db = $this->dbConnect();
        $statement = $db->prepare("DELETE FROM articles WHERE id= ?");
        $statement->execute([$id]);
        return $statement;
    }

    public function getAllArticle(): array
    {
        $db = $this->dbConnect();
        $statement = $db->prepare("SELECT * FROM articles");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

<?php

    $host = 'localhost';
    $database = 'board';
    $userName = 'root';
    $password = '';
    $charset = 'utf8mb4';
    $attributes = "mysql:host=$host;dbname=$database;charset=$charset";
    $options = [

        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        $pdo = new PDO($attributes, $userName, $password, $options);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

<?php

$dbFile = 'C:/xampp/htdocs/enigma-inc/project2.db';

try {
    $db = new PDO('sqlite:' . $dbFile);
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

$db->exec('PRAGMA encoding = "UTF-8";');

$db->exec('
    CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        email TEXT NOT NULL,
        password TEXT NOT NULL
    )
');
?>

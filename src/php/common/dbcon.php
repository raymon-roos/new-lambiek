<?php

$host = '127.0.0.1';
$db   = 'lambiek';
$user = 'bit_academy';
$pass = 'bit_academy';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Making PDO a global constant, so it becomes available for use inside the functions below
try {
    define('DB', new PDO($dsn, $user, $pass));
    DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}


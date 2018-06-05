<?php
require("db_data.php");

try{
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';', $user, $pass);
    $pdo->query('SET NAMES utf8');
    $pdo->query('SET CHARACTER_SET utf8_unicode_ci');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $ex) {
    echo "błąd połączenia z bazą danych ";
}
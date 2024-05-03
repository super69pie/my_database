<?php
// database_connection.php

// 數據庫連接設置
$host = "localhost:3306";
$dbusername = "root";
$dbpassword = "root";
$dbname = "gogopy";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
    // 設置PDO錯誤模式為異常
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "資料庫連接失敗: " . $e->getMessage();
} 
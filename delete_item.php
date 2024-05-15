<?php
include "database_connection.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['delete_item'])) {
    try {
        $deleteStmt = $db->prepare("DELETE FROM shoping_car WHERE item_id = :itemID AND ID = :userID");
        $deleteStmt->bindParam(':itemID', $_POST['delete_item_id']);
        $deleteStmt->bindParam(':userID', $_SESSION['user_id']);
        $deleteStmt->execute();
        echo "<script>alert('商品已成功刪除');</script>";
        echo '<script>window.location.href="shop.php";</script>';
    } catch (PDOException $e) {
        echo "<p>Delete operation failed: " . $e->getMessage() . "</p>";
    }
}
?>
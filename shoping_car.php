<?php
        // if (!isset($_SESSION['username'])) {
        //     echo "<script>alert('偵測到未登入'); window.location.href = 'login.php';</script>";
        //     exit(); 
        // }
        include "database_connection.php";

        
        $recordsPerPage = 20;
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($page - 1) * $recordsPerPage;

        
        $sortTime = $_GET['sort-time'] ?? 'newest';
        $sortPrice = $_GET['sort-price'] ?? 'highest';
        $sortCategory = $_GET['sort-category'] ?? '';
        $searchTerm = $_GET['search'] ?? '';

        
        // $sql = "SELECT * FROM product WHERE 1=1";
        $sql = "SELECT * FROM items t1
                JOIN shoping_car t2 ON t1.item_id = t2.item_id
                WHERE t2.ID = :ID";
        $countSql = "SELECT COUNT(*) FROM items t1
                    JOIN shoping_car t2 ON t1.item_id = t2.item_id
                    WHERE t2.ID = :ID";

        $stmt = $db->prepare($sql);
        $stmt -> bindParam(':ID', $_SESSION['user_id']);
        $stmt->execute();
        
        $countStmt = $db->prepare($countSql);
        $countStmt -> bindParam(':ID', $_SESSION['user_id']);
        $countStmt->execute();
        $totalRecords = $countStmt->fetchColumn();
        $numPages = ceil($totalRecords / $recordsPerPage);
    ?>
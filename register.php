<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>狗狗py | register Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 300px;
            margin: 0 auto;
            margin-top: 100px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            text-align: center;
        }
    </style>
<?php
    // 檢查是否有 POST 請求提交
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 检查所有字段是否都被填写
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $password = $_POST['password'] ?? '';
        $confirm_password = $_POST['confirm_password'] ?? '';
        
        if(!empty($username) && !empty($email) && !empty($phone) && !empty($password) && !empty($confirm_password)) {
            if($password === $confirm_password) {
                include "database_connection.php";
                $stmt = $db->prepare("INSERT INTO members (role, account, password, phone, email) VALUES (?, ?, ?, ?, ?)");
                if ($stmt) {
                    $role = "user";
                    // 將參數綁定到 prepared statement
                    $stmt->bindValue(1, $role);
                    $stmt->bindValue(2, $username);
                    $stmt->bindValue(3, $password);
                    $stmt->bindValue(4, $phone);
                    $stmt->bindValue(5, $email);
            
                    // 執行 prepared statement
                    if ($stmt->execute()) {
                        // 注册成功后弹窗提示，然后重定向到 index.php
                        echo "<script>alert('註冊成功！'); window.location.href = 'index.php';</script>";
                        exit;
                    } else {
                        echo "Error: " . $stmt->error;
                    }
                } 
            } else {
                echo "<script>alert('密碼不一致');</script>";
            }
        } else {
            echo "<script>alert('請填寫所有欄位');</script>";
        }
    }
?>
    
</head>

<body>
    <div class="container">
        <h2>註冊一個帳號</h2>
        <form id="registerForm" action="register.php" method="post" >
            <input type="text" id="username" name="username" placeholder="Account">
            <input type="text" id="email" name="email" placeholder="Email">
            <input type="text" id="phone" name="phone" placeholder="Phone">
            <input type="password" id="password" name="password" placeholder="Password">
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
            <input type="submit" value="Register">
        </form>
        <p class="error" id="errorMsg"></p>
        <p>已經有帳號了？<a href="index.php">返回登入</a>.</p>
    </div>
</body>
</html>

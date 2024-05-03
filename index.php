<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>狗狗py | Account Page</title>
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
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* CSS 样式 */
    </style>
</head>
<body>
    
    <?php
    session_start();  // 啟用交談期
    $name = "";  $password = "";
    // 取得表單欄位值
    if ( isset($_POST["username"]) )
    $name = $_POST["username"];
    if ( isset($_POST["password"]) )
    $password = $_POST["password"];
    // 檢查是否輸入使用者名稱和密碼
    if ($name != "" && $password != "") {
    // 建立MySQL的資料庫連接 
    include "database_connection.php";
    //送出UTF8編碼的MySQL指令
    //mysqli_query($link, 'SET NAMES utf8'); 
    // 建立SQL指令字串
    $stmt=$db->prepare("SELECT * FROM members WHERE account = :account AND password =:password");
    $stmt->bindParam(':account',$name);
    $stmt->bindParam(':password',$password);
    $stmt->execute();
    $user=$stmt->fetch(PDO::FETCH_ASSOC);
    // 是否有查詢到使用者記錄
    if ( $user ) {
        // 成功登入, 指定Session變數
        $_SESSION["login_session"] = true;
        $_SESSION["user_id"] =$user['ID'];
        header("Location: gogo.html");
    } else {  // 登入失敗
        echo "<center><font color='red'>";
        echo "使用者名稱或密碼錯誤!<br/>";
        echo "</font>";
        $_SESSION["login_session"] = false;
    }  
    }
    ?>

    <div class="container">
        <h2>登入帳號</h2>
        <form id="loginForm" action="index.php" method="post" >
            <input type="text" id="username" name="username" placeholder="Account">
            <input type="password" id="password" name="password" placeholder="Password">
            <input type="submit" value="Login">
        </form>
        <p class="error" id="errorMsg"></p>
        <p>還沒有帳號嗎？<a href="register.php">點我立即註冊</a>.</p>
    </div>
</body>
</html>
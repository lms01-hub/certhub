<?php

session_start();
include "db.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users
            WHERE email='$email'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){

        $user = mysqli_fetch_assoc($result);

        $_SESSION['nickname'] = $user['nickname'];
        $_SESSION['point'] = $user['point'];
        header("Location: home.php");
        exit;
    }
    else{
        echo "이메일 또는 비밀번호가 틀렸습니다.";
    }
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>로그인</title>
</head>
<body>


<div class="container">

<h1>로그인</h1>

<form method="post">
    <p>
        이메일<br>
        <input type="email" name="email">
    </p>

    <p>
        비밀번호<br>
        <input type="password" name="password">
    </p>

    <button type="submit">로그인</button>
</form>

</div>
</body>
</html>
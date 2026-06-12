<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $nickname = $_POST["nickname"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users(email, nickname, password)
            VALUES('$email', '$nickname', '$password')";

    if(mysqli_query($conn, $sql)){
        echo "저장 성공";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

    <h1>회원가입</h1>

    <form method="post">
        <label>이메일</label>
        <input type="email" name="email" required>

        <label>닉네임</label>
        <input type="text" name="nickname">

        <label>비밀번호</label>
        <input type="password" name="password" required>

        <button type="submit">회원가입</button>
    </form>

</div>

</body>
</html>
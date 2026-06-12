<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include "db.php";

if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
    exit;
}

// 정답 처리
if(isset($_POST['answer'])){

    $answer = $_POST['answer'];

    if($answer == "HTML"){

        $_SESSION['point'] += 10;

        $conn->query("
            UPDATE users 
            SET point = point + 10 
            WHERE nickname = '{$_SESSION['nickname']}'
        ");

        echo "<script>alert('정답! +10 포인트');</script>";
    } else {
        echo "<script>alert('틀렸습니다');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>퀴즈</title>
</head>
<body>

<h1>📘 문제</h1>

<p>웹 페이지 구조를 만드는 언어는?</p>

<form method="post">
    <input type="text" name="answer" placeholder="정답 입력">
    <button type="submit">제출</button>
</form>

<br>

<a href="home.php">홈으로</a>

</body>
</html>
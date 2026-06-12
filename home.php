<?php
session_start();
include "db.php"; // ⭐ 중요

if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
    exit;
}

if(isset($_POST['add_point'])){

    $_SESSION['point'] += 10;

    $conn->query("
        UPDATE users 
        SET point = point + 10 
        WHERE nickname = '{$_SESSION['nickname']}'
    ");
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>홈</title>
</head>
<body>

<h1>환영합니다 <?php echo $_SESSION['nickname']; ?>님</h1>

<h3>포인트: <?php echo $_SESSION['point']; ?>점</h3>

<a href="ranking.php">🏆 랭킹 보기</a>
<br>
<a href="quiz.php">📘 문제 풀기</a>
<br><br>

<form method="post">
    <button type="submit" name="add_point">포인트 +10</button>
</form>

<br>

<a href="logout.php">로그아웃</a>

</body>
</html>
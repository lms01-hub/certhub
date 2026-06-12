<?php
session_start();

if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
    exit;
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

</body>
</html>
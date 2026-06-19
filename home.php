<?php
session_start();
include "db.php";

if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="ko">

<head>

<meta charset="UTF-8">
<title>CertHub</title>

<link rel="stylesheet" href="css/style.css">

</head>


<body>


<header>

<h2>CertHub</h2>

<nav>
<a href="quiz.php">문제풀기</a>
<a href="ranking.php">랭킹</a>
<a href="logout.php">로그아웃</a>
</nav>

</header>



<section class="hero">


<h1>
안녕하세요
<?php echo $_SESSION['nickname']; ?>님 👋
</h1>


<p>
자격증 취득을 위한 나만의 학습 공간
</p>


<button onclick="location.href='quiz.php'">
오늘 문제 풀기
</button>


</section>




<section class="dashboard">


<div class="card">

<h3>⭐ Point</h3>

<p>
<?php echo $_SESSION['point']; ?> P
</p>


</div>



<div class="card">

<h3>🔥 학습 레벨</h3>

<p>
Lv.1
</p>


</div>



<div class="card">

<h3>🏆 랭킹</h3>

<p>
확인하기
</p>


</div>


</section>




<section>

<h2>추천 자격증</h2>


<div class="card-list">


<div class="card">
정보처리기사
</div>


<div class="card">
SQLD
</div>


<div class="card">
네트워크관리사
</div>


</div>


</section>



</body>

</html>
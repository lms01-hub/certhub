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

<title>CertHub</title>

<link rel="stylesheet" href="css/style.css">

<script src="js/main.js" defer></script>

</head>


<body>


<header>


<div class="logo">
CertHub
</div>



<nav>

<a href="home.php">홈</a>

<a href="quiz.php">문제풀기</a>

<a href="ranking.php">랭킹</a>

<a href="#">오답노트</a>

<a href="#">마이페이지</a>

<a href="logout.php">로그아웃</a>

</nav>


</header>





<section class="hero">


<div class="hero-text">


<h1>

자격증 공부,<br>

기록하며 성장하세요 🚀

</h1>


<p>

문제 풀이부터 포인트,
랭킹까지<br>

CertHub에서 관리하세요.

</p>



<button onclick="location.href='quiz.php'">

오늘 문제 풀기 →

</button>


</div>





<div class="hero-card">


<h2>
Lv.1
</h2>


<p>
나의 학습 성장
</p>



<div class="mini">

🔥 연속 학습 1일

</div>


</div>


</section>







<section class="dashboard">


<div class="card">

<h3>
⭐ Point
</h3>

<strong>
<?php echo $_SESSION['point'] ?? 0; ?>P
</strong>

<p>
학습 보상
</p>

</div>




<div class="card">

<h3>
🔥 Level
</h3>


<strong>
Lv.1
</strong>


<p>
성장중
</p>


</div>





<div class="card">

<h3>
🏆 Ranking
</h3>


<strong>
TOP 10
</strong>


<p>
나의 위치
</p>


</div>



</section>







<section class="certificate-section">


<h2>
🔥 인기 자격증
</h2>




<div class="slider">


<button class="slide-btn">
←
</button>



<div class="slider-box">



<div class="slider-track">



<div class="cert-card">

<h3>
정보처리기사
</h3>


<p>
⭐⭐⭐⭐⭐
</p>


<p>
IT 대표 자격증
</p>


</div>





<div class="cert-card">

<h3>
SQLD
</h3>


<p>
⭐⭐⭐⭐
</p>


<p>
데이터 전문가
</p>


</div>






<div class="cert-card">

<h3>
네트워크관리사
</h3>


<p>
⭐⭐⭐⭐
</p>


<p>
네트워크 기초
</p>


</div>






<div class="cert-card">

<h3>
리눅스마스터
</h3>


<p>
⭐⭐⭐⭐
</p>


<p>
서버 관리
</p>


</div>




</div>



</div>





<button class="slide-btn">
→
</button>


</div>


</section>







<section class="goal">


<h2>
오늘의 학습 목표
</h2>


<div class="progress">


<div></div>


</div>


<p>
오늘 20문제 풀이 추천
</p>


</section>





<footer>

<p>
© CertHub
</p>


</footer>

<!-- 스크롤 이동 버튼 -->

<div class="scroll-btn">

<button onclick="goTop()">
↑
<br>
TOP
</button>


<button onclick="goBottom()">
↓
<br>
BOTTOM
</button>

</div>

</body>

</html>
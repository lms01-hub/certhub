<?php
session_start();
include "db.php";

if(!isset($_SESSION['nickname'])){
    header("Location: login.php");
    exit;
}


// 문제 가져오기
$sql = "SELECT * FROM quizzes ORDER BY RAND() LIMIT 1";

$result = mysqli_query($conn,$sql);

$quiz = mysqli_fetch_assoc($result);


// 정답 확인

if(isset($_POST['answer'])){

    $answer = $_POST['answer'];


    if($answer == $quiz['answer']){


        $_SESSION['point'] += $quiz['point'];


        $conn->query("
            UPDATE users
            SET point = point + {$quiz['point']}
            WHERE nickname='{$_SESSION['nickname']}'
        ");


        echo "<script>
        alert('정답! +{$quiz['point']}점');
        location.href='quiz.php';
        </script>";

    }else{

        echo "<script>
        alert('틀렸습니다');
        </script>";

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


<h3>
<?php echo $quiz['question']; ?>
</h3>


<form method="post">

<input 
type="text"
name="answer"
placeholder="정답 입력">


<button type="submit">
제출
</button>


</form>


<br>

<a href="home.php">
홈으로
</a>


</body>

</html>
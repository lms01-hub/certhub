<?php
include "db.php";

// 포인트 내림차순 정렬
$sql = "SELECT * FROM users ORDER BY point DESC";
$result = mysqli_query($conn, $sql);

// DB 에러 체크 (중요)
if(!$result){
    die("쿼리 오류: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>랭킹</title>
</head>
<body>

<h1>🏆 포인트 랭킹</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>순위</th>
        <th>닉네임</th>
        <th>포인트</th>
    </tr>

<?php
$rank = 1;

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
?>
        <tr>
            <td><?php echo $rank++; ?></td>
            <td><?php echo $row['nickname']; ?></td>
            <td><?php echo $row['point']; ?></td>
        </tr>
<?php
    }

} else {
?>
    <tr>
        <td colspan="3">데이터 없음</td>
    </tr>
<?php } ?>

</table>

<br>

<a href="home.php">홈으로</a>

</body>
</html>
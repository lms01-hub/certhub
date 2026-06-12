<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "0328338820",
    "certhub"
);

if (!$conn) {
    die("DB 연결 실패: " . mysqli_connect_error());
}
?>
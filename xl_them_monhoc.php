<?php
session_start();

include("connect.php");

$MaMH = $_POST["MaMH"];
$TenMH = $_POST["TenMH"];

// Thêm mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO MONHOC VALUES ('" .$MaMH. "', '" .$TenMH. "')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm môn học: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm môn học thành công');
        window.location='ql_monhoc.php';
    </script>";
?>
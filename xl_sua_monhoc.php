<?php
session_start();

include("connect.php");

$MaMH = $_POST["MaMH"];
$TenMH = $_POST["TenMH"];

// cập nhật thay đổi
$sql = "UPDATE MONHOC SET TenMH = '$TenMH'  WHERE MaMH = '$MaMH'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật môn học: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật môn học thành công');
        window.location='ql_monhoc.php';
    </script>";
?>
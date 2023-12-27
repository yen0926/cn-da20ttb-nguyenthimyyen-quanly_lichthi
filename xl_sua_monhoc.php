<?php
session_start();

include("connect.php");

$MaMH = $_POST["MaMH"];
$TenMH = $_POST["TenMH"];

// Cập nhật thay đổi với cú pháp SQL
$sql = "UPDATE MONHOC SET TenMH = '$TenMH' WHERE MaMH = '$MaMH'";
$kq = mysqli_query($conn, $sql);

if ($kq) {
    echo "<script language='javascript'>
            alert('Cập nhật môn học thành công');
            window.location='ql_monhoc.php';
          </script>";
} else {
    echo "Không thể cập nhật môn học: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

<?php
session_start();

include("connect.php");

$MaNH = $_POST["MaNH"];
$TenNH = $_POST["TenNH"];
$TGBD = $_POST["TGBD"];
$TGKT = $_POST["TGKT"];

// cập nhật thay đổi
$sql = "UPDATE NAMHOC SET TenNH = '$TenNH', TGBD = '$TGBD', TGKT = '$TGKT'  WHERE MaNH = '$MaNH'";
$kq = mysqli_query($conn, $sql) or die("Không thể cập nhật năm học: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Cập nhật năm học thành công');
        window.location='ql_namhoc.php';
    </script>";
?>
<?php
session_start();

include("connect.php");

$MaNH = $_POST["MaNH"];
$TenNH = $_POST["TenNH"];
$TGBD = $_POST["TGBD"];
$TGKT = $_POST["TGKT"];

// Thêm mới vào CSDL với khóa chính tự động tăng
$sql = "INSERT INTO NAMHOC VALUES ('" .$MaNH. "', '" .$TenNH. "', '" .$TGBD. "', '" .$TGKT. "')";
$kq = mysqli_query($conn, $sql) or die("Không thể thêm năm học: " . mysqli_error($conn));

echo "<script language=javascript>
        alert('Thêm năm học thành công');
        window.location='ql_namhoc.php';
    </script>";
?>
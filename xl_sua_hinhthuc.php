<?php
session_start();

include("connect.php");

// $MaHT = $_POST["MaHT"];
$TenHT = $_POST["TenHT"];

// Sử dụng Prepared Statement để cập nhật dữ liệu
$sql = "UPDATE HINHTHUC SET TenHT = ? WHERE MaHT = ?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ss", $TenHT, $MaHT);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "<script language='javascript'>
            alert('Cập nhật hình thức thi thành công');
            window.location='ql_hinhthuc.php';
          </script>";
    } else {
        echo "Không thể cập nhật hình thức thi: " . mysqli_error($conn);
    }
    
    mysqli_stmt_close($stmt);
} else {
    echo "Lỗi trong việc chuẩn bị truy vấn: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

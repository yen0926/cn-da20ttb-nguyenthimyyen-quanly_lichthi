<?php
session_start();
if (!isset($_SESSION["giangvien"])) {
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!'); 
    window.location='login.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="format_user.css">
    <title>Trang admin</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    // Lấy tất cả các phần tử có class là "s-left-item"
    var menuItems = document.querySelectorAll('.s-left-item');
    
    // Lấy trạng thái active từ sessionStorage
    var activeItemIndex = sessionStorage.getItem('activeItemIndex');
    
    // Nếu có trạng thái active, thêm lớp "s-left-active"
    if (activeItemIndex !== null) {
        menuItems[activeItemIndex].classList.add('s-left-active');
    }

    // Lặp qua từng phần tử và thêm sự kiện click
    menuItems.forEach(function(item, index) {
        item.addEventListener('click', function(event) {
            event.preventDefault();

            // Xóa lớp "s-left-active" từ tất cả các phần tử
            menuItems.forEach(function(innerItem) {
                innerItem.classList.remove('s-left-active');
            });

            // Thêm lớp "s-left-active" cho phần tử được chọn
            item.classList.add('s-left-active');

            // Lưu trạng thái active vào sessionStorage
            sessionStorage.setItem('activeItemIndex', index);

            // Xử lý chuyển hướng
            window.location.href = item.getAttribute('href');
        });
    });
});
    </script>
</head>

<body>
<?php
    include("connect.php");
    $sql = "select * from giangvien ";
    $userlogin = $_SESSION["giangvien"];
    $sql2 = "select * from giangvien where email='" . $userlogin . "'";
    $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng ");
    $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng ");
    $admins = mysqli_fetch_array($kq);
    $admin_login =  mysqli_fetch_array($kq2);

    ?>
    <div class="container">
        <div class="b-left">
            <div class="b-ava">
                <p><ion-icon name="person"></ion-icon><p>
                <label><?php echo $admin_login["HoTenGV"]; ?></label>
            </div>
            <div class="s-left">
                <a href="#" class="s-left-item">
                    <ion-icon name="home"></ion-icon>
                    <p>Trang chủ</p>
                </a>
                <a href="#" class="s-left-item">
                    <ion-icon name="pencil"></ion-icon>
                    <p>Đăng ký lịch thi</p>
                </a>
                <a href="#" class="s-left-item">
                    <ion-icon name="create"></ion-icon>
                    <p>Xem lịch thi</p>
                </a>
                <a href="#" class="s-left-item">
                    <ion-icon name="key"></ion-icon>
                    <p>Đổi mật khẩu</p>
                </a>
                <a href="logout.php" class="s-left-item">
                    <ion-icon name="log-out"></ion-icon>
                    <p>Đăng xuất</p>
                </a>
            </div>
        </div>
        <!-- Hết div trái -->

        <div class="b-right">
            <div class="s_dx">
                <h3>HỆ THỐNG QUẢN LÝ LỊCH THI KHOA KỸ THUẬT VÀ CÔNG NGHỆ</h3>
            </div>
            <div class="content">
                <!-- header -->

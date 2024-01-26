<?php session_start();?>
<?php ob_start();?>
<?php include 'config/config.php'?>
<?php include 'config/Helper.php'?>
<?php include 'model/SQLQuery.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="<?=URL_ROOT?>/assets/css/home.css">
</head>

<body>
    <img src="<?=URL_ROOT?>/assets/img/home/header.png" alt="Banner">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="<?=URL_ROOT?>/">TRANG CHỦ</a>
                    <a class="nav-link active" href="#">THÔNG BÁO</a>
                    <a class="nav-link active" href="<?=URL_ROOT?>/#contact">TIN TỨC</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="<?=URL_ROOT?>/login.php">ĐĂNG NHẬP</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row my-5">
            <div class="col-md-4">
                <img src="<?=URL_ROOT?>/assets/img/home/ktcn.jpeg" alt="">
            </div>
            <div class="col-md-8">
                <h3 class="text-center text-danger border-bottom border-danger pb-3">KHOA KỸ THUẬT VÀ CÔNG NGHỆ</h3>
                <p class="text-justify">Với sự phát triển của kỹ thuật hiện đại, Kỹ thụât và Công nghệ đóng một vai trò rất quan trọng trong phát triển công nghiệp, Khoa Kỹ thuật và Công nghệ (KT&CN) được thành lập theo quyết định số: 179/QĐ-ĐHTV ngày
                    20/10/2006 của Hiệu
                    trưởng trường Đại học Trà Vinh với 5 đơn vị: Bộ môn Công nghệ Thông tin, bộ môn Điện - Điện tử, bộ môn Cơ khí - Động lực, bộ môn Xây dựng và Văn phòng Khoa.</p>
                <p class="text-justify">Khoa KT&CN đã vạch ra chiến lược phát triển đội ngũ giảng dạy, cải tiến theo quy trình làm việc ISO 9001:2015 của Trường. Khoa cũng cập nhật các chương trình đào tạo đáp ứng nhu cầu thực tiễn, đặc biệt là đào tạo
                    HTDN (Co-op) theo mô
                    hình Win – Win – Win (Sinh viên – Nhà trường – Doanh nghiệp) và định hướng tiến tới đào tạo theo chuẩn AUN, ABET. Phấn đấu trong 10 năm tới, Khoa KT&CN sẽ một trong những khoa đào tạo các ngành nghề kỹ thuật hàng đầu trong cả nước, lọt vào top 100 các khoa đào
                    tạo kỹ thuật của Châu Á.</p>
            </div>
        </div>
    </div>

    <div class="bg-dark" id="contact">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-12 p-3">
                    <div class="text-center text-white">
                        <h3>TIN TỨC</h3>
                    </div>
                </div>
                <!-- <?php for ($i = 0; $i < 6; $i++) {?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://ktcn.tvu.edu.vn/ht96_image/news/P9JL_Hoi_Cuu_svktcn_hinh6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Khoa Kỹ thuật và Công nghệ tổ chức Hội nghị kiện toàn Ban Chấp hành Hội Cựu Sinh viên nhiệm kỳ 2023-2028</h6>
                            <p>
                                <span><i class="far fa-eye mr-2"></i> 186</span>
                                <span><i class="fas fa-calendar-alt mx-2"></i> 1 tháng trước</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?> -->

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://ktcn.tvu.edu.vn/ht96_image/news/P9JL_Hoi_Cuu_svktcn_hinh6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Khoa Kỹ thuật và Công nghệ tổ chức Hội nghị kiện toàn Ban Chấp hành Hội Cựu Sinh viên nhiệm kỳ 2023-2028</h6>
                            <p>
                                <span><i class="far fa-eye mr-2"></i> 186</span>
                                <span><i class="fas fa-calendar-alt mx-2"></i> 1 tháng trước</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://ktcn.tvu.edu.vn/ht96_image/news/sckz_@KhoaKTCN2023.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Khoa Kỹ thuật và Công nghệ tổ chức Hội nghị tổng kết năm học 2022-2023 và thảo luận phương hướng, nhiệm vụ năm 2023-2024</h6>
                            <p>
                                <span><i class="far fa-eye mr-2"></i> 206</span>
                                <span><i class="fas fa-calendar-alt mx-2"></i> 1 tháng trước</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://ktcn.tvu.edu.vn/ht96_image/news/ARqx_3_Hoi_thao_khoa_hoc_2023.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Giảng viên Khoa Kỹ thuật và Công nghệ - Trường Đại học Trà Vinh dự Hội nghị khoa học quốc gia lần thứ XVI năm 2023</h6>
                            <p>
                                <span><i class="far fa-eye mr-2"></i> 156</span>
                                <span><i class="fas fa-calendar-alt mx-2"></i> 1 tháng trước</span>
                            </p>
                            <div class="text-center">
                                <a href="#" class="btn btn-outline-primary">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer class="bg-light text-center p-3">
        <p>KHOA KỸ THUẬT VÀ CÔNG NGHỆ</p>
        <p>Địa chỉ: Số 126 Nguyễn Thiện Thành, Khóm 4, Phường 5, TP. Trà Vinh, tỉnh Trà Vinh</p>
        <p>Điện thoại: 0294.3855690 – 135</p>
        <p>Email: ktcn@tvu.edu.vn</p>
    </footer>

    <!-- Bootstrap 4 -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
<?php ob_end_flush();?>
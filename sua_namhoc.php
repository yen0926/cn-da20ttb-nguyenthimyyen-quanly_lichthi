<?php
include("header_ad.php");

include("connect.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM NAMHOC WHERE MaNH = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin năm học " . mysqli_error());
$row = mysqli_fetch_array($kq);
?>
<form enctype="multipart/form-data" action="xl_sua_namhoc.php" name="sua" method="post">
    <div>
        <div class="table-center">
            <label> Thêm  năm học</label>
        </div>

        <div class="table">
            <div> <label> Năm học: </label>
                <input type="text" name="TenNH" value="<?php echo $row["TenNH"]; ?>">
            </div>
        </div>
        <div class="table">
            <div> <label> Thời gian bắt đầu: </label>
                <input type="date" name="TGBD" value="<?php echo $row["TGBD"]; ?>">
            </div>
        </div>
        <div class="table">
            <div> <label> Thời gian kết thúc: </label>
                <input type="date" name="TGKT" value="<?php echo $row["TGKT"]; ?>">
            </div>
        </div>

        <div class="table">
            <input type="submit" name="luu" value="Lưu">
        </div>
    </div>
</form>
<?php
include("footer_ad.php");
?>
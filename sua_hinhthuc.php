<?php
include("header_ad.php");

include("connect.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM HINHTHUC WHERE MaHT = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin năm học " . mysqli_error());
$row = mysqli_fetch_array($kq);
?>
<form enctype="multipart/form-data" action="xl_sua_hinhthuc.php" name="sua" method="POST">
    <div>
        <div class="table-center">
            <label> Thêm  hình thức thi</label>
        </div>
        <div class="table">
            <div> <label> Tên hình thức thi: </label>
                <input type="text" name="TenHT" value="<?php echo $row["TenHT"]; ?>">
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
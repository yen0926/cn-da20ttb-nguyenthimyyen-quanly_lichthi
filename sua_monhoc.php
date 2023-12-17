<?php
include("header_ad.php");

include("connect.php");

$usern=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php

$sql = "SELECT * FROM MONHOC WHERE MaMH = '".$usern."'";
$kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin năm học " . mysqli_error());
$row = mysqli_fetch_array($kq);
?>
<form enctype="multipart/form-data" action="xl_sua_monhoc.php" name="sua" method="post">
    <div>
        <div class="table-center">
            <label> Thêm  môn học</label>
        </div>


        <div class="table">
            <div> <label> Mã môn học: </label>
                <input type="text" name="MaMH" value="<?php echo $row["MaMH"]; ?>">
            </div>
        </div>

        <div class="table">
            <div> <label> Tên môn học: </label>
                <input type="text" name="TenMH" value="<?php echo $row["TenMH"]; ?>">
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
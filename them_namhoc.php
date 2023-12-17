<?php
include("header_ad.php");
?>
<form enctype="multipart/form-data" action="xl_them_namhoc.php" name="them" method="post">
    <div>
        <div class="table-center">
            <label> Thêm  năm học</label>
        </div>


        <div class="table">
            <div> <label> Mã năm học: </label>
                <input type="text" name="MaNH">
            </div>
        </div>

        <div class="table">
            <div> <label> Năm học: </label>
                <input type="text" name="TenNH">
            </div>
        </div>
        <div class="table">
            <div> <label> Thời gian bắt đầu: </label>
                <input type="date" name="TGBD">
            </div>
        </div>
        <div class="table">
            <div> <label> Thời gian kết thúc: </label>
                <input type="date" name="TGKT">
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
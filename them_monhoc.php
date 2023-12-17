<?php
include("header_ad.php");
?>
<form enctype="multipart/form-data" action="xl_them_monhoc.php" name="them" method="post">
    <div>
        <div class="table-center">
            <label> Thêm  môn học</label>
        </div>


        <div class="table">
            <div> <label> Mã môn học: </label>
                <input type="text" name="MaMH">
            </div>
        </div>

        <div class="table">
            <div> <label> Tên môn học: </label>
                <input type="text" name="TenMH">
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
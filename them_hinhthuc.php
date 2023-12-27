<?php
include("header_ad.php");
?>
<form enctype="multipart/form-data" action="xl_them_hinhthuc.php" name="them" method="post">
    <div>
        <div class="table-center">
            <label> Thêm  hình thức thi</label>
        </div>


        <div class="table">
            <div> <label> Mã hình thức thi: </label>
                <input type="text" name="MaHT">
            </div>
        </div>

        <div class="table">
            <div> <label> Tên hình thức thi: </label>
                <input type="text" name="TenHT">
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
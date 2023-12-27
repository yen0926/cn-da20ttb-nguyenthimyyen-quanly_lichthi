-<?php
include("header_ad.php");
?>

<style>


</style>

<div>
    <div class="top-center">
        <p>Quản lý năm học</p>
    </div>
    <div class="table-center">
        <div class="btn-center">
            <div class="btn-center-bt">
                <a href="them_namhoc.php" class="button button-them">
                    <ion-icon name="add-outline"></ion-icon>
                    <p>Thêm năm học</p>
                </a>
                <a href="#" class="button button-in">
                    <ion-icon name="print-outline"></ion-icon>
                    <p>In dữ liệu</p>
                </a>
                <a href="#" class="button button-xtt">
                    <ion-icon name="trash-outline"></ion-icon>
                    <p>Xóa tất cả</p>
                </a>
            </div>
            <div class="btn-center-search">
                <input type="text" name="tendn" placeholder="Tìm kiếm" required>
                <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
            </div>
        </div>
        <div class="cdm">
            <p>Danh mục</p>
        </div>
        <div class="table">
            <table width="100%" class="table-content">
                <tr style="background-color:#CDD0CB; font-weight:600;">
                    <td width="3%"><input type="checkbox"></td>
                    <td width="7%">Mã năm học</td>
                    <td width="15%">Năm học</td>
                    <td width="7%">Thời gian bắt đầu</td>
                    <td width="7%">Thời gian kết thúc</td>
                    <td width="10%">Chức năng</td>
                </tr>
                <?php
                include("connect.php");
                $sql = "select * from NAMHOC";
                $kq = mysqli_query($conn, $sql) or die("Không thể xuất thông tin người dùng " . mysqli_error());

                while ($row = mysqli_fetch_array($kq)) {

                    // $namhocs = $row["MaNH"];
                    // $sql2 = "select * from NAMHOC where MaNH='" . $namhocs . "'";
                    // $kq2 = mysqli_query($conn, $sql2) or die("Không thể xuất thông tin người dùng " . mysqli_error());
                    // $namhoc = mysqli_fetch_array($kq2);

                    echo "<tr>";
                    echo "<td><input type='checkbox'></td>";
                    echo "<td> " . $row["MaNH"] . "</td>";
                    $usern = $row["MaNH"];
                    echo "<td> " . $row["TenNH"] . "</td>";
                    echo "<td> " . $row["TGBD"] . "</td>";
                    echo "<td> " . $row["TGKT"] . "</td>";
                    echo "<td class='table-icon'>
                    <a href='sua_namhoc.php?user=$usern'><button><ion-icon name='create-outline'></ion-icon></button></a>
                    <a href='xoa_namhoc.php?user=$usern'><button><ion-icon name='trash-outline'></button></ion-icon></a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </table>


        </div>
    </div>
</div>

<?php
include("footer_ad.php");
?>
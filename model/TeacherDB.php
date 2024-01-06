<?php
class TeacherDB
{
    public static function GetList()
    {
        $sql = 'SELECT * FROM giangvien, bomon WHERE giangvien.MaBM = bomon.MaBM';
        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maGV)
    {
        $sql = "SELECT * FROM bomon, giangvien WHERE giangvien.MaBM = bomon.MaBM AND MaGV = '$maGV'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddTeacher($maGV, $hoTenGV, $email, $sdtGV, $maBM)
    {
        $sql = "INSERT INTO giangvien (MaGV, HoTenGV, Email, MatKhauGV, SdtGV, MaBM) VALUES ('$maGV', '$hoTenGV', '$email', '202cb962ac59075b964b07152d234b70', '$sdtGV', '$maBM')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateTeacher($maGV, $hoTenGV, $email, $sdtGV, $maBM)
    {
        $sql = "UPDATE giangvien SET HoTenGV = '$hoTenGV', Email = '$email', SdtGV = '$sdtGV', MaBM = '$maBM' WHERE MaGV = '$maGV'";
        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteTeacher($maGV)
    {
        $sql = "DELETE FROM giangvien WHERE MaGV = '$maGV'";
        return SQLQuery::NonQuery($sql);
    }
}

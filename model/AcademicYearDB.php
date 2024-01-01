<?php
class AcademicYearDB
{
    public static function GetList()
    {
        $sql = 'SELECT * FROM namhoc';
        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maNH)
    {
        $sql = "SELECT * FROM namhoc WHERE MaNH = '$maNH'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddAcademicYear($maNH, $tenNH, $tgBG, $tgKT)
    {
        $sql = "INSERT INTO namhoc (MaNH, TenNH, TGBD, TGKT) VALUES ('$maNH', '$tenNH', '$tgBG', '$tgKT')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateAcademicYear($maNH, $tenNH, $tgBG, $tgKT)
    {
        $sql = "UPDATE namhoc SET TenNH = '$tenNH', TGBD = '$tgBG', TGKT = '$tgKT' WHERE MaNH = '$maNH'";
        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteAcademicYear($maNH)
    {
        $sql = "DELETE FROM namhoc WHERE MaNH = '$maNH'";
        return SQLQuery::NonQuery($sql);
    }
}

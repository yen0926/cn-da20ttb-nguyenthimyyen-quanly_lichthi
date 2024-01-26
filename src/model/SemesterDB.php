<?php
class SemesterDB
{
    public static function GetList()
    {
        $sql = 'SELECT * FROM hocky';
        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maHK)
    {
        $sql = "SELECT * FROM hocky WHERE MaHK = '$maHK'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddSemester($tenHK)
    {
        $sql = "INSERT INTO hocky (TenHK) VALUES ('$tenHK')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateSemester($maHK, $tenHK)
    {
        $sql = "UPDATE hocky SET TenHK = '$tenHK' WHERE MaHK = '$maHK'";
        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteSemester($maHK)
    {
        $sql = "DELETE FROM hocky WHERE MaHK = '$maHK'";
        return SQLQuery::NonQuery($sql);
    }
}

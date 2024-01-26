<?php
class SubjectDB
{
    public static function GetList()
    {
        $sql = 'SELECT * FROM monhoc';
        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maMH)
    {
        $sql = "SELECT * FROM monhoc WHERE MaMH = '$maMH'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddSubject($maMH, $tenMH)
    {
        $sql = "INSERT INTO monhoc (MaMH, TenMH) VALUES ('$maMH', '$tenMH')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateSubject($maMH, $tenMH)
    {
        $sql = "UPDATE monhoc SET TenMH = '$tenMH' WHERE MaMH = '$maMH'";
        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteSubject($maMH)
    {
        $sql = "DELETE FROM monhoc WHERE MaMH = '$maMH'";
        return SQLQuery::NonQuery($sql);
    }
}

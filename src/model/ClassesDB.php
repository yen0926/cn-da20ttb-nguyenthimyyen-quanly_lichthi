<?php
class ClassesDB
{
    public static function GetList($query = '')
    {
        $sql = 'SELECT * FROM lop, bomon WHERE lop.MaBM = bomon.MaBM';
        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maLop)
    {
        $sql = "SELECT * FROM lop, bomon WHERE lop.MaBM = bomon.MaBM AND MaLop = '$maLop'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddClasses($maLop, $tenLop, $maBM)
    {
        $sql = "INSERT INTO lop (MaLop, TenLop, MaBM) VALUES ('$maLop', '$tenLop', '$maBM')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateClasses($maLop, $tenLop, $maBM)
    {
        $sql = "UPDATE lop SET TenLop = '$tenLop', MaBM = '$maBM' WHERE MaLop = '$maLop'";
        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteClasses($maLop)
    {
        $sql = "DELETE FROM lop WHERE MaLop = '$maLop'";
        return SQLQuery::NonQuery($sql);
    }
}

<?php
class DepartmentDB
{
    public static function GetList()
    {
        $sql = 'SELECT * FROM bomon';
        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maBM)
    {
        $sql = "SELECT * FROM bomon WHERE MaBM = '$maBM'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddDepartment($maBM, $tenBM)
    {
        $sql = "INSERT INTO bomon (MaBM, TenBM) VALUES ('$maBM', '$tenBM')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateDepartment($maBM, $tenBM)
    {
        $sql = "UPDATE bomon SET TenBM = '$tenBM' WHERE MaBM = '$maBM'";
        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteDepartment($maBM)
    {
        $sql = "DELETE FROM bomon WHERE MaBM = '$maBM'";
        return SQLQuery::NonQuery($sql);
    }
}
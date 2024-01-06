<?php
class AdminAccDB
{
    public static function GetList($query = '')
    {
        $sql = 'SELECT * FROM admin';
        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maAD)
    {
        $sql = "SELECT * FROM admin WHERE MaAD = '$maAD'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddAdmin($maAD, $tenAD, $email, $anhDD)
    {
        $sql = "INSERT INTO admin (MaAD, TenAD, Email, AnhDD) VALUES ('$maAD', '$tenAD', '$email', '$anhDD')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateAdmin($maAD, $tenAD, $email, $anhDD)
    {
        $sql = "UPDATE admin SET TenAD = '$tenAD', Email = '$email', AnhDD = '$anhDD' WHERE MaAD = '$maAD'";
        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteAdmin($maAD)
    {
        $sql = "DELETE FROM admin WHERE MaAD = '$maAD'";
        return SQLQuery::NonQuery($sql);
    }
}
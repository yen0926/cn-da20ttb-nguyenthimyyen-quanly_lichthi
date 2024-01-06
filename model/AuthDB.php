<?php
class AuthDB
{
    public static function LoginAdmin($email, $matKhau)
    {
        $sql = "SELECT * FROM admin WHERE Email = '$email' AND MatKhau = md5('$matKhau')";
        return SQLQuery::GetData($sql);
    }

    public static function LoginTeacher($email, $matKhau)
    {
        $sql = "SELECT * FROM giangvien WHERE Email = '$email' AND MatKhauGV = md5('$matKhau')";
        return SQLQuery::GetData($sql);
    }

    public static function ChangePasswordAdmin($maAD, $oldPass, $newPass, $reNewPass)
    {
        if ($newPass === $reNewPass) {
            $users = SQLQuery::GetData("SELECT * FROM admin WHERE MatKhau = md5('$oldPass') AND MaAD = '$maAD'");
            if (count($users) === 1) {
                $sql = "UPDATE admin SET MatKhau =  md5('$newPass') WHERE MaAD = '$maAD'";
                SQLQuery::NonQuery($sql);
                return true;
            } else {
                return 'Mật khẩu cũ không đúng';
            }
        } else {
            return 'Mật khẩu mới không khớp';
        }
    }

    public static function ChangePasswordTeacher($maGV, $oldPass, $newPass, $reNewPass)
    {
        if ($newPass === $reNewPass) {
            $users = SQLQuery::GetData("SELECT * FROM giangvien WHERE MatKhauGV = md5('$oldPass') AND MaGV = '$maGV'");
            if (count($users) === 1) {
                $sql = "UPDATE giangvien SET MatKhauGV =  md5('$newPass') WHERE MaGV = '$maGV'";
                SQLQuery::NonQuery($sql);
                return true;
            } else {
                return 'Mật khẩu cũ không đúng';
            }
        } else {
            return 'Mật khẩu mới không khớp';
        }
    }
}
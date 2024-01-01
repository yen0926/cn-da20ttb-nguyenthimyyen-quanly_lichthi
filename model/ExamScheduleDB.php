<?php
class ExamScheduleDB
{
    public static function GetList()
    {
        $sql = 'SELECT * FROM lichthi';
        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maLT)
    {
        $sql = "SELECT * FROM lichthi WHERE MaLT = '$maLT'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddExamSchedule($tenLT, $ngayBD, $tgThi, $tietBD, $phongThi, $maHT, $maNH, $maHK, $maMH, $maGV, $maLop)
    {
        $sql = "INSERT INTO lichthi (TenLT, NgayBD, TGThi, TietBD, PhongThi, MaHT, MaNH, MaHK, MaMH, MaGV, MaLop) VALUES ('$tenLT', '$ngayBD', '$tgThi', '$tietBD', '$phongThi', '$maHT', '$maNH', '$maHK', '$maMH', '$maGV', '$maLop')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateExamSchedule($maLT, $tenLT, $ngayBD, $tgThi, $tietBD, $phongThi, $maHT, $maNH, $maHK, $maMH, $maGV, $maLop)
    {
        $sql = "UPDATE lichthi SET TenLT = '$tenLT',
                                    NgayBD = '$ngayBD',
                                    TGThi = '$tgThi',
                                    TietBD = '$tietBD',
                                    PhongThi = '$phongThi',
                                    MaHT = '$maHT',
                                    MaNH = '$maNH',
                                    MaHK = '$maHK',
                                    MaMH = '$maMH',
                                    MaGV = '$maGV',
                                    MaLop = '$maLop'
                                WHERE MaLT = '$maLT'";
        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteExamSchedule($maLT)
    {
        $sql = "DELETE FROM lichthi WHERE MaLT = '$maLT'";
        return SQLQuery::NonQuery($sql);
    }
}
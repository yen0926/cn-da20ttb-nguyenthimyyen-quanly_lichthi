<?php
class ExamScheduleDB
{
    public static function GetList($query, $startTime = '', $endTime = '', $isActive = null)
    {
        if ($startTime != '' && $endTime != '') {
            $sql = "SELECT * FROM lichthi, hinhthuc, namhoc, hocky, monhoc, giangvien, lop where lichthi.MaHT = hinhthuc.MaHT AND lichthi.MaNH = namhoc.MaNH AND lichthi.MaHK = hocky.MaHK AND lichthi.MaMH = monhoc.MaMH AND lichthi.MaGV = giangvien.MaGV AND lichthi.MaLop = lop.MaLop AND lichthi.NgayBD >= '$startTime' AND lichthi.NgayBD <= '$endTime'";
        } else if ($isActive != null) {
            $sql = "SELECT * FROM lichthi, hinhthuc, namhoc, hocky, monhoc, giangvien, lop where lichthi.MaHT = hinhthuc.MaHT AND lichthi.MaNH = namhoc.MaNH AND lichthi.MaHK = hocky.MaHK AND lichthi.MaMH = monhoc.MaMH AND lichthi.MaGV = giangvien.MaGV AND lichthi.MaLop = lop.MaLop AND lichthi.Duyet = $isActive";
        } else {
            $sql = 'SELECT * FROM lichthi, hinhthuc, namhoc, hocky, monhoc, giangvien, lop where lichthi.MaHT = hinhthuc.MaHT AND lichthi.MaNH = namhoc.MaNH AND lichthi.MaHK = hocky.MaHK AND lichthi.MaMH = monhoc.MaMH AND lichthi.MaGV = giangvien.MaGV AND lichthi.MaLop = lop.MaLop';
        }
        return SQLQuery::GetData($sql);
    }

    public static function GetMyTeacher($maGV, $startTime = '', $endTime = '', $isActive = null)
    {
        if ($startTime != '' && $endTime != '') {
            $sql = "SELECT * FROM lichthi, hinhthuc, namhoc, hocky, monhoc, giangvien, lop where lichthi.MaHT = hinhthuc.MaHT AND lichthi.MaNH = namhoc.MaNH AND lichthi.MaHK = hocky.MaHK AND lichthi.MaMH = monhoc.MaMH AND lichthi.MaGV = giangvien.MaGV AND lichthi.MaLop = lop.MaLop AND lichthi.MaGV = '$maGV' AND lichthi.NgayBD >= '$startTime' AND lichthi.NgayBD <= '$endTime'";
        } else if ($isActive != null) {
            $sql = "SELECT * FROM lichthi, hinhthuc, namhoc, hocky, monhoc, giangvien, lop where lichthi.MaHT = hinhthuc.MaHT AND lichthi.MaNH = namhoc.MaNH AND lichthi.MaHK = hocky.MaHK AND lichthi.MaMH = monhoc.MaMH AND lichthi.MaGV = giangvien.MaGV AND lichthi.MaLop = lop.MaLop AND lichthi.MaGV = '$maGV' AND lichthi.Duyet = $isActive";
        } else {
            $sql = "SELECT * FROM lichthi, hinhthuc, namhoc, hocky, monhoc, giangvien, lop where lichthi.MaHT = hinhthuc.MaHT AND lichthi.MaNH = namhoc.MaNH AND lichthi.MaHK = hocky.MaHK AND lichthi.MaMH = monhoc.MaMH AND lichthi.MaGV = giangvien.MaGV AND lichthi.MaLop = lop.MaLop AND lichthi.MaGV = '$maGV'";
        }
        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maLT)
    {
        $sql = "SELECT * FROM lichthi, hinhthuc, namhoc, hocky, monhoc, giangvien, lop where lichthi.MaHT = hinhthuc.MaHT AND lichthi.MaNH = namhoc.MaNH AND lichthi.MaHK = hocky.MaHK AND lichthi.MaMH = monhoc.MaMH AND lichthi.MaGV = giangvien.MaGV AND lichthi.MaLop = lop.MaLop AND lichthi.MaLT = '$maLT'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddExamSchedule($tenLT, $ngayBD, $tgThi, $tietBD, $phongThi, $maHT, $maNH, $maHK, $maMH, $maGV, $maLop, $lanThi)
    {
        $sql = "INSERT INTO lichthi (TenLT, NgayBD, TGThi, TietBD, PhongThi, MaHT, MaNH, MaHK, MaMH, MaGV, MaLop, LanThi) VALUES ('$tenLT', '$ngayBD', '$tgThi', '$tietBD', '$phongThi', '$maHT', '$maNH', '$maHK', '$maMH', '$maGV', '$maLop', '$lanThi')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateExamSchedule($maLT, $tenLT, $ngayBD, $tgThi, $tietBD, $phongThi, $maHT, $maNH, $maHK, $maMH, $maGV, $maLop, $lanThi)
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
                                    LanThi = '$lanThi'
                                WHERE MaLT = '$maLT'";
        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteExamSchedule($maLT)
    {
        $sql = "DELETE FROM lichthi WHERE MaLT = '$maLT'";
        return SQLQuery::NonQuery($sql);
    }

    public static function ActiveExamSchedule($maLT, $active)
    {
        $sql = "UPDATE lichthi SET Duyet = $active WHERE MaLT = '$maLT'";
        return SQLQuery::NonQuery($sql);
    }
}
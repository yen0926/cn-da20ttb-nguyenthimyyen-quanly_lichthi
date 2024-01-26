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
        $sql = "SELECT *, giangvien.Email as EmailGV FROM lichthi, hinhthuc, namhoc, hocky, monhoc, giangvien, lop where lichthi.MaHT = hinhthuc.MaHT AND lichthi.MaNH = namhoc.MaNH AND lichthi.MaHK = hocky.MaHK AND lichthi.MaMH = monhoc.MaMH AND lichthi.MaGV = giangvien.MaGV AND lichthi.MaLop = lop.MaLop AND lichthi.MaLT = '$maLT'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddExamSchedule($tenLT, $ngayBD, $tgThi, $tietBD, $phongThi, $maHT, $maNH, $maHK, $maMH, $maGV, $maLop, $lanThi)
    {
        $sql = "INSERT INTO lichthi (TenLT, NgayBD, TGThi, TietBD, PhongThi, MaHT, MaNH, MaHK, MaMH, MaGV, MaLop, LanThi) VALUES ('$tenLT', '$ngayBD', '$tgThi', '$tietBD', '$phongThi', '$maHT', '$maNH', '$maHK', '$maMH', '$maGV', '$maLop', '$lanThi')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateExamSchedule($maLT, $tenLT, $ngayBD, $tgThi, $tietBD, $phongThi, $maHT, $maNH, $maHK, $maMH, $maGV, $maLop, $lanThi)
    {
        var_dump($maLop);
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
                                    MaLop = '$maLop',
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
        SQLQuery::NonQuery($sql);

        // Gửi mail
        $examSchedule = ExamScheduleDB::GetDataByID($maLT);
        $receiveMail = $examSchedule['EmailGV'];
        $receiveName = $examSchedule['HoTenGV'];
        $subject = 'Thông báo kết quả đăng ký lịch thi';
        $body = '
            <p>Kính chào quý thầy/cô, </p>
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Lịch thi</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">' . $examSchedule['TenLT'] . ' (Mã lịch thi: ' . $examSchedule['MaLT'] . ')</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Thời gian thi</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">' . $examSchedule['TGThi'] . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Ngày thi</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">' . $examSchedule['NgayBD'] . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Tiết bắt đầu</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">' . $examSchedule['TietBD'] . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Phòng thi</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">' . $examSchedule['PhongThi'] . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Hình thức thi</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">' . $examSchedule['TenHT'] . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Năm học</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">' . $examSchedule['TenNH'] . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Học kỳ</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">' . $examSchedule['TenHK'] . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Môn học</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">' . $examSchedule['TenMH'] . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Giảng viên</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">' . $examSchedule['HoTenGV'] . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Lớp</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">' . $examSchedule['TenLop'] . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Lần thi</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">' . $examSchedule['LanThi'] . '</td>
                    </tr>
                    <tr>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">Trạng thái</td>
                        <td style="padding: 8px; border-bottom: 1px solid #dee2e6;">
                            <span style="display: inline-block;
                                padding: .35em .65em;
                                font-size: .75em;
                                font-weight: 700;
                                line-height: 1;
                                color: #fff;
                                text-align: center;
                                white-space: nowrap;
                                vertical-align: baseline;
                                background-color: ' . ($active == '1' ? '#198754' : '#dc3545') . '!important;
                                border-radius: 50rem!important;">' . ($active == '1' ? 'Đã xác nhận' : 'Không xác nhận') . '</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        ';
        SendMail::Gmail($receiveMail, $receiveName, $subject, $body);
    }
}

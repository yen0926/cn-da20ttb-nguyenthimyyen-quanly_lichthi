<?php
class ExamFormDB
{
    public static function GetList()
    {
        $sql = 'SELECT * FROM hinhthuc';
        return SQLQuery::GetData($sql);
    }
}

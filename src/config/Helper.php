<?php
class Helper
{
    public static function Phone($str)
    {
        if (strlen($str) == 11) {
            return substr($str, 0, 5) . ' ' . substr($str, 5, 3) . ' ' . substr($str, 8, 3);
        } else if (strlen($str) == 10) {
            return substr($str, 0, 4) . ' ' . substr($str, 4, 3) . ' ' . substr($str, 7, 3);
        }
        return '';
    }

    public static function DateTime($str, $type = 'datetime')
    {
        $formats = [
            'date'     => 'd/m/Y',
            'time'     => 'H:i:s',
            'datetime' => 'd/m/Y H:i:s',
        ];
        return date($formats[$type], strtotime($str));
    }
}

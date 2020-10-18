<?php

namespace App\Modules;

class studyInfo
{
    public $name_discipline;
    public $kt_result;
    public $prop;


    function get_kt_from_string($items)
    {
        $studyInfo = new studyInfo();
        $studyInfo->name_discipline = '';
        $studyInfo->kt_result = array();
        $studyInfo->prop = array();
        $res = array('Не зачет', 'Зачет', 'Нет допуска');
        $items = str_replace($res, '', $items);
        $str = explode(' ', $items);
        foreach ($str as $item) {
            if (!ctype_digit($item)) {
                $studyInfo->name_discipline .=  $item . ' ';
            }
        }
        $studyInfo->name_discipline =  trim($studyInfo->name_discipline);
        $kt = explode(' ', str_replace(trim($studyInfo->name_discipline), '', $items));
        for ($i = 1; $i < count($kt) - 1; $i++) {
            if ($i % 2 == 0) {
                $studyInfo->kt_result[] = $kt[$i];
            } else {
                $studyInfo->prop[] = $kt[$i];
            }
        }

        return $studyInfo;
    }
}

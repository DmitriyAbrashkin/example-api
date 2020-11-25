<?php

namespace App\Modules;

class StudyInfo
{
    public $nameDiscipline;
    public $ktResult;
    public $prop;


   public function get_kt_from_string($items)
    {
        $studyInfo = new StudyInfo();
        $studyInfo->nameDiscipline = '';
        $studyInfo->ktResult = array();
        $studyInfo->prop = array();
        $res = array('Не зачет', 'Зачет', 'Нет допуска');
        $items = str_replace($res, '', $items);
        $str = explode(' ', $items);
        foreach ($str as $item) {
            if (!ctype_digit($item)) {
                $studyInfo->nameDiscipline .=  $item . ' ';
            }
        }
        $studyInfo->nameDiscipline =  trim($studyInfo->nameDiscipline);
        $kt = explode(' ', str_replace(trim($studyInfo->nameDiscipline), '', $items));
        for ($i = 1; $i < count($kt) - 1; $i++) {
            if ($i % 2 == 0) {
                $studyInfo->ktResult[] = $kt[$i];
            } else {
                $studyInfo->prop[] = $kt[$i];
            }
        }

        return $studyInfo;
    }
}

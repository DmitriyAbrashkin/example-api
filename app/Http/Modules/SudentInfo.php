<?php

namespace App\Modules;

use App\Modules\StudyInfo;
use DiDom\Document;

class StudentInfo
{
    public $nameStudent;
    public $number;
    public $studyInfo;


    public function getInfoAboutStudent($number)
    {
        $this->number = $number;
        $this->studyInfo = array();
        $studyInfo = new StudyInfo();
        $site_name = "https://portal.kuzstu.ru/learning/progress/current/report/cp3?search_str=" . $this->number . "&is_filters_enabled=1";
        $document = new Document($site_name, true);

        $this->nameStudent = $document->find("#content > div > div:nth-child(3) > div.callout.callout-info > div:nth-child(2) > h4 > b")[0]->text();
        $table = $document->find('*[^data-term_id=28]');
        for ($i = 0; $i < count($table); $i++) {
            $item = $table[$i]->text();
            if (stristr($item, 'семестр')) break;
            $this->studyInfo[] = $studyInfo->get_kt_from_string(trim(preg_replace('|\s+|', ' ', $item)));
        }
    }
}

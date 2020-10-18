<?php

namespace App\Modules;
use App\Modules\studyInfo;

class studentInfo 
{
    public $name_student;
    public $number;
    public $studyInfo;


    public function getInfoAboutStudent($number){
        $this->number = $number;
        $this->studyInfo = array();
        $studyInfo = new studyInfo();
        $site_name = "https://portal.kuzstu.ru/learning/progress/current/report/cp3?search_str=" . $this->number . "&is_filters_enabled=1";
        $html = $this->file_get_contents_curl($site_name);

        /*         $pq = phpQuery::newDocument($html);
        $studentInfo->name_student = $pq->find('#content > div > div:nth-child(3) > div.callout.callout-info > div:nth-child(2) > h4 > b')->getString()[0];
        $table = $pq->find('.term:nth-child(1) ~ tr'); 
        foreach ($table->getString() as  $item) {
            if (stristr($item, 'семестр')) break;
            $studentInfo->studyInfo[] = $studyInfo->get_kt_from_string(trim(preg_replace('|\s+|', ' ', $item)));
        }*/

        //TODO Периписать парсер
    }

    public static function file_get_contents_curl($url)
    {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }
}

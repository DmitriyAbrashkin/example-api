<?php

namespace App\Http\Controllers;

use App\Modules\StudentInfo;

class StudentInfoController extends Controller
{
    public function index($number)
    {
        $studentInfo = new StudentInfo();
        $studentInfo->getInfoAboutStudent($number);
        return response()->json($studentInfo, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    }
}

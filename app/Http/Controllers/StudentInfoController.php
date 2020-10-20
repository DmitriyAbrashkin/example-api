<?php

namespace App\Http\Controllers;

use App\Modules\StudentInfo;

class StudentInfoController extends Controller
{
    public function index($number)
    {
        $studentInfo = new StudentInfo();
        $studentInfo->getInfoAboutStudent($number);
        return response()->json($studentInfo, JSON_UNESCAPED_UNICODE);
    }
}

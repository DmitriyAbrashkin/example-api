<?php

namespace App\Http\Controllers;

use App\Modules\studentInfo;

class StudentInfoController extends Controller
{
    public function index($number)
    {
        $studentInfo = new studentInfo();
        $studentInfo->getInfoAboutStudent($number);
        return response()->json($studentInfo, JSON_UNESCAPED_UNICODE);
    }
}

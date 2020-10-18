<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\studentInfo;
use App\Modules\studyInfo;

class StudentInfoController extends Controller
{
    public function index($number)
    {
        $studentInfo = new studentInfo();
        $studentInfo->getInfoAboutStudent($number);
        return response()->json($studentInfo, JSON_UNESCAPED_UNICODE);
    }
}

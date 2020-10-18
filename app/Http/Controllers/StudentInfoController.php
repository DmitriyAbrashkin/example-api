<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\studentInfo;

class StudentInfoController extends Controller
{


    public function index($number)
    {
        $studentInfo = new studentInfo();
        $studentInfo->getInfoAboutStudent($number);
        return response()->json(json_encode($studentInfo, JSON_UNESCAPED_UNICODE));
    }


}

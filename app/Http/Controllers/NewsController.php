<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\NewsParser;

class NewsController extends Controller
{
    public function index($number)
    {
        $newsParser = new NewsParser();
        $newsParser->getNews($number);
        return response()->json($newsParser, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    }
}

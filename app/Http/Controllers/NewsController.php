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
        return response()->json($newsParser, JSON_UNESCAPED_UNICODE);
    }
}

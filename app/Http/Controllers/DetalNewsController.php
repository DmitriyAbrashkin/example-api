<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\NewsParser;

class DetalNewsController extends Controller
{
    public function index(Request $request)
    {
        $newsParser = new NewsParser();
        $newsParser->getDetalNews($request);
        return response()->json($newsParser, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    }
}

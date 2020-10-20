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
        return response()->json($newsParser, JSON_UNESCAPED_UNICODE);
    }
}

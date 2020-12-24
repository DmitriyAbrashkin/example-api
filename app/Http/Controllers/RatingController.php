<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\PersonsUpdate;
use App\Persons;

class RatingController extends Controller
{
  public function index(Request $request)
  {
    $PersonsUpdate = new PersonsUpdate();
    $Persons = new Persons();
    $Persons = $PersonsUpdate->getInfo1();
    //dd(($PersonsUpdate->getInfo1()));
   // dd(  $Persons);
    return response()->json($Persons , 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  }
}

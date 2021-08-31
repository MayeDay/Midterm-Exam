<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class MathController extends Controller
{
    public function calculateInputs(Request $request){

      if(is_null($request)){
        return response()->json(['message' => 'Results Not Found'], 404);
      }

      $results = array();
      $value1 = $request->input("value1");
      $value2 = $request->input("value2");
      $value3 = $request->input("value3");
      
      $rectangle = $value1 * $value2;
      $cuboid = $value1 * $value2 * $value3;
      $square = $value1 * $value1;

      array_push($results, $rectangle, $cuboid, $square);

      return view('welcome',['results' => $results]);


    }
}

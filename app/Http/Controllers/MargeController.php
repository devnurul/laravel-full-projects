<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MargeController extends Controller
{
   function dataMarge(){
        $students =DB::table('students')->get();
        $marks =DB::table('exam_marks')->get();
        $markMarge = $students->merge($marks);
        return $markMarge;

   }
}

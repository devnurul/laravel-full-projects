<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joinController extends Controller
{
    function joinData(){
        $result = DB::table('students')
        ->leftjoin('exam_marks', 'students.roll','=', 'exam_marks.roll')
        ->get();   

        return $result;
    }
}

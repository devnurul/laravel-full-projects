<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AggreegatesController extends Controller
{
    function totalrow()
    {
        $result = DB::table('students')->count();
        return $result;
    }
    function maxValue()
    {
        $result = DB::table('students')->max('roll');
        return $result;
    }
    function minValue()
    {
        $result = DB::table('students')->min('roll');
        return $result;
    }
    function avgValue()
    {
        $result = DB::table('students')->avg('id');
        return $result;
    }
}

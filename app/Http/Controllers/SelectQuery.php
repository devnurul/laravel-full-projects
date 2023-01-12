<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectQuery extends Controller
{
    function UniqueSelect(){
        $result = DB::table('students')->distinct()->get();
        return $result;
    }
    function singleColumn(){
        $result = DB::table('students')->select('name')->get();
        return $result;
    }
    function multiColumn(){
        $result = DB::table('students')->select('name','id')->get();
        return $result;
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    function selectAllRows(){
      $result = DB::table('students')->get();
      return $result;
    }
}

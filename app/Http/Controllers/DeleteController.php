<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteController extends Controller
{
    function onDelete(){
       $result= DB::table('students')->truncate();

        if ($result==true) {
            return "Success";
        }else{
            return "Error";
        }
    }
}

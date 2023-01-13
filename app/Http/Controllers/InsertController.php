<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
   function insertData(){
        $result = DB::table('students')->insertOrIgnore([
            ['id'=>'10', 'name' => 'Sajid', 'class' => '3', 'roll'=>'1201'],
            ['id'=>'11', 'name' => 'Ruomn', 'class' => '7', 'roll'=>'4201'],
            ['id'=>'12', 'name' => 'Mursalin', 'class' => '8', 'roll'=>'7201'],
        ]);
        if ($result==true) {
            return 'data Inseted';
        }else{
            return 'data inster failed';
        }
   }
}

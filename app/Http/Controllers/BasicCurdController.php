<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class BasicCurdController extends Controller
{
    function onSelect(){

       $jsonData = DB::select('select * from students');
       $jsonSting = json_encode($jsonData);
       $selectData = json_decode($jsonSting);

       return view('basic_curd.select', ['selectKey' => $selectData]);


    }
    function onInsert(Request $req){
        $name= $req->input('name');
        $class= $req->input('class');
        $roll= $req->input('roll');

        $resut = DB::insert('INSERT INTO `students`(`name`, `class`, `roll`) VALUES (?, ?, ?)', [$name, $class, $roll]);

        if ($resut==true){
            return"Successfully inserted";
        }else{
            return"Failed";
        }

    }
    function onDelete(Request $req){
        $id = $req->input('id');
        $resut = DB::delete('DELETE FROM `students` WHERE `id` =?', [$id]);

        if ($resut==true){
            return"Successfully inserted";
        }else{
            return"Failed";
        }
    }
    function onUpdate(Request $req){
        $id = $req->input('id');
        $name= $req->input('name');
        $class= $req->input('class');
        $roll= $req->input('roll');

        $resut = DB::update('UPDATE `students` SET `name`=?,`class`=?,`roll`=? WHERE `id`=?',[$name, $class, $roll, $id]);

        if ($resut==true) {
            return"Successfull Updated";
        }else{
            return"Faild";
        }
    }
    

    

}
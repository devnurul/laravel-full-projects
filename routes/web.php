<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/insert', function () {
    return view('basic_curd.insert');
});
Route::get('/delete', function () {
    return view('basic_curd.delete');
});
Route::get('/update', function () {
    return view('basic_curd.update');
});



Route::get('/blogList',[App\Http\Controllers\BlogController::class, 'list']);
Route::get('/select',[App\Http\Controllers\BasicCurdController::class, 'onSelect']);
Route::post('/insetData',[App\Http\Controllers\BasicCurdController::class, 'onInsert']);
Route::post('/deleteData',[App\Http\Controllers\BasicCurdController::class, 'onDelete']);
Route::post('/updateData',[App\Http\Controllers\BasicCurdController::class, 'onUpdate']);

Route::get('/queryBuilder',[App\Http\Controllers\QueryBuilderController::class, 'selectAllRows']);


Route::get('/agreegatesQuery',[App\Http\Controllers\AggreegatesController::class, 'avgValue']);

Route::get('/selectQuery',[App\Http\Controllers\SelectQuery::class, 'multiColumn']);
Route::get('/mergeQuery',[App\Http\Controllers\MargeController::class, 'dataMarge']);
Route::get('/joinAllData',[App\Http\Controllers\MargeController::class, 'joinData']);
Route::get('/insetData',[App\Http\Controllers\InsertController::class, 'insertData']);
Route::get('/deleteData',[App\Http\Controllers\DeleteController::class, 'onDelete']);
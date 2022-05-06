<?php

use App\Http\Controllers\ExamController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\NextController;
use App\Http\Controllers\SubmitController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('info/{category_id}',function($id){
   
    return view('login',compact('id'));
})->name('info');

Route::post('getinfo',[InfoController::class,'info'])->name('getinfo');

Route::get('/exam/{id}',[ExamController::class,'exam'])->name('exam');
Route::get('/timer/{time}',[ExamController::class,'timer']);

Route::post('submit',[SubmitController::class,'submit']);
Route::get('previous',[SubmitController::class,'previous']);

Route::post('/next',[NextController::class,'next']);



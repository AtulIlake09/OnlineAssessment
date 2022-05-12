<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Auth;
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
Route::post('/next',[ExamController::class,'next_que']);
Route::post('/prev',[ExamController::class,'prev_que']);
Route::post('/submit',[ExamController::class,'submit_test']);
Route::get('/finish',[ExamController::class,'After_Submit']);


Route::get('/adminlogin',function(){
    return view('adminlogin');
});

Route::post('/adminlog',[AdminController::class,'login']);
Route::get('adminpage',[AdminController::class,'view_admin']);

Route::post('/addquestion',[AdminController::class,'store']);

Route::get('/category',[AdminController::class,'getcattbl']);

Route::view('/index', 'dashboard');
Route::get('/tables', [AdminController::class,'tables']);

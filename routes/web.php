<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\SuperAdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('URI', 'admin');

Route::get('test/{key}', [InfoController::class, 'index'])->name('test');
Route::post('getinfo', [InfoController::class, 'info'])->name('getinfo');

Route::get('/exam/{id}', [ExamController::class, 'exam'])->name('exam');
Route::get('/timer/{time}', [ExamController::class, 'timer']);
Route::post('/next', [ExamController::class, 'next_que']);
Route::post('/prev', [ExamController::class, 'prev_que']);
Route::post('/submit', [ExamController::class, 'submit_test']);
Route::get('/finish', [ExamController::class, 'After_Submit']);


Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::post('/adminlog', [AdminController::class, 'login']);
Route::get('/dashboard', [AdminController::class, 'view_admin']);

Route::post('/addquestion', [AdminController::class, 'store']);

Route::get('/category', [AdminController::class, 'getcattbl']);

Route::view('/index', 'dashboard');
Route::get('/tables', [AdminController::class, 'tables']);

Route::get('/generatelink', [AdminController::class, 'glink']);
Route::post('/linkgenerate', [AdminController::class, 'generatelink']);

Route::get('/logout', [AdminController::class, 'logot']);
Route::get('/changeStatusglink/{id}', [AdminController::class, 'change_status_glink']);
Route::get('/deletelink/{id}', [AdminController::class, 'delete_link']);
Route::post('/edit_link', [AdminController::class, 'edit_link']);
Route::post('/sharelink', [AdminController::class, 'share_link']);

Route::get('/assessment', [AdminController::class, 'assessment']);
Route::get('/changeStatuscan/{id}', [AdminController::class, 'change_status_candidate']);
Route::get('/deletecan/{id}', [AdminController::class, 'delete_can']);
Route::post('/edit_can', [AdminController::class, 'edit_can']);

Route::get('/getqueans/{id}', [AdminController::class, 'getqueans']);
Route::get('/showanswers', [AdminController::class, 'showanswers']);
Route::post('/feedback', [AdminController::class, 'feedback']);

Route::get('/categories', [AdminController::class, 'categories']);
Route::get('/getques/{id}', [AdminController::class, 'getques']);
Route::get('/categoryques', [AdminController::class, 'questions']);

Route::post('/addcategory', [AdminController::class, 'addcategory']);
Route::get('/changecatStatus/{id}', [AdminController::class, 'change_cat_status']);
Route::get('/deletecategory/{id}', [AdminController::class, 'delete_category']);
Route::post('/editcategory', [AdminController::class, 'edit_category']);

Route::post('/addquestion', [AdminController::class, 'addquestion']);
Route::get('/changequestatus/{id}', [AdminController::class, 'change_que_status']);
Route::get('/deletequestion/{id}', [AdminController::class, 'delete_question']);
Route::post('/editquestion', [AdminController::class, 'edit_question']);

Route::get('/superadmin', [SuperAdminController::class, 'superAdmin_view']);

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
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

//admin login by google,facebook,github
//google login 
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

//facebook login 
Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

//facebook login 
Route::get('login/github', [LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [LoginController::class, 'handleGithubCallback']); 

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

// Route::view('/index', 'dashboard');
// Route::get('/tables', [AdminController::class, 'tables']);

Route::get('/generatelink', [AdminController::class, 'generatelink_view']);
Route::post('/linkgenerate', [AdminController::class, 'generatelink']);

Route::get('/logout', [AdminController::class, 'logot']);
Route::get('/changeStatusglink/{id}', [AdminController::class, 'change_status_glink']);
Route::get('/deletelink/{id}', [AdminController::class, 'delete_link']);
Route::post('/edit_link', [AdminController::class, 'edit_link']);
Route::post('/sharelink', [AdminController::class, 'share_link']);

Route::get('/assessment', [AdminController::class, 'assessment_view']);
Route::get('/changeStatuscan/{id}', [AdminController::class, 'change_status_candidate']);
Route::get('/deletecan/{id}', [AdminController::class, 'delete_can']);
Route::post('/edit_can', [AdminController::class, 'edit_can']);

Route::get('/getqueans/{id}', [AdminController::class, 'getqueans']);
Route::get('/assessment/answers', [AdminController::class, 'showanswers']);
Route::post('/feedback', [AdminController::class, 'feedback']);

Route::get('/tests', [AdminController::class, 'categories_view']);
Route::get('/getques/{id}', [AdminController::class, 'getques'])->name('getques');
Route::get('/tests/questions', [AdminController::class, 'questions_view']);

Route::post('/addcategory', [AdminController::class, 'addcategory']);
Route::get('/changecatStatus/{id}', [AdminController::class, 'change_cat_status']);
Route::get('/deletecategory/{id}', [AdminController::class, 'delete_category']);
Route::post('/editcategory', [AdminController::class, 'edit_category']);

Route::post('/addquestion', [AdminController::class, 'addquestion']);
Route::get('/changequestatus/{id}', [AdminController::class, 'change_que_status']);
Route::get('/deletequestion/{id}', [AdminController::class, 'delete_question']);
Route::post('/editquestion', [AdminController::class, 'edit_question']);

Route::get('/users', [SuperAdminController::class, 'users_view']);
Route::get('/cusers/{id}', [SuperAdminController::class, 'company_users_view']);
Route::get('/companies', [SuperAdminController::class, 'companies_view']);
Route::post('/update_company', [SuperAdminController::class, 'edit_company_details']);
Route::get('/delete_company/{id}', [SuperAdminController::class, 'delete_company']);
Route::post('/add_company', [SuperAdminController::class, 'add_company']);
Route::get('/company_status/{id}', [SuperAdminController::class, 'company_status']);
Route::post('/add_users', [SuperAdminController::class, 'register']);
Route::get('/user_status/{id}', [SuperAdminController::class, 'change_user_status']);
Route::get('/deleteuser/{id}', [SuperAdminController::class, 'delete_user']);
Route::post('/edit_users', [SuperAdminController::class, 'edit_user_details']);

Route::get('question/create-step-one/{cat_id}', [QuestionController::class, 'createStepOne'])->name('question.create.step.one');
Route::post('question/create-step-one', [QuestionController::class, 'postCreateStepOne'])->name('question.create.step.one.post');

Route::get('question/create-step-two/{ques_id}', [QuestionController::class, 'createStepTwo'])->name('question.create.step.two');
Route::post('question/create-step-two', [QuestionController::class, 'postCreateStepTwo'])->name('question.create.step.two.post');

Route::get('question/create-step-three/{ques_id}', [QuestionController::class, 'createStepThree'])->name('question.create.step.three');
Route::post('question/create-step-three', [QuestionController::class, 'postCreateStepThree'])->name('question.create.step.three.post');
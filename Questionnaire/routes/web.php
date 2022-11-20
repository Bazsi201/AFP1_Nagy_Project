<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\QuestionController;


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

Route::get('/questionnaires/create', [QuestionnaireController::class,'create']);

Route::post('/questionnaires', [QuestionnaireController::class,'store']);

Route::get('/questionnaires/{questionnaire}', [QuestionnaireController::class,'show']);

Route::get('/questionnaires/{questionnaire}/questions/create',[QuestionController::class, 'create']);

Route::post('/questionnaires/{questionnaire}/questions',[QuestionController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

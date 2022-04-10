<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ModuleSectionController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\QuizModuleController;
use App\Http\Controllers\QuizSectionController;
use App\Http\Controllers\SectionChapterController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'module'], function() {
    Route::resource('/',ModuleController::class);
    Route::resource('section',ModuleSectionController::class);
    //show how many user register in a module
    Route::get('status/{$id}',[DashboardController::class,'ModuleStatus']);
    Route::resource('quiz',QuizModuleController::class);
});

Route::group(['prefix' => 'section'], function() {
    Route::resource('/',SectionController::class);
    Route::resource('chapter',SectionChapterController::class);
    Route::resource('quiz',QuizSectionController::class);
});

Route::resource('chapter',ChapterController::class);
//post a new request to admin to be a Trainer

Route::post('email',[RequestToBeATrainer::class,'RequestRegiser']);


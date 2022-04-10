<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ModuleSectionController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\PathController;
use App\Http\Controllers\PathModuleController;
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

 Route::group([
     'middleware' => 'api',
     'prefix' => 'auth'

 ], function ($router) {
     Route::post('/login', [AuthController::class, 'login']);
     Route::post('/register', [AuthController::class, 'register']);
     Route::post('/logout', [AuthController::class, 'logout']);
     Route::post('/refresh', [AuthController::class, 'refresh']);
     Route::get('/user-profile', [AuthController::class, 'userProfile']);
 });


Route::resource('trainers',TrainerController::class);
Route::resource('modules',ModuleController::class);
Route::resource('modules/section',ModuleSectionController::class);
Route::resource('module/quiz',QuizModuleController::class);
Route::resource('paths',PathController::class);
Route::resource('paths/module',PathModuleController::class);
Route::resource('sections',SectionController::class);
Route::resource('section/chapter',SectionChapterController::class);
Route::resource('section/quiz',QuizSectionController::class);
Route::resource('chapters',ChapterController::class);

<?php

use App\Http\Controllers\ChapterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PathController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\UserController;
use Barryvdh\Debugbar\DataCollector\ModelsCollector;

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
Route::get('trainer/{id}', [TrainerController::class,'index']);

Route::group(['prefix' => 'paths'], function() {
    Route::get('/', [PathController::class,'getPaths']);
    Route::get('{id}', [PathController::class,'getPath']);
    Route::get('{id}/modules', [PathController::class,'getPathmodules']);
    Route::get('{id}/join', [PathController::class, 'join']);
    Route::get('{id}/rating', [UserController::class,'favoritePath']);
});

Route::group(['prefix' => 'modules'], function() {
    Route::get('/', [ModuleController::class,'getModels']);
    Route::get('/categorie', [ModuleController::class,'getCategorieModules']);
    Route::get('/{id}', [ModuleController::class,'getModel']);
    Route::get('{id}/sections', [ModuleController::class,'getmodulesSection']);
    Route::get('{id}/path', [ModuleController::class,'getPath']);
    Route::get('{id}/join', [ModuleController::class, 'join']);
    Route::get('{id}/rating', [UserController::class,'favoriteModule']);
    Route::get('id}/quiz', [QuizController::class,'getquizModule']);
});

Route::group(['prefix' => 'sections'], function() {
    Route::get('/', [SectionController::class,'getsections']);
    Route::get('{id}/chapters', [SectionController::class,'getSectionChapters']);
    Route::get('/countSections/{id}', [SectionController::class,'countSections']);
    Route::get('/countChapters/{id}', [SectionController::class,'countChapters']);
    Route::get('{id}/start', [SectionController::class, 'start']);
    Route::get('{id}/quiz', [QuizController::class,'getquizSection']);
});

Route::group(['prefix' => 'chapters'], function() {
    Route::get('/', [ChapterController::class,'getChapters']);
    Route::get('/{id}', [ChapterController::class,'getChapter']);
    Route::get('{id}/start', [ChapterController::class, 'start']);

});

Route::group(['prefix' => 'quiz'], function() {
    Route::get('{id}/start', [QuizController::class, 'start']);
    Route::get('verified', [QuizController::class,'QuizVerif']);
    });

Route::group(['prefix' => 'me'], function() {
    Route::group(['prefix' => 'paths'], function() {
        Route::get('/', [UserController::class,'getUserPath']);
        Route::get('favorite', [UserController::class,'getFavoritePath']);

    });

    Route::group(['prefix' => 'modules'], function() {
        Route::get('/', [UserController::class,'getUserModule']);
                Route::get('/', [UserController::class,'getUserModule']);

        Route::get('favorite', [UserController::class,'getFavoriteModule']);

    });
    Route::group(['prefix' => 'favorite'], function() {
        Route::get('{id}/path', [UserController::class,'FavoritePath']);
        Route::get('{id}/module', [UserController::class,'FavoriteModule']);

    });

    Route::get('sections', [UserController::class,'getUserSection']);
    Route::get('chapters', [UserController::class,'getUserChapter']);

});
Route::get('test/{id}', [ModuleController::class,'getAll']);




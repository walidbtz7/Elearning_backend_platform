<?php

namespace App\Http\Controllers;

use App\Http\Resources\FavoriteModuleResource;
use App\Http\Resources\FavoritePathResource;
use App\Http\Resources\UserChapterResource;
use App\Http\Resources\UserModuleResource;
use App\Http\Resources\UserPathResource;
use App\Http\Resources\UserQuizResource;
use App\Http\Resources\UserSectionResource;
use App\Models\UserChapter;
use App\Models\UserModule;
use App\Models\UserSection;
use App\Models\UserPath;
use App\Models\FavoriteModule;
use App\Models\FavoritePath;
use App\Models\UserQuiz;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // auth()->id())->get();
    public function getUserPath(){
        $path = UserPath::all();
        return UserPathResource::collection($path);
    }
    public function getUserModule(){
        $module = UserModule::all();
        return UserModuleResource::collection($module);
    }
    public function getUserSection(){
        $section = UserSection::all();
        return UserSectionResource::collection($section);
    }
    public function getUserChapter(){
        $chapter = UserChapter::all();
        return UserChapterResource::collection($chapter);
    }
    public function getUserQuiz(){
        $Quiz = UserQuiz::all();
        return UserQuizResource::collection($Quiz);
    }

    public function favoritePath(Request $request)
    {
        // $user_id = User::where('id',auth()->id())->get());
        $FavoritePath = new FavoritePath;
        $FavoritePath-> path_id = $request->id;
        $FavoritePath-> user_id = 1;
        $FavoritePath->save();

    }
    public function getfavoritePath()
    {
        $favorite= FavoritePath::all();
        return FavoritePathResource::collection($favorite);

    }
    public function getfavoriteModule()
    {
        $favorite= FavoriteModule::all();
        return FavoriteModuleResource::collection($favorite);


    }
     public function favoriteModule(Request $request)
    {

        // $user_id = User::where('id',auth()->id())->get());
        $FavoriteModule = new FavoriteModule;
        $FavoriteModule-> path_id = $request->id;
        $FavoriteModule-> user_id = 1;
        $FavoriteModule->save();
    }



}



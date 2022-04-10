<?php

namespace App\Http\Controllers;

use App\Http\Resources\ChapterResource;
use App\Models\Chapter;
use App\Models\UserChapter;
use App\Models\UserSection;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function getChapters(){

        $chapter = Chapter::all();
        return ChapterResource::collection($chapter);

    }
    public function getChapter($id){

        $chapter = Chapter::where('id',$id)->get();
        return ChapterResource::collection($chapter);

    }

    public function start(Request $request)
    {
    // $user_id = User::where('id',auth()->id())->get());
        $UserChapter = new UserChapter;
        $UserChapter-> chapter_id = $request->id;
        $UserChapter-> user_id = 1;
        $UserChapter->save();
    }
}

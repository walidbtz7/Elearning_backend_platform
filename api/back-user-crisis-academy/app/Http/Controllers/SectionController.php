<?php

namespace App\Http\Controllers;

use App\Http\Resources\SectionChapterResource;
use App\Http\Resources\SectionResource;
use App\Models\Chapter;
use App\Models\ModuleSection;
use App\Models\Section;
use App\Models\SectionChapter;
use App\Models\UserSection;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function getsections(){

        $section = Section::all();
        return $section;

    }
    public function getSectionChapters($id){
         $section= Section::findOrFail($id);
        return response($section, 200);

    }
    public function countSections($id){
        $count= ModuleSection::where('section_id',$id)->count();
       return response($count, 200);
   }
    public function countChapters($id){
        $count= SectionChapter::where('module_id',$id)->count();
       return response($count, 200);
   }

    public function start(Request $request)
    {

        // $user_id = User::where('id',auth()->id())->get());
        $UserSection = new UserSection();
        $UserSection-> section_id = $request->id;
        $UserSection-> user_id = 1;
        $UserSection->save();
    }
}


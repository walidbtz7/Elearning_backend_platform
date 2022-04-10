<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Quiz;
use App\Models\QuizModule;
use App\http\Resources\QuizModuleResource;
use App\Http\Resources\QuizSectionResource;
use App\Models\QuizSection;
use App\Models\UserQuiz;

class QuizController extends Controller
{
    public function getquizModule(Request $request)
    {

     $Quiz = QuizModule::where('module_id',$request->id)->get();
     return QuizModuleResource::collection($Quiz);

    }

    public function getquizSection(Request $request){

        $Quiz = QuizSection::where('section_id',$request->id)->get();
        return QuizSectionResource::collection($Quiz);

    }
    public function start(Request $request)
    {
        // $user_id = User::where('id',auth()->id())->get());
         $userQuiz = new UserQuiz;
         $userQuiz-> user_id = 1;
         $userQuiz-> quiz_id = $request->id;
         $userQuiz->save();
    }
    public function QuizVerif(Request $request)
    {
          //user_score >= min_point
    }


}

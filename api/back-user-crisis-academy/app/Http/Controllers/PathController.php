<?php

namespace App\Http\Controllers;

use App\Http\Resources\PathModuleResource;
use App\Http\Resources\PathResource;
use App\Models\LearningPath as Path;
use App\Models\LearningPathModule;
use App\Models\User;
use App\Models\UserChapter;
use App\Models\UserPath;
use Illuminate\Http\Request;

class PathController extends Controller
{
        public function getPaths(){

            $Path = Path::paginate(6);
            return PathResource::collection($Path);

        }

        public function getPath(Request $request){

            $Path = Path::where('id',$request->id)->get();
            return PathResource::collection($Path);

        }

        public function getPathmodules(Request $request)
        {
            $pathMod = LearningPathModule::where('path_id',$request->id)->get();
            return PathModuleResource::collection($pathMod);
        }

        public function join(Request $request)
        {
            // $user_id = User::where('id',auth()->id())->get());
                $UserPath = new UserPath;
                $UserPath-> path_id = $request->id;
                $UserPath-> user_id = 1;
                $UserPath->save();
        }


}

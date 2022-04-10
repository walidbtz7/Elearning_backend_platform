<?php

namespace App\Http\Controllers;
use App\Http\Resources\ModuleResource;
use App\Http\Resources\ModuleSectionResource;
use App\Models\LearningPathModule;
use App\Models\Module;
use App\Models\ModuleSection;
use App\Models\UserModule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModuleController extends Controller
{

        public function getModels(){

            $Module = Module::all();
            return ModuleResource::collection($Module);
        }
        public function getModel($id){
            $Module = Module::where('id',$id)->get();
            return ModuleResource::collection($Module);
        }

        function getCategorieModules(){
            $modules = [];
            $categories = Module::with('category')
                ->get('category_id')->unique('category_id')->toArray();
            $categories = array_column($categories, 'category_id');
            for($i=0;$i<count($categories);$i++)
            {
                $modules_cat= Module::where('category_id',$categories[$i])->get();
                $category = array('category'=>$categories[$i],'modules'=>$modules_cat);
                array_push($modules,$category);
            }
            return response($modules, 200);
        }

        public function getmodulesSection(Request $request)
        {
            $ModSec = ModuleSection::where('module_id',$request->id)->get();
            return ModuleSectionResource::collection($ModSec);
        }

        public function getAll($id){
            $ModSec= Module::findOrFail($id);
            return response($ModSec, 200);

        }
        public function getPath($id){
            $ModSec= LearningPathModule::where('module_id',$id)->get('path_id');
            return response($ModSec, 200);

        }

        public function join(Request $request)
        {
           // $user_id = User::where('id',auth()->id())->get());
            $UserModule = new UserModule;
            $UserModule-> module_id = $request->id;
            $UserModule-> user_id = 1;
            $UserModule->save();
        }

}

<?php

namespace App\Http\Controllers;

use App\Models\UserModule;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function ModuleStatus($id){
      $status = UserModule::where('module_id',$id);
      foreach ($status as $s) {
        $s++;
     }
     return response()->json($s,200);
    }
}

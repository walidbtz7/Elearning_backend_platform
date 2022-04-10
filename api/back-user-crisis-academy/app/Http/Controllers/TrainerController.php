<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index($id){
        $trainer = Trainer::where('id',$id)->get();
        return response()->json($trainer,200);
    }
}

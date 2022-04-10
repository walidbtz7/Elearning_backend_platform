<?php

namespace App\Http\Controllers;

use App\Mail\requestRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ;

class RequestToBeATrainer extends Controller
{
    public function RequestRegiser(Request $request){
      $Form=[
          'name' =>$request->name,
          'email' =>$request->email,
          'phone' =>$request->phone,
          'message' =>$request->name,

      ];
      Mail::to('walidboutzougarte@gmail.com')->send(new requestRegister($Form));
      return back()->with('message_sent','Your Message has been sent successfuly!');

    }
}

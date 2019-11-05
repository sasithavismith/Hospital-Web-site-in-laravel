<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class messagecontroller extends Controller
{
     
    public function submit(Request $request){
        $message=new Message;
        $this ->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
            
        ]);
      //print_r($request->input());
     $message->name=$request->input('name');
     $message->email=$request->input('email');
     $message->message=$request->input('message');
     $message-> save();
     return redirect('/home');
    // dd($request ->all());

    

    }
}

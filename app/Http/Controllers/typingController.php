<?php

namespace App\Http\Controllers;


use App\Models\typingTest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class typingController extends Controller
{
    public function typingTest(){
        return view('typingTest.typingTest');
    }
    public function typingSubmit(Request $request){
        $fields = $request->validate([
            'user_id' =>'required',
            'wpm'=>'required',
            'cpm'=> 'required',
            'mistake' =>'required'
        ]);

          
     typingTest::create($fields);
     return redirect('/')->with('message','Test Recorded');

    }
}

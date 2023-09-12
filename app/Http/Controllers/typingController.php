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
        $charindex = request('inpm');
        $correct = request('cpm');
        
        $accuracy = $correct/$charindex;
        $fields = $request->validate([
            'user_id' =>'required',
            'wpm'=>'required',
            'cpm'=> 'required',
            'mistake' =>'required',
    
        ]);
    
        $fields['accuracy']= $accuracy;
        if(request('wpm')>= 60){
          $fields['status'] = "Passed";
        }else{
            $fields['status'] = "Failed";
        }

        //   return request('wpm');
     typingTest::create($fields);
     return redirect('/')->with('message','Test Recorded');

    }
}

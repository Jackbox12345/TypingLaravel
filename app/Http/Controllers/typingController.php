<?php

namespace App\Http\Controllers;


use App\Models\typingTest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class typingController extends Controller
{
    public function typingTest(){
        $status = typingTest::where('user_id',auth()->id())->get();
        $status2 = $status->first()->status;
        return view('typingTest.typingTest',['typingStatus'=>$status2]);
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

          
     typingTest::create($fields);
     return redirect('/')->with('message','Test Recorded');

    }
}

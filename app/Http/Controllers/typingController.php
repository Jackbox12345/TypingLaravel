<?php

namespace App\Http\Controllers;

use App\Models\typingTest;
use Illuminate\Http\Request;

class typingController extends Controller
{
    public function typingTest(){
        return view('typingTest.typingTest');
    }
    public function typingSubmit(Request $request){
        dd($request);
      
     //typingTest::create($request);
    }
}

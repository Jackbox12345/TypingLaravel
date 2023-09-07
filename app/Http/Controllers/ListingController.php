<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{

   public function index(Request $request){
  //dd(request('tag'));
    return view('listings.index',[
        'listings'=> Listing::latest()->filter(request(['tag','search']))->paginate(6)

    ]);
   }
   
   public function show(Listing $listing){
    return view('listings.show',[
        'listing'=> $listing
    ]);
   }
   public function create(){
    return view('listings.create');
   }
   public function store(Request $request){

$formfields = $request->validate([
'title'=>'required',
'company'=>['required',Rule::unique('listings','company')],
'location'=>'required',
'website' =>'required',
'email' => ['required','email'],
'tags'=>'required',
'description'=>'required'
]);
if($request->hasFile('logo')){
    $formfields['logo']= $request->file('logo')->store('logos','public');
}
$formfields['user_id'] = auth()->id();
 //dd($formfields);
Listing::create($formfields);

// Session::flash('message','Listing Created');

return redirect('/')->with('message','Listing created');
   }

   public function edit(Listing $listing){
   
     return view('listings.edit',['listing'=>$listing]);
   }

   public function update(Request $request, Listing $listing){

    $formfields = $request->validate([
    'title'=>'required',
    'company'=>['required'],
    'location'=>'required',
    'website' =>'required',
    'email' => ['required','email'],
    'tags'=>'required',
    'description'=>'required'
    ]);
    if($request->hasFile('logo')){
        $formfields['logo']= $request->file('logo')->store('logos','public');
    }
    // dd($formfields);
    $listing->update($formfields);
    
    // Session::flash('message','Listing Created');
    
    return back()->with('message','Listing Updated Successfully');

       }

       public function destroy(Listing $listing){

        $listing->delete();
        return redirect('/')->with('message','Listing deleted successfully');

       }


}

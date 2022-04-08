<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Contact;
use Dotenv\Validator as DotenvValidator;
use GrahamCampbell\ResultType\Success;

class ContactController extends Controller
{

    public function contactpost(Request $request){

$rules=[
    'email'=>'required|email',
    'subject'=>'required',
    'description'=>'required|min:10'  
];

        $validate=Validator::make($request->post(),$rules);
        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
 
        }
        
        $contact = new Contact;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->description=$request->description;
        $contact->save();
        return redirect()->back()->with('success','Your message has been sent. Thank you!');
        //print_r($request->post());

    }
}

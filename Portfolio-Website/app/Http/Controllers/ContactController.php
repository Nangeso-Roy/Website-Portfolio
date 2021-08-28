<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function createForm(Request $request){
        return view('contact');
    }

    public function store(Request $request){
// info('Just after the new model');
        //Form Validattion
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|digits:10',
            'subject'=>'required',
            'message'=>'required'       ]);

         Contact::create($request->all());
         
         return back()->with('success','I have received your Message.Thank you for contacting me!');
    }
    
        
}

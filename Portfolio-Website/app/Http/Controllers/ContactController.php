<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function createForm(){
        return view('contact');
    }

    public function storeForm(Request $request){
// info('Just after the new model');
        //Form Validattion
        // dd($request);
        
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required|digits:10',
            'subject'=>'required',
            'message'=>'required'       ]);

        //  Contact::create($request->all());
        //  info('storing the blog');
         
        $contact = new Contact();
        $contact->name=request('name');
        $contact->email=request('email');
        $contact->phone=request('phone');
        $contact->subject=request('subject');
        $contact->message=request('message');

        $contact->save();

         return redirect('/')
         ->with('success','I have received your Message.Thank you for contacting me!');
    }
    
        
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|min:5',
            'title' => 'required|unique:blogs',
            'body' => 'required',
            'email'=>'required|email',
            'phone'=>'required|digits:10',
            'subject'=>'required',
            'message'=>'required',       

        ];
    }

    public function messages(){
        return [
            'name.required.min'=>'Your name is required',
            'title.required'=>'A title is required',
            'body.required'=>'A blog needs a body',
            'subject.required'=>'Please add a subject to your message!',
            'message.required'=>'Please write a message to explain the subject',
            'email.required.email'=>'You missed the email, I will not be able to contact you.',
            'phone.required.digits'=>'You either missed or the phone number is wrong'

        ];
    }
}

@extends('layouts.app')
@section('content')

<div class="container">
    <form action="{{route('contact.store')}}" method="post">
        @csrf

        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" name="name" id="name" class="form-control {{$errors->has('name')? 'error':''}}">

                @if($errors->has('name'))
                    <div class="error">
                        {{$errors->first('name')}}
                    </div>
                @endif
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control {{$errors->has('email')? 'error':''}}" placeholder="name@mail.com">
                @if($errors->has('email'))
                    <div class="error">
                        {{$errors->first('email')}}
                    </div>
                @endif    
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control {{$errors->has('phone')? 'error':''}}">
                @if($errors->has('phone'))
                    <div class="error">
                        {{$errors->first('phone')}}
                    </div>
                @endif    
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" class="form-control {{$errors->has('subject')? 'error':''}}"
             placeholder="Summarise Your Message here">
                @if($errors->has('subject'))
                    <div class="error">
                        {{$errors->first('subject')}}
                    </div>
                @endif    
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control {{$errors->has('message')? 'error':''}}"
                 placeholder="Type your message here"></textarea>

                 @if ($errors->has('message'))
                    <div class="error">
                        {{$errors->first('message')}}
                    </div>   
                 @endif
        </div>
        <input type="submit" value="SUBMIT" class="btn btn-dark btn-block">

    </form>

</div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="container d-flex justify-content-center">
        {{-- <a href="/blogs" class="btn btn-outline-primary btn-sm">Return</a> --}}
        <div class="card shadow-sm p-3 mb-5 rounded" style="width:15cm;">
            <div class="row">
                <div class="col">
                    <div class="card-body">
                        <h1 class="display-one">{{ucfirst($blog->title)}}</h1>
                        <p>{{ $blog->body }}</p>
                        <hr>
                        <a href="/blogs/{{$blog->id}}/edit" class="btn btn-outline-primary">Edit Post</a>
                        
                            <div class="d-flex justify-content-end">
                                <form id="delete-form"action="{{route('blogs.destroy',['blog'=>$blog->id])}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to Delete?S')">Delete Blog</button>
                                </form>
                            </div>    
                        
                    </div>
                    
                </div>   
            </div>
         </div>
        </div>
        
    </div>
@endsection
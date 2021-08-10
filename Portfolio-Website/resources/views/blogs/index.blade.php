@extends('layouts.app')
@section('content')
    

<div class="container ">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h1 class="display-one">My Blog</h1>
                </div>
            </div>
            

            @foreach ($blogs as $blog)
                <ul class="d-flex justify-content-center">
                    <li><a href="blogs/{{$blog->id}}">{{ ucfirst($blog->title)}}</a></li>
                </ul>
                @empty($blog)
                    <p class="text-warning">This post is not available</p>
                    
                @endempty

            @endforeach
              
                {{$blogs->links()}}
              
            
            <div class="col">
                <a href="/blogs/create">Create New Blog</a>
            </div>
        </div>
    </div>
</div>
@endsection
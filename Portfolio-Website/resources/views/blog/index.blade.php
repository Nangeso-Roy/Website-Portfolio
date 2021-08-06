@extends('layouts.app')
@section('content')
    

<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one">My Blog</h1>
                </div>
            </div>

            @foreach ($blogs as $blog)
                <ul>
                    <li><a href="./blog/{{$blog->id}}">{{ ucfirst($blog->title)}}</a></li>
                </ul>
                @empty($blog)
                    <p class="text-warning">This post is not available</p>
                    
                @endempty
            @endforeach
                
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blog" class="btn btn-outline-primary btn-sm">Return</a>
                <h1 class="display-one">{{ucfirst($blog->title)}}</h1>
                <p>{{ $blog->body }}</p>
                <hr>
                <a href="/blog/{{$blog->id}}/edit" class="btn btn-outline-primary">Edit Post</a>
                <br>
                <form id="delete-form"action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Blog</button>
                </form>
            </div>
        </div>
    </div>
@endsection
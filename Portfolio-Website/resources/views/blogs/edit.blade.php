@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blogs" class="btn btn-outline-primary btn-sm">Return</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit Blog</h1>
                    <p>Edit and Submit to update blog</p>

                    <hr>

                    <form action="" method="post">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="control-group col-12 mt-2">
                                <label for="title">Blog Title</label>
                                <input type="text" name="title" id="title" placeholder="Edit the Title" value="{{$blog->title}}" required>
                            </div>
                            <div class="control-group col-12">
                                <label for="body">Blog</label>
                                <textarea name="body" id="body" cols="30" rows="10" placeholder="Edit from here" required>{{$blog->body}}</textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button id="btn-submit" class="btn-primary">
                                    Update Blog
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="_method" value="PUT">
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection
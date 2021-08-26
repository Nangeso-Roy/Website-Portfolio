@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/blogs" class="btn btn-outline-primary btn-sm">Return</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Write something New</h1>

                    <hr>

                    <div class="card-body">
                        @if ($errors->any())
                            <ul>
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </div>
                            </ul>
                                
                        @endif
                    </div>

                    <form action="{{route('blogs.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="title">Blog Title</label>
                                <input type="text" id="title" class="form-control" name="title" 
                                  placeholder="Write the title here"required>
                            </div>
                            <div class="control-group col-12 mt-2">
                                <label for="body">Blog here</label>
                                <textarea name="body" id="body" cols="30" rows="" class="form-control" placeholder="Write here.Blow them away"></textarea>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col=12 text-center">
                                <button type="submit" id="btn=submit" class="btn btn-primary">
                                    Create Blog
                                </button>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>

        </div>
    </div>
    
@endsection
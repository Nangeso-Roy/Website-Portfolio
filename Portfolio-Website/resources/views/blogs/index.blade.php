@extends('layouts.app')
@section('content')
    

<div class="container d-flex justify-content-center ">
    <div class="card text-center shadow-sm p-3 mb-5 rounded mt-5 pl-4 pr-4 pt-4 pb-4" style="width:15cm;">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="card-body">
                        <div class="card-title">
                           <h2>My Blog</h2> 
                        </div>

                        <hr>

                        @foreach ($blogs as $blog)
                        <ul class="list-group">
                            <li class="list-group-item"><a href="blogs/{{$blog->id}}">{{ ucfirst($blog->title)}}</a></li>
                        </ul>
                        @empty($blog)
                            <p class="text-warning">This post is not available</p>
                            
                        @endempty
        
                        @endforeach

                        <p></p>
                      <div class="col d-flex justify-content-center ">
                        {{$blogs->links()}}
                      </div>
                        
                    
                        <p></p> 
                        <div class="col">
                            <a href="/blogs/create" class="btn btn-outline-primary">Create New Blog</a>
                        </div>
                    </div>
                   
                </div>
                
    
                
            </div>
        </div>
    </div>
    
</div>
@endsection
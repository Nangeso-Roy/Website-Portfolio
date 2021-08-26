<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index(){//Show all my blogs

        $blogs = blog::orderBy('id','desc')->paginate(5);
        

        return view('blogs.index', ['blogs'=> $blogs]);
    }

    public function show(Blog $blog){//show a single blog 
        return view('blogs.show',['blog'=>$blog]);
    }

    public function create(){//form to create a blog
        return view('blogs.create');
    }

    public function store(Request $request){//function to store blog in the db
        $blog = new Blog();

        info('Just after the new model');

        $validator = Validator::make($request->all(),[
            'title' => 'required|unique:blogs',
            'body' => 'required',
        ]);

        if($validator->fails()){
            return redirect('blogs/create')
            ->withErrors($validator)
            ->withInput();
        }

        $blog->title=request('title');
        $blog->body=request('body');

        $blog->save();

        return redirect('/blogs')
        ->with('success','The new blog has been created successfully!');
        info('Saved and redirectings');
    }

    public function edit(Blog $blog){//form to edit a blog
        return view('blogs.edit',['blog'=>$blog]);
        
    }

    public function update(Request $request,Blog $blog){//updates the blog in the db
        $validator = Validator::make($request->all(),[
            'title' => 'required|unique:blogs',
            'body' => 'required',
        ]);

        if($validator->fails()){
            return redirect('blogs/'.$blog->id)
            ->withErrors($validator)
            ->withInput();
        }
        $blog->update([
            'title'=>$request->title,
            'body'=>$request->body
        ]);

        return redirect('blogs/'.$blog->id)
        ->with('success','Blog edited Successfull!');
    }
    public function destroy(Blog $blog){//deletes the blog from the db
        $blog->delete();

        return redirect('/blogs')
        ->with('success','Blog has been deleted succesfully');
    }
}


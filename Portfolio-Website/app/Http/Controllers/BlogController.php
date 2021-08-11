<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){//Show all my blogs

        $blogs = blog::paginate(5);
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

        $blog->title=request('title');
        $blog->body=request('body');

        return redirect('/blogs')->with('success','The new blog has been successfully created');
    }

    public function edit(Blog $blog){//form to edit a blog
        return view('blogs.edit',['blog'=>$blog]);
    }

    public function update(Request $request,Blog $blog){//updates the blog in the db
        $blog->update([
            'title'=>$request->title,
            'body'=>$request->body
        ]);

        return redirect('blogs/'.$blog->id);
    }
    public function destroy(Blog $blog){//deletes the blog from the db
        $blog->delete();

        return redirect('/blogs')
        ->withinput()
        ->with('success','Blog has be deleted succesfully');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){//Show all my blogs

        $blogs = blog::all();
        return $blogs;
    }

    public function show(Blog $blog){//show a single blog 
        return $blog;
    }

    public function create(){//form to create a blog

    }

    public function store(Request $request){//function to store blog in the db

    }

    public function edit(Blog $blog){//form to edit a blog

    }

    public function update(Request $request,Blog $blog){//updates the blog in the db

    }
    public function destroy(Blog $blog){//deletes the blog from the db

    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlogPost;

class blogDetailController extends Controller
{
    public function index()
    {
        // return view('blogs.blogdetails');
            $posts = BlogPost::all();
            return view('blogs.blogdetails', compact('posts'));
    }
    public function blogcomments($id)
    {
        $posts = BlogPost::find($id);
        return view('blogs.blogdetails', compact('posts'));
    }
}

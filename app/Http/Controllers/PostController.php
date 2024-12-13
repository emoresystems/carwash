<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Corrected namespace for Post model

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all(); // Corrected model name
        return view('blogs.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);
    
       
    
        // Create a new post
        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author = $request->author;        
        $post->save();
    
        // Redirect to the index page with success message
        return redirect()->route('posts.create')->with('success', 'Post created successfully.');
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validation
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
        ]);

        // Find the post
        $post = Post::findOrFail($id);

        // Update the post
        $post->update($request->all());

        // Redirect to the index page with success message
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the post
        $post = Post::findOrFail($id);

        // Delete the post
        $post->delete();

        // Redirect to the index page with success message
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}

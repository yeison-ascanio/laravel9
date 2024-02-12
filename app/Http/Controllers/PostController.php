<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    private $post;

    public function __construct()
    {
        $this->post = new Post();
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        return view("posts/index", ["posts" => $posts]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SavePostRequest $request)
    {
        $this->post->create($request->validated());

        return to_route("posts.index")->with("status", "Post created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * edit post
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
    /**
     * Create a new post 
     */
    public function create()
    {
        return view('posts.create', ['post' => new Post()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SavePostRequest $request,Post  $post)
    {
        $post->update($request->validated());

        return to_route("posts.show", $post)->with("status", "Post updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return to_route("posts.index")->with("status", "Post deleted");
    }
}

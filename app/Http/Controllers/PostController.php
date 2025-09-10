<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index(){
        // $data = Post::all();
        $data = Post::paginate(4);
        // $data = Post::simplePaginate(2);
        // $data = Post::cursorPaginate(5);
        return view('post.index', ['posts' => $data, "pageTitle" => 'Blog']);
    }

    function show ($id){
        $post = Post::findOrFail($id);
        return view('post.show', ['post' => $post, "pageTitle" => $post->title]);
    }

    function create(){
        // $post = Post::create([
        //     'title' => 'My third Post',
        //     'body' => 'This Is My Content 3',
        //     'author' => 'Ahmed Saltuh',
        //     'published' => true
        // ]);

        Post::factory(100)->create();
        return redirect('/blog');
    }

    function delete () {
        Post::destroy(1);
        return redirect('/blog');
    }
}

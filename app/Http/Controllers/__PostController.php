<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class __PostController extends Controller
{
    function index(){
        // $data = Post::all();
        // $data = Post::simplePaginate(2);
        // $data = Post::cursorPaginate(5);
        $data = Post::paginate(4);
        return view('post.index', ['posts' => $data, "pageTitle" => 'Blog']);
    }

    function show ($id){
        // $post = Post::find($id);
        $post = Post::findOrFail($id);
        return view('post.show', ['post' => $post, "pageTitle" => $post->title]);
    }

    function create(){
        // Go To Form With Create
    }

    function edit ($id) {
        // Go To Screen For Edit Form
    }



    // function create(){
    //     // $post = Post::create([
    //     //     'title' => 'My third Post',
    //     //     'body' => 'This Is My Content 3',
    //     //     'author' => 'Ahmed Saltuh',
    //     //     'published' => true 
    //     // ]);

    //     Post::factory(10)->create();
    //     return response('Created Successfully', 201);
    //     // return redirect('/blog');
    // }

    // function delete ($id) {
    //     Post::destroy($id);
    //     // return redirect('/blog');
    //     return response('Deleted Successfully', 204);
    // }
}

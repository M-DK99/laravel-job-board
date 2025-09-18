<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class __CommentController extends Controller
{
    function index(){
        $data = Comment::all(); 
        return view('comment.index', ['comments' => $data, "pageTitle" => 'Comments']);
    }

    function create(){
        // Comment::create([
        //     'author' => 'Ahmed',
        //     'content' => 'This Is My Content To Post To Post 1',
        //     'post_id' => 1
        // ]);

        // $post = \App\Models\Post::first();
        // Comment::factory(5)->create(['post_id' => $post->id]);

        Comment::factory(5)->create();
        return response(['message' => 'Comment created Successfully' , 'createdCount' => 5], 201);
        // return redirect('/comment'); 
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    function index(){
        $data = Tag::all();
        return view('tag.index', ['tags' => $data, "pageTitle" => 'Tags']);
    }

    function create(){
        Tag::create([
            'title' => 'CSS',
        ]);
        return redirect('/tags');
    }

    function testManyToMany(){
        // $post2 = Post::find(2);
        // $post3 = Post::find(3);

        // $post2->tags()->attach([1, 3]);
        // $post3->tags()->attach([2]);

        // return response()->json([
        //     'post2' => $post2->tags,
        //     'post3' => $post3->tags
        // ]);

        $tag = Tag::find(4);

        $tag->posts()->attach([3]);

        return response()->json([
            'tag' => $tag->title,
            'posts' => $tag->posts
        ]);
    }
}

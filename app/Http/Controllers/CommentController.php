<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Comment::paginate(10);
        return view('comment.index', ['comments' => $data, "pageTitle" => 'Comments']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment.create', ['pageTitle' => 'Create New Comment']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // @ToDo
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Comment::find($id);
        return view('comment.show', ['comment' => $data, "pageTitle" => 'View Comment Details']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Comment::find($id);
        return view('comment.edit', ['comment' => $data, "pageTitle" => 'Edit Comment']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // @ToDo
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // @Todo
    }
}

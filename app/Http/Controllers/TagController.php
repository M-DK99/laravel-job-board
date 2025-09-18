<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tag::all();
        return view('tag.index', ['tags' => $data, "pageTitle" => 'Tags']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tag.create', ['pageTitle' => 'Create New Tag']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //@ToDo
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Tag::find($id);
        return view('tag.show', ['tag' => $data, "pageTitle" => 'View Tag Details']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Tag::find($id);
        return view('tag.edit', ['tag' => $data, "pageTitle" => 'Edit Tag']);
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
        // @ToDo
    }
}

<x-layout :title="$pageTitle"> 
    <h1>Comment Exploring (Testing)</h1>
    @foreach ($comments as $comment)
        <p><strong>Author:</strong> {{ $comment->author }}</p>
        <p>{{ $comment->content }}</p>
        <p><strong>post:</strong> {{ $comment->post_id }}</p>
        <p><strong>post:</strong> {{ $comment->post->title }}</p>
        <a href="/blog/{{ $comment->post->id }}"> {{ $comment->post->title }}</a>
        <br>
        <br>
        @endforeach

    </x-layout>

<x-layout :title="$pageTitle"> 
    <h1>Blog {{ $post->id }}</h1>
        <h2 class="text-2xl">{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <p><strong>Author:</strong> {{ $post->author }}</p>
        <p><strong>Published:</strong> {{ $post->published }}</p>
        <br>
        <br>
        @foreach ($post->comments as $comment)
            <p><strong>Comments:</strong> {{ $comment->content }}</p>
        @endforeach
</x-layout>
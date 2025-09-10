<x-layout :title="$pageTitle"> 
    <h1>Blog</h1>
    @foreach ($posts as $post)
        <h2 class="text-2xl">{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <p><strong>Author:</strong> {{ $post->author }}</p>
        <p><strong>Published:</strong> {{ $post->published }}</p>
        <br>
        <br>
    @endforeach
    {{ $posts->links() }}
</x-layout>
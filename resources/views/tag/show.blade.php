<x-layout :title="$pageTitle"> 
    <h1>Tag : {{ $tag->title }}</h1>

    <h3>Related Posts</h3>
    <ul>
        @forelse ($tag->posts as $post)
            <li>
                <strong>{{ $post->title }}</strong>
                <p>{{$post->body  }}</p>
                <p>Author : {{$comment->post->author  }}</p>
                <a href="{{ route('blog.show', $comment->post_id) }}">View Full Post</a>
            </li>
        @empty
            <p>No Related Post Found For This Tag</p>    
        @endforelse
    </ul>
</x-layout>


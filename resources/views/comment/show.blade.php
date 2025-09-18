<x-layout :title="$pageTitle">
    <h2>Comment By {{ $comment->author }}</h2>
    <p>{{ $comment->content }}</p>

    @if ($comment->post)
        <h3>Related Post</h3>
        <ul>
            <li>
                <strong>{{ $comment->post->title }}</strong>
                <p>{{ $comment->post->body }}</p>
                <p>{{ $comment->post->author }}</p>
                <a href="{{ route('blog.show', $comment->post_id) }}">View Full Post</a>
            </li>
        </ul>
    @else
        <p>No Related Post Found For This Comment</p>
    @endif
</x-layout>
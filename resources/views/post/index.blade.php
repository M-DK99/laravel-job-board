<x-layout :title="$pageTitle">
    @if (session('success'))
    <div class="mt-4 text-sm text-green-600">
        {{ session('success') }}
    </div>
    @endif

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href='/blog/create'
            class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</a>
    </div>
    @foreach ($posts as $post)
    <div class="flex justify-between items-center border border-gray-200 px-4 py-6 my-2">
        <div>
            <h2 class="text-2xl"><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h2>
            <p><strong>Author:</strong> {{ $post->author }}</p>
            <p><strong>Published:</strong> {{ $post->published }}</p>
        </div>
        <div>
            <a class="text-yellow-500 hover:text-gray-500" href="/blog/{{ $post->id }}/edit">Edit</a>
            <form action="/blog/{{ $post->id }}" method="POST" onsubmit="return confirm('Are You Sure? ')">
                @csrf
                @method("DELETE")
                <button class="text-red-500 hover:text-gray-500">Delete</button>
            </form>
        </div>
    </div>
    @endforeach
    {{ $posts->links() }}
</x-layout>
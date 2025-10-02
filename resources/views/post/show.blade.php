<x-layout :title="$pageTitle">
    <h1>Blog {{ $post->id }}</h1>
    <h2 class="text-2xl">{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <p><strong>Author:</strong> {{ $post->author }}</p>
    <p><strong>Published:</strong> {{ $post->published }}</p>

    <ul class="mt-6 space-y-6">
        
        @foreach ($post->comments as $comment)
        <li class="p-4 bg-gray-100 rounded-md shadow-sm">
            <p class="text-gray-800">{{ $comment->content }}</p>
            <span class="mt-1 text-sm text-gray-600">- {{ $comment->author }}</span>
        </li>
        @endforeach
    </ul>


    <div class="border border-gray-300 px-3 py-2 mt-2">
        <form action="/comment" method="POST" class="mt-8">

            @csrf
            <input type="hidden" name="post_id" value="{{ $post->id }}">

            <div class="space-y-6">
                <div>
                    <label for="author" class="block text-sm font-medium text-gray-900">Your Name</label>
                    <div class="mt-2">
                        <input type="text" name="author" id="author" value="{{ old('author') }}"
                            class="{{ $errors->has('author') ? 'outline-red-500' : 'outline-gray-300' }} w-full border border-gray-300 p-2"
                            placeholder="Your Name">
                    </div>

                    @error('author')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                </div>
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-900">Your Comment</label>
                    <div class="mt-2">
                        <textarea name="content" rows="4" id="content"
                            class="{{ $errors->has('content') ? 'outline-red-500' : 'outline-gray-300' }} w-full border border-gray-300 p-2"
                            placeholder="Add a comment...">{{ old('content') }}</textarea>
                    </div>

                    @error('content')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                </div>
            </div>

            <div>
                <button type="submit" 
                    class="mt-2 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Comment</button>
            </div>
        </form>
    </div>
</x-layout>
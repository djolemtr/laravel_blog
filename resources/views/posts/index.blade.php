@extends('layouts.app')

@section('content')
    <h2>All Posts</h2>
    @foreach ($posts as $post)
        <div>
            <h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>
            <p>{{ Str::limit($post->content, 100) }}</p>
            <small>Posted by {{ $post->user->name }} on {{ $post->created_at->format('d M Y') }}</small>
            <br>
            <a href="{{ route('posts.edit', $post->id) }}">Edit</a> |
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </div>
    @endforeach

    <a href="{{ route('posts.create') }}">Create New Post</a>
@endsection


@extends('layouts.app')

@section('content')
    <h2>Create New Post</h2>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <button type="submit">Create Post</button>
    </form>
    <a href="{{ route('posts.index') }}">Back to Posts</a>
@endsection


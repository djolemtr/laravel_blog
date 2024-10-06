@extends('layouts.app')

@section('content')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <small>Posted by {{ $post->user->name }} on {{ $post->created_at->format('d M Y') }}</small>

    <h3>Comments:</h3>
    <ul>
        @foreach($post->comments as $comment)
            <li>
                <strong>{{ $comment->user->name ?? 'Anonymous' }}:</strong> 
                {{ $comment->content }}
            </li>
        @endforeach
    </ul>

    <h4>Add a Comment</h4>
    <form action="{{ route('posts.comments.store', $post->id) }}" method="POST">
        @csrf
        <div>
            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment" required></textarea>
        </div>
        <button type="submit">Add Comment</button>
    </form>

    <a href="{{ route('posts.index') }}">Back to Posts</a>
@endsection


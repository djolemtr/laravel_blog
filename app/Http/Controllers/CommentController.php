<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function store(Request $request, $postId)
    {

        $request->validate([
            'content' => 'required|string|max:1000',
        ]);


        Comment::create([
            'post_id' => $postId, 
            'user_id' => Auth::id(), 
            'content' => $request->content,
        ]);


        return redirect()->route('posts.show', $postId)->with('success', 'Comment added successfully.');
    }


}


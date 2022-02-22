<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['user_name' => 'required|string', 'user_comment' => 'required|string', 'link_id' => 'required|integer']);

        $comment = Comment::create($request->all());

        return response('comment saved sucessfully');
    }


    public function update(Comment $comment, Request $request)
    {
        $request->validate(['status' => 'required|integer']);

        $comment->update(['status' => $request->input('status')]);

        return response('comment saved sucessfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentController extends Controller
{

    public function show($commentId)
    {
        $comment = Comment::where('id', $commentId)->with('category')->first();
        // dd($comment);
        return view('comments.show', compact('comment'));
    }

    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->comment = $request->get('comment');
        $comment->category_id = $request->get('category_id');
        $comment->save();
        return redirect()->route('categories.show', $comment->category_id);
    }

}

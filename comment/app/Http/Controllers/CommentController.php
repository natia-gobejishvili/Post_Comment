<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Post;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->all();
        $request->validate([
            'body'=>'required',
            'author'=>'required',
        ]);

        $input['user_id'] = auth()->user()->id;
        Comment::create($input);
        
        return back();
    }
}

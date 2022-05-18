<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function index()
    {
        // $data['comments'] = Comment::where('user_id', Auth::id())->latest()->get();
        // return view('frontend.pages.single', $data);
        $data['title'] = __('comments');
        $data['comments'] = Comment::all();
        return view('backend.pages.comment.index', $data);
    }
    public function show($id)
    {
        //
    }
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comment.index')->with('message', 'Message deleted successfull!!');
    }
}

<?php

namespace App\Http\Controllers\frontend;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use App\Http\Requests\ContactRequest;

class PageController extends Controller
{
    public function home()
    {
        $data['title']     =__("home");
        $data['posts']     =Post::latest()->paginate(6);
        $data['categories']=Category::latest()->get();
        $data['tags'] = Tag::latest()->get();
        return view('frontend.pages.home', $data);
    }

    public function about()
    {
        $data['title']     =__("about");
        return view('frontend.pages.about', $data);
    }
    public function blog()
    {
        $data['title']     =__("blog");
        return view('frontend.pages.blog', $data);
    }
    public function contactUs()
    {
        $data['title']     =__("Contact");
        return view('frontend.pages.contact', $data);
    }

    public function login()
    {
        $data['title']     =__("login");
        return view('auth.login', $data);
    }

    public function single($id)
    {
        $data['title']     =__("single");
        $data['post'] = Post::where('id',$id)->first();
        $data['comments'] = Comment::where('user_id', Auth::id())->latest()->get();
        return view('frontend.pages.single', $data);
    }

    public function viewcategory($id)
    {
        $data['category'] = Category::where('id', $id)->first();
        if($data['category'])
        {
            $data['title']     =__("viewcategory");
            $data['posts'] = Post::where('cat_id', $data['category']->id)->get();
            return view('frontend.pages.categorypage', $data);
        }
        else{
            return redirect()->back();
        }
    }

    public function viewtag($id)
    {
        $data['tag'] = Tag::where('id', $id)->first();
        if($data['tag'])
        {
            $data['title']     =__("viewtag");
            $data['posts'] = $data['tag']->posts()->get();
            return view('frontend.pages.tagpage', $data);
        }
        else{
            return redirect()->back();
        }

    }
    public function sendMessage(ContactRequest $request)
    {
        $contact = Contact::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ]);
        if(empty($contact)){
            return redirect()->back();
        }
        return redirect()->route('contact-us')->with('message', 'Message send succesfull!!');
    }
    public function chatMessage(CommentRequest $request, $post)
    {
        $comment = Comment::create([
            'comment' => $request->get('comment'),
            'post_id' => $post,
            'user_id' => Auth::id(),
        ]);
        if ($comment) {
            return redirect()->back();
        }
    }
}

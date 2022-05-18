<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $data['title'] = __('posts');
        $data['posts'] = Post::with('category')->latest()->paginate();
        return view('backend.pages.posts.index', $data);
    }

    public function create()
    {
        $data['title'] = __('posts/create');
        $data['categories'] = Category::select('id','name')->get();
        $data['tags'] = Tag::all();
        //$data['categories'] = Category::pluck('name','id');
        //dd($data['categories']);
        return view('backend.pages.posts.create', $data);
    }

    public function store(PostRequest $request)
    {
        $path = '';
        if($request->hasFile("image")){
            $path = $request->file("image")->store('images/posts');
        }

        $post = Post::create([
            'cat_id' => $request->get('cat_id'),
            'tag_id' => $request->get('tag_id'),
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'image' => $path
        ]);
        $post->tags()->attach($request->tags);

        if(empty($post)){
            return redirect()->back();
        }
        return redirect()->route('posts.index')->with('message', 'Posts created successfull!!');
    }

    public function edit(Post $post)
    {
        $data['title'] = __('posts/edit');
        $data['post'] = $post;
        $data['tags'] = Tag::all();
        return view('backend.pages.posts.edit',$data);
    }

    public function update(PostRequest $request, Post $post)
    {
        $path = '';
        if($post->image){
            Storage::delete($post->image);
        }
        if($request->hasFile("image")){
            $path = $request->file("image")->store('images/posts');
        }

        $params = $request->only(['cat_id','title','body']);
        $params['image'] = $path;
        if($post->update($params)) {
            $params = $post->tags()->sync($request->tags);
            return redirect()->route('posts.index')->with('message', 'Posts edited successfull!!');
        }
    }

    public function destroy(Post $post)
    {
        if( Storage::delete($post->image)){
            $post->delete();
        }
        return redirect()->route('posts.index')->with('message', 'Posts deleted successfull!!');
    }
}

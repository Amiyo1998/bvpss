<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Http\Requests\TagRequest;

class TagsController extends Controller
{
    public function index()
    {
        $data['title'] = __("tag");
        $data['tags'] = Tag::latest()->paginate();
        return view('backend.pages.tag.index', $data);
    }

    public function create()
    {
        $data['title'] = __("tag/create");
        return view('backend.pages.tag.create', $data);
    }


    public function store(TagRequest $request)
    {
        $tag = Tag::create([
            'name' => $request->get('name'),
        ]);
        if(empty($tag)){
            return redirect()->back();
        }
        return redirect()->route('tag.index')->with('message', 'Tag created succesfull!!');
    }

    public function show($id)
    {
        //
    }

    public function edit(Tag $tag)
    {
        $data['title'] = __("tag/edit");
        $data['tag'] = $tag;
        return view('backend.pages.tag.edit', $data);
    }

    public function update(TagRequest $request, Tag $tag)
    {
        $params = $request->only(['name']);
        if($tag->update($params)){
            return redirect()->route('tag.index')->with('message', 'Tag edited succesfull!!');
        }
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return redirect()->route('tag.index')->with('message', 'Tag deleted succesfull!!');
    }
}

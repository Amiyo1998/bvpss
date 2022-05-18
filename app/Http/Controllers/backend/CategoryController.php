<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use GuzzleHttp\Promise\Create;

class CategoryController extends Controller
{
    public function index()
    {
        $data['title'] = __("category");
        $data['categories'] = Category::latest()->paginate(5);
        return view('backend.pages.category.index', $data);
    }

    public function create()
    {
        $data['title'] = __("category/create");
        return view('backend.pages.category.create', $data);
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create([
            'name' => $request->get('name'),
        ]);
        if(empty($category)){
            return redirect()->back();
        }
        return redirect()->route('categories.index')->with('message', 'Category created succesfull!!');
    }

    public function show($id)
    {
       //
    }

    public function edit(Category $category)
    {
        $data['title'] = __("category/edit");
        $data['category'] = $category;
        return view('backend.pages.category.edit', $data);
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $params = $request->only(['name']);
        if($category->update($params)){
            return redirect()->route('categories.index')->with('message', 'Category edited succesfull!!');
        }
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('message', 'Category deleted succesfull!!');
    }
}

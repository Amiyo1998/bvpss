<?php

namespace App\Http\Controllers\backend;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $data['postcount'] = Post::all()->count();
        $data['categorycount'] = Category::all()->count();
        $data['tagcount'] = Tag::all()->count();
        $data['usercount'] = User::all()->count();
        return view('dashboard', $data);
    }
}

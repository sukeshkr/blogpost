<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('search');
    }
    public function searchResult(Request $request)
    {
        $validated = $request->validate([
            'search' =>'required',

        ]);
        $search = $request->search;

        $posts = Post::where('title', 'LIKE', "%{$search}%")
                        ->orWhere('content', 'LIKE', "%{$search}%")
                        ->get();

        return view('search-results',compact('posts'));
    }
}

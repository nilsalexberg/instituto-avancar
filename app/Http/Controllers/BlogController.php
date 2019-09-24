<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class BlogController extends Controller
{
    public function index(Request $request) {
        $posts = DB::table('posts')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('blog.index', [
            'posts' => $posts,
            'page' => $request->page ?? 1
        ]);
    }

    public function post(Request $request, $slug) {
        $id = explode('-', $slug)[0];
        $post = Post::find($id);

        $posts = DB::table('posts')
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get();

        return view('blog.post', [
            'post' => $post,
            'posts' => $posts
        ]);
    }
}

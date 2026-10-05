<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class PostController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('can:update,post', only: ['edit']),
        ];
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
}

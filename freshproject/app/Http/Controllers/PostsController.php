<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            'my-first-post' => "This is my first blog post",
            'my-second-post' => "This is my second post"
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, "sorry that page wasn't found");
        }

        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}

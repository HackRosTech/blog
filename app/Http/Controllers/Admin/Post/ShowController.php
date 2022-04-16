<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }
}

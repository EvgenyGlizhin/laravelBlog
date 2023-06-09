<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use function dd;

class ShowController extends BaseController
{
    public function __invoke(Post $post)
    {

        return view('admin.posts.show', compact('post'));
    }
}

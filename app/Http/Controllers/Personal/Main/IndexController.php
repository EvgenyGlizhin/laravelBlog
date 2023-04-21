<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data['likePostsCount'] = auth()->user()->LikedPosts->count();
        $data['comments'] = auth()->user()->comments->count();
        return view('personal.main.index', compact('data'));
    }
}

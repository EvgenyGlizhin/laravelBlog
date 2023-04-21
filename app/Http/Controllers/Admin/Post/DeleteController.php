<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use function dd;

class DeleteController extends BaseController
{
    public function __invoke(Post $post)
    {
        $post['previewImagePath'] = public_path('storage/' . $post->preview_image);
        $post['mainImagePath'] = public_path('storage/' . $post->main_image);
        if(file_exists($post['previewImagePath'])){
            unlink($post['previewImagePath']);
        }
        if(file_exists($post['mainImagePath'])){
            unlink($post['mainImagePath']);
        }
        $post->delete();
        return redirect()->route('admin.post.index');
    }
}

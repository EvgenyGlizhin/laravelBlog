<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use function dd;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {

        return view('admin.user.show', compact('user'));
    }
}

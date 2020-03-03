<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index()
    {
        // テンプレート「post/index.blade.php」を表示します。
        return view('like/likeindex');
    }
}

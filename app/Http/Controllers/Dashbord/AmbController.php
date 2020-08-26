<?php

namespace App\Http\Controllers\Dashbord;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AmbController extends Controller
{
    public function index() {

        $post = Post::all();
        return view('index', compact('post'));
    }
}

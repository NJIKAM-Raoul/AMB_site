<?php

namespace App\Http\Controllers\Dashbord;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashbordController extends Controller
{
    function index () {

        $post = Post::all();
        return view('dashbord.dasbord')->with('post', $post);
    }

    public function ajouter (Request $request) 
    {

   
        $request->validate([

            'contenu' => ['required', 'string'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
    
        $request->image->move(public_path('images'), $imageName);

        $post = Post::create([
            'contenu' => $request->contenu,
            'image' => $imageName,
        ]);

        if ($post) {
            return view('dashbord.dasbord')->with('success', 'Image Ajouté avec Success');
        }else{
            return view('dashbord.dasbord')->with('wraning', 'Erreure d Ajout');
        }

    }
}

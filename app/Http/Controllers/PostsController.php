<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        $data= request()->validate([
           'caption'=>'required',
           'image'=>['required','image'],
        ]);

//\App\Models\Post::create($data);
        auth()->user()->posts()->create($data);
        dd(request()->all());
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function home(){
        return view('welcome');
    }

    public function contactpage(){
        return view('contact');
    }

    public function createBlog(){
        return view('create-blog');
    }

    public function Blog(){
        $data['blogs'] = Blog::all();
        return view('welcome', $data);
    }
}

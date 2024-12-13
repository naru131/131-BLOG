<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function Blog()
    {
        return view ('front.blogs');
    }

    public function blogPost($id)
    {
        return view ('front.blog-post');
    }
}

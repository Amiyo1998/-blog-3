<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {  
        $data['posts'] = Post::paginate(3);
        return view('frontend.pages.home', $data);
    }
    public function about()
    {  
        return view('frontend.pages.about');
    }
    public function blog()
    {  
        return view('frontend.pages.blog');
    }
    public function contact()
    {  
        return view('frontend.pages.contact');
    }
}

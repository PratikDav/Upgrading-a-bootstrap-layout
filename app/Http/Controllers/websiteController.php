<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function home(){
        $title = "Home";
        $data = compact('title');
        return view('website.pages.home')->with($data);
    }

    public function about(){
        $title = "About";
        $data = compact('title');
        return view('website.pages.about')->with($data);
    }

    public function service(){
        $title = "Service";
        $data = compact('title');
        return view('website.pages.service')->with($data);
    }

    public function contact(){
        $title = "Contact";
        $data = compact('title');
        return view('website.pages.contact')->with($data);
    }
}

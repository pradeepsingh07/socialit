<?php

namespace App\Http\Controllers\frontController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function blog(){
        return view('blog');
    }

    public function career(){
        return view('career');
    }

    public function work(){
        return view('work');
    }

    public function workurl($workurl){
     return view('workshow',compact('workurl'));        
    }
    public function blogurl($blogurl){
     return view('blogshow',compact('blogurl'));
    }
    

    public function contact(){
        return view('contact');
    }

    public function webdevelopment(){
        return view('web-development');
    }
}

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
    public function digitalmarketing(){
        return view('digital-marketing');  
    }
    public function smm(){
        return view('social-media-marketing');
    }
    public function ad(){
        return view('app-development');
    }
    public function uiux(){
        return view('ui-ux-design');
    }
    public function gd(){
        return view('graphic-design');
    }
    public function seo(){
        return view('seo');
    }
    public function ba(){
        return view('ba');
    }
}

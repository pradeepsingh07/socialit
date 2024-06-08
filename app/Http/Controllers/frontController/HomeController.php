<?php

namespace App\Http\Controllers\frontController;
use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use App\Models\CareerModel;
use App\Models\WorkcategoryModel;
use App\Models\WorkModel;
use Illuminate\Http\Request;


class HomeController extends Controller
{
     public function index(){
        $blogs = BlogModel::limit(10)->latest('created_at')->get();
        return view('index',compact('blogs'));
     }
     public function blog(Request $request){              
        $datas = BlogModel::with('blogdata')->latest('created_at')  
        ->paginate(1);       
        return view('blog',compact('datas'));
     }

     public function career(){
        $datas = CareerModel::where('status','active')->get();
        return view('career',compact('datas'));
     }
    public function work(){
        $datas = WorkcategoryModel::orderBy('order','ASC')->get();
        $catdatas = WorkModel::with('withdata')->get();
        return view('work',compact('datas','catdatas'));
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
    public function sem(){
        return view('sem');
    }
    public function ba(){
        return view('ba');
    }
    public function gmb(){
        return view('gmb');
    }
    public function a(){
        return view('a');
    }
    public function ecd(){
        return view('ecd');
    }
    public function l(){
        return view('l');
    }
    public function pm(){
        return view('pm');
    }
    public function db(){
        return view('db');
    }
    public function mg(){
        return view('mg');
    }
    public function services(){
        return view('services');
    }
    
    //  Work 
    public function workurl($workurl){
        $data = WorkModel::where('slug',$workurl)->first();
        return view('workshow',compact('data'));        
    }

     //  Blog  
     public function blogurl($blogurl){        
        $count = BlogModel::where('slug',$blogurl)->count();
        if($count == 1){
             $data = BlogModel::with('blogdata')->where('slug',$blogurl)->first();
             $cate_id = $data->blogdata->first()->id;
             $recentposts = BlogModel::with('blogdata')->whereNot('slug',$blogurl)
             ->where('c_id',$cate_id)->latest('created_at')->get();                         
            return view('blogshow',compact('data','recentposts'));
        }else{
            abort('404');
        } 
     }
}

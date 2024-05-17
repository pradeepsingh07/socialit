<?php

namespace App\Http\Controllers\backcontroller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogcategoryModel;

class BlogcategoryController extends Controller
{
    
    public function index()
    {
        return view('admin/blog-category/index');
    }

    public function getdata(Request $request){
        if($request->ajax()){    
            $start = $request->get('start'); 
            $length = $request->get('length');
            $searcharr = $request->get('search');
            $search =  $searcharr['value'];         
            $recordsTotal = BlogcategoryModel::count();   
            $filterData = BlogcategoryModel::count();  
            $datas = BlogcategoryModel::limit($length)->offset($start)->latest('id','DESC')->get();
            $jsondata=[];
            foreach($datas as $key=>$data){                
                $jsondata[]=array(
                   'index'=>$key+1,
                   'c_name'=>$data->category_name,           
                   'action'=>'<a onclick="deletedata('.$data->id.')" href="javascript:void(0);" class="btn fw-medium f-12 badge bg-danger"><i class="fas fa-trash-alt"></i></a>'
                ); 
            } 
            return response()->json([
                "draw"=>$request->draw,
                "recordsTotal" =>  $recordsTotal ,
                "recordsFiltered" => $filterData,
                "data" => $jsondata
            ]);
        }

    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(string $id)
    {
        //
    }

   
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function delete(Request $request)
    {
        BlogcategoryModel::where('id',$request->id)->delete();
        return response()->json([
            'code'=>'200'
        ]);
    }
}

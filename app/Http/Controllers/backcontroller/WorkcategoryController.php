<?php

namespace App\Http\Controllers\backcontroller;

use App\Http\Controllers\Controller;
use App\Models\WorkcategoryModel;
use Illuminate\Http\Request;

class WorkcategoryController extends Controller
{
   
    public function index()
    {
        return view('admin/work-category/index');
    }

    public function getdata(Request $request){
        if($request->ajax()){    
            $start = $request->get('start'); 
            $length = $request->get('length');
            $searcharr = $request->get('search');
            $search =  $searcharr['value'];         
            $recordsTotal = WorkcategoryModel::count();   
            $filterData = WorkcategoryModel::when($search, function($query, $search) {
                return $query->where('category_name', 'like', '%' . $search . '%');
            })->count();  
            $datas = WorkcategoryModel::limit($length)
            ->offset($start)
            ->when($search, function($query, $search) {
                return $query->where('category_name', 'like', '%' . $search . '%');
            })
            ->orderBy('id', 'DESC')
            ->get();
            $jsondata=[];
            foreach($datas as $key=>$data){                
                $jsondata[]=array(
                   'index'=>$key+1,
                   'c_name'=>$data->category_name,           
                   'action'=>'<a href="'.route('blog-category.edit',$data->id).'" class="py-2 px-2 btn fw-medium f-12 badge bg-success"><i class="fas fa-edit"></i></a> <a onclick="deletedata('.$data->id.')" href="javascript:void(0);" class="py-2 px-2 btn fw-medium f-12 badge bg-danger"><i class="fas fa-trash-alt"></i></a>'
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

   
    public function destroy(string $id)
    {
        //
    }
}

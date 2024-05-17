<?php

namespace App\Http\Controllers\backcontroller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TestimonialModel;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\Laravel\Facades\Image;



class TestimonialController extends Controller
{
    
    public function index()
    {
        return view('/admin/testimonial/index');
    }

    public function getdata(Request $request){   
          
        if($request->ajax()){    
            $start = $request->get('start'); 
            $length = $request->get('length');
            $searcharr = $request->get('search');
            $search =  $searcharr['value'];         
            $recordsTotal = TestimonialModel::count();   
            $filterData = TestimonialModel::count();  
            $datas = TestimonialModel::limit($length)->offset($start)->get();
            $jsondata=[];
            foreach($datas as $key=>$data){                
                $jsondata[]=array(
                   'index'=>$key+1,
                   'name'=>$data->name,
                   'image'=> '<img id="img" class="img-fluid" src="'.asset('/storage/upload/'.$data->image).'"/>',
                   'rating'=>$data->rating,
                   'review'=>$data->review,
                   'status'=>$data->status == 'active' ? '<a href="javascript:void(0);" class="btn fw-medium f-12 badge bg-success">Active</a>' : '<a href="" class="btn fw-medium f-12 badge bg-danger">Deactive</a>',
                   'action'=>'<a href="javascript:void(0);" class="btn fw-medium f-12 badge bg-success"><i class="fas fa-edit"></i></a> <a onclick="deletedata('.$data->id.')" href="javascript:void(0);" class="btn fw-medium f-12 badge bg-danger"><i class="fas fa-trash-alt"></i></a>'
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
        return view('/admin/testimonial/create');
    }
   
    public function store(Request $request)
    {
        if($request->ajax()){
            $validation = validator::make($request->all(),[
                 'c_name'=>'required | string',
                 'c_rating'=>'required',
                 'c_image'=>'required',
                 'c_review'=>'required'
             ]);

             if($validation->fails()){
                return response()->json([
                    'code'=>'400',
                    'message'=>$validation->errors()
                ]);
             }else{ 
                $filename = 'review'.rand(100000,999999).'.'.$request->file("c_image")->getClientOriginalExtension();
                $request->file("c_image")->storeAs("public/upload",$filename);
                TestimonialModel::create([
                    'name'=>$request->c_name,
                    'image'=>$filename,
                    'rating'=>$request->c_rating,
                    'review'=>$request->c_review,
                ]);
                session()->flash('type','success');
                session()->flash('message','Successfully Created');
                return response()->json([
                    'code'=>'200'
                ]);
             }
        }
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

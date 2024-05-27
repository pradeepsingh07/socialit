<?php

namespace App\Http\Controllers\backcontroller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\TestimonialModel;
use Illuminate\Support\Facades\Storage;



class TestimonialController extends Controller
{
    
    public function index(){
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
                   'status'=>$data->status == 'active' ? '<a href="javascript:void(0);" onclick="status('.$data->id.')" class="btn fw-medium f-12 badge bg-success">Active</a>' : '<a onclick="status('.$data->id.')" href="javascirpt:void(0);" class="btn fw-medium f-12 badge bg-danger">Deactive</a>',
                   'action'=>'<a href="'.route('testimonial.edit',$data->id).'" class="py-2 px-2 btn fw-medium f-12 badge bg-success"><i class="fas fa-edit"></i></a> <a onclick="deletedata('.$data->id.')" href="javascript:void(0);" class="py-2 px-2 btn fw-medium f-12 badge bg-danger"><i class="fas fa-trash-alt"></i></a>'
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
   
    public function create(){
        return view('/admin/testimonial/create');
    }
   
    public function store(Request $request){

        if($request->ajax()){
            $validation = validator::make($request->all(),[
                 'c_name'=>'required | string',
                 'c_rating'=>'required',
                 'c_image'=>'required | max:1024 | mimes:webp',
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

    public function status(Request $request){

        if($request->ajax()){
            $data = TestimonialModel::where('id',$request->id)->select('id','status')->first();
            $newStatus = $data->status === 'active' ? 'deactive' : 'active';
            TestimonialModel::where('id',$request->id)->update([
                'status'=>$newStatus
            ]);
            return response()->json([
                'code'=>'200'
            ]);           
         }                
      }     

    public function edit(string $id)
    {
       $data=TestimonialModel::where('id',$id)->first();
       return view('admin/testimonial/edit',compact('data'));
    }

    public function update(Request $request, string $id)
    {         
        if($request->ajax()){
            $validation = validator::make($request->all(),[
                 'c_name'=>'required | string',
                 'c_rating'=>'required',
                 'c_review'=>'required'
             ]);

             if($validation->fails()){
                return response()->json([
                    'code'=>'400',
                    'message'=>$validation->errors()
                ]);
             }else{ 
                if($request->c_image != ""){
                  $filename = 'review'.rand(100000,999999).'.'.$request->file("c_image")->getClientOriginalExtension();
                  $request->file("c_image")->storeAs("public/upload",$filename);
                }
                $data=TestimonialModel::select('image')->where('id',$id)->first();
                $image = $request->c_image == "" ? $data->image : $filename;
                
                if($request->c_image != ""){
                   Storage::delete("public/upload/".$data->image);
                }
                TestimonialModel::where('id',$id)->update([
                    'name'=>$request->c_name,  
                    'image'=>$image,               
                    'rating'=>$request->c_rating,                  
                    'review'=>$request->c_review,
                ]);
                session()->flash('type','success');
                session()->flash('message','Successfully Updated');
                return response()->json([
                    'code'=>'200'
                ]);
             }
        }
    }    
    public function delete(Request $request){
        TestimonialModel::where('id',$request->id)->delete();
        return response()->json([
            'code'=>'200'
        ]);
    }
}

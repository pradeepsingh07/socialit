<?php

namespace App\Http\Controllers\backcontroller;
use App\Http\Controllers\Controller;
use App\Models\WorkcategoryModel;
use App\Models\WorkModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class WorkController extends Controller
{
    
    public function index()
    {
       return view('admin/work/index');
    }
 
    public function create(){
        $datas = WorkcategoryModel::get();
        return view('admin/work/create',compact('datas'));
    }
    public function getdata(Request $request){          
        if($request->ajax()){    
            $start = $request->get('start'); 
            $length = $request->get('length');
            $searcharr = $request->get('search');
            $search =  $searcharr['value'];         
            $recordsTotal = WorkModel::count();   

            $datas = WorkModel::with('withdata')->where(function ($query) use ($search) {
                $query->where('slug', 'like', '%' . $search . '%')
                    ->orWhereHas('withdata', function ($query) use ($search) {
                        $query->where('category_name', 'like', '%' . $search . '%');
                    });
            })->limit($length)->offset($start)->get();

            $filterData = WorkModel::with('withdata')->where(function ($query) use ($search) {
                $query->where('slug', 'like', '%' . $search . '%')
                    ->orWhereHas('withdata', function ($query) use ($search) {
                        $query->where('category_name', 'like', '%' . $search . '%');
                    });
            })->count();            
            $jsondata=[];
            foreach($datas as $key=>$data){                 
                $cat_name="";
                 foreach($data->withdata as $cat_name){
                    $cat_name=$cat_name->category_name;
                 }
                $jsondata[]=array(
                   'index'=>$key+1,
                   'category_name'=>$cat_name,
                   'title'=>$data->title,
                   'slug'=>"<a target='target' href=".route('front.workurl',['workurl'=>$data->slug]).">$data->slug</a>",
                   'showimages'=>'<button onclick="showimages('.$data->id.')" class="btn badge bg-primary f-10 font-weight-normal" type="button" " data-bs-toggle="offcanvas" data-bs-target="#showimg" aria-controls="showimg">Show Images</button>',
                   'action'=>'<a href="'.route('blog.edit',$data->id).'" class="py-2 px-2 btn fw-medium f-12 badge bg-success"><i class="fas fa-edit"></i></a> <a onclick="deletedata('.$data->id.')" href="javascript:void(0);" class="py-2 px-2 btn fw-medium f-12 badge bg-danger"><i class="fas fa-trash-alt"></i></a>'
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
   
     public function store(Request $request)
     {
        if($request->ajax()){    
            $validation = Validator::make($request->all(),[
                'category'=>'required | numeric',   
                'title'=>'required | string',  
                't_image'=>'required',
                'content'=>'required', 
            ]);
            if($validation->fails()){
                return response()->json([
                    'code'=>'400',
                    'message'=>$validation->errors(),
                ]);
            }else{
                $filename = 'work-thumbnail'.rand(100000,999999).'.'.$request->file("t_image")->getClientOriginalExtension();
                $request->file("t_image")->storeAs("public/upload/work",$filename);                 
                $newuploadfile="";
                foreach($request->workimages as $wimages){
                    $filenamework= 'work'.rand(100000,999999).'.'.$wimages->getClientOriginalExtension();
                    $wimages->storeAs("public/upload/work",$filenamework);
                    $newuploadfile.= $filenamework." ";
                }          

                $imagesworkarray=explode(" ",rtrim($newuploadfile));
                WorkModel::create([
                    'c_id'=>$request->category,
                    'title'=>$request->title,
                    'slug'=> Str::slug($request->title),
                    'thumbnail_image'=> $filename,
                    'content'=>$request->content,
                    'work_images'=>$imagesworkarray,
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {
      if($request->ajax()){
        $datas = WorkModel::where('id',$request->id)->first();
        foreach($datas->work_images as $data){
             $filePath = "public/upload/work/{$data}";
             Storage::delete($filePath); 
        }
        $filePath = "public/upload/work/{$datas->thumbnail_image}";
        Storage::delete($filePath); 
        WorkModel::where('id',$request->id)->delete();
        session()->flash('type','success');
        session()->flash('message','Successfully Created');
        return response()->json([
            'code'=>'200'
        ]);        
      }  
       
    }

    public function getimages(Request $request){

        if($request->ajax()){         
            $datas = WorkModel::select('id','title','work_images')->where('id',$request->id)->first();
            $html =  view('admin.backlayout.show-images',compact('datas'))->render();
            return response()->json([
                'html'=>$html,
                'message'=>'success'
            ]);            

        }
    }
}

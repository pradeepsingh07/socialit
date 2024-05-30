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

            $datas = WorkModel::select('id','c_id','slug','thumbnail_image','title')->with('withdata')->where(function ($query) use ($search) {
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
                   'action'=>'<a href="'.route('work.edit',$data->id).'" class="py-2 px-2 btn fw-medium f-12 badge bg-success"><i class="fas fa-edit"></i></a> <a onclick="deletedata('.$data->id.')" href="javascript:void(0);" class="py-2 px-2 btn fw-medium f-12 badge bg-danger"><i class="fas fa-trash-alt"></i></a>'
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
                $thumbnail = $request->file('t_image');
                $filename = 'work-thumbnail' . rand(100000, 999999) . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->storeAs('public/upload/work', $filename);
                $workImages = [];
                foreach ($request->workimages as $image) {
                    $imageFilename = 'work' . rand(100000, 999999) . '.' . $image->getClientOriginalExtension();
                    $image->storeAs('public/upload/work', $imageFilename);
                    $workImages[] = $imageFilename;
                }
                WorkModel::create([
                    'c_id' => $request->category,
                    'title' => $request->title,
                    'slug' => Str::slug($request->title),
                    'thumbnail_image' => $filename,
                    'content' => $request->content,
                    'work_images' => $workImages,
                ]);
                session()->flash('type', 'success');
                session()->flash('message', 'Successfully Created');
                return response()->json(['code' => '200']);
            }
        }
     }
   
     public function edit(string $id){
        $datas = WorkcategoryModel::get();
        $workdata = WorkModel::where('id',$id)->first();
        return view('admin/work/edit',compact('datas','workdata'));
     }

   
     public function update(Request $request, string $id){
       
         $workImages = [];
            if($request->workimages != ""){
             foreach ($request->workimages as $image) {
                $imageFilename = 'work' . rand(100000, 999999) . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/upload/work', $imageFilename);
                $workImages[] = $imageFilename;
             }
           }
           if(!empty($workImages) && !empty($request->image_data)){
              $work_images_files= array_merge($request->image_data, $workImages);
           }elseif(!empty($workImages)){
              $work_images_files= $workImages;
           }elseif(!empty($request->image_data)){
             $work_images_files= $request->image_data;
            }else{
                $work_images_files=[];
            }
                
         if($request->ajax()){    
            $validation = Validator::make($request->all(),[
                'category'=>'required | numeric',   
                'title'=>'required | string',
                'content'=>'required', 
            ]);
            if($validation->fails()){
                return response()->json([
                    'code'=>'400',
                    'message'=>$validation->errors(),
                ]);
            }else{            
                $work = WorkModel::find($id);
                if (!$work) {
                    return response()->json(['code' => '404', 'message' => 'Work not found'], 404);
                }            
                $filename = $work->thumbnail_image;
                 if ($request->hasFile('t_image')) {
                     $filename = 'work-thumbnail' . rand(100000, 999999) . '.' . $request->file('t_image')->getClientOriginalExtension();
                     $request->file('t_image')->storeAs('public/upload/work', $filename);
                     if ($work->thumbnail_image) {
                        Storage::delete('public/upload/work/' . $work->thumbnail_image);
                     }
                 }
                $work->update([
                    'c_id' => $request->category,
                    'title' => $request->title,
                    'slug' => Str::slug($request->title),
                    'thumbnail_image' => $filename,
                    'content' => $request->content,
                    'work_images'=>$work_images_files,
                ]);            
                session()->flash('type', 'success');
                session()->flash('message', 'Successfully Updated');            
                return response()->json(['code' => '200']);
            } 
        }

    }
    
    public function delete(Request $request)
    {
        if ($request->ajax()) {
            $work = WorkModel::find($request->id);    
            if (!$work) {
                return response()->json(['code' => '404', 'message' => 'Work not found'], 404);
            }
            foreach ($work->work_images as $image) {
                Storage::delete("public/upload/work/{$image}");
            }
            Storage::delete("public/upload/work/{$work->thumbnail_image}");
            $work->delete();    
            session()->flash('type', 'success');
            session()->flash('message', 'Successfully Deleted');    
            return response()->json(['code' => '200']);
        }    
        return response()->json(['code' => '400', 'message' => 'Invalid request'], 400);
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

     public function removeimg(Request $request){
      Storage::delete("public/upload/work/{$request->img}");
      return response()->json(['code' => '200', 'message' => 'Remove Image'], 200);
     }
      
}

<?php

namespace App\Http\Controllers\backcontroller;
use App\Http\Controllers\Controller;
use App\Models\BlogcategoryModel;
use App\Models\BlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DOMDocument;


class BlogController extends Controller
{
  
    public function index(){
       return view('admin/blog/index');
    }
  
    public function create(){
        $datas = BlogcategoryModel::select('id','category_name')
        ->latest('id','DESC')->get();
        return view('admin/blog/create',compact('datas'));
    }

    public function getdata(Request $request){          
        if($request->ajax()){    
            $start = $request->get('start'); 
            $length = $request->get('length');
            $searcharr = $request->get('search');
            $search =  $searcharr['value'];         
            $recordsTotal = BlogModel::count();   

            $datas = BlogModel::with('blogdata')->where(function ($query) use ($search) {
                $query->where('slug', 'like', '%' . $search . '%')
                    ->orWhereHas('blogdata', function ($query) use ($search) {
                        $query->where('category_name', 'like', '%' . $search . '%');
                    });
            })->limit($length)->offset($start)->get();

            $filterData = BlogModel::with('blogdata')->where(function ($query) use ($search) {
                $query->where('slug', 'like', '%' . $search . '%')
                    ->orWhereHas('blogdata', function ($query) use ($search) {
                        $query->where('category_name', 'like', '%' . $search . '%');
                    });
            })->count();            
            $jsondata=[];
            foreach($datas as $key=>$data){                 
                $cat_name="";
                 foreach($data->blogdata as $cat_name){
                    $cat_name=$cat_name->category_name;
                 }
                $jsondata[]=array(
                   'index'=>$key+1,
                   'category_name'=>$cat_name,
                   'slug'=>$data->slug,
                   'status'=>$data->status == 'active' ? '<a href="javascript:void(0);" onclick="status('.$data->id.')" class="btn fw-medium f-12 badge bg-success">Active</a>' : '<a onclick="status('.$data->id.')" href="javascirpt:void(0);" class="btn fw-medium f-12 badge bg-danger">Deactive</a>',
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

     public function uploadimage(Request $request){
        if($request->hasFile('file')){
        $filename = 'blog'.rand(100000,999999).'.'.$request->file("file")->getClientOriginalExtension();
        $url = $request->file("file")->storeAs("public/blog-image",$filename);
        return array('url'=>asset('storage/blog-image/'.$filename));
        }else{
            return response()->json('Something Went Wrong');
        }
     }
     public function store(Request $request){
         if($request->ajax()){    
            $validation = Validator::make($request->all(),[
                'category'=>'required | numeric',   
                'title'=>'required | string',
                'meta_d'=>'required', 
                'meta_key'=>'required', 
                't_image'=>'required | mimes:webp',
                'content'=>'required', 
            ]);
            if($validation->fails()){
                return response()->json([
                    'code'=>'400',
                    'message'=>$validation->errors(),
                ]);
            }else{
                $filename = 'blog'.rand(100000,999999).'.'.$request->file("t_image")->getClientOriginalExtension();
                $request->file("t_image")->storeAs("public/upload",$filename);
                BlogModel::create([
                    'c_id'=>$request->category,
                    'title'=>$request->title,
                    'meta_d'=>$request->meta_d,
                    'meta_key'=>$request->meta_key,
                    'slug'=> Str::slug($request->title),
                    'thumbnail_image'=> $filename,
                    'content'=>$request->content,
                ]);
                session()->flash('type','success');
                session()->flash('message','Successfully Created');
                return response()->json([
                    'code'=>'200'
                ]);
            }
         }
     }
     public function edit(string $id){  
        $cates = BlogcategoryModel::get();
        $data = BlogModel::where('id',$id)->first();
        return view('admin/blog/edit',compact('data','cates'));
     }   
    public function update(Request $request, string $id){
        if($request->ajax()){    
            $validation = Validator::make($request->all(),[
                'category'=>'required | numeric',   
                'title'=>'required | string',             
                'content'=>'required',
                't_image'=>'mimes:webp',
                
            ]);
            if($validation->fails()){
                return response()->json([
                    'code'=>'400',
                    'message'=>$validation->errors(),
                ]);
            }else{
                if($request->t_image != ""){
                    $filename = 'blog'.rand(100000,999999).'.'.$request->file("t_image")->getClientOriginalExtension();
                    $request->file("t_image")->storeAs("public/upload",$filename);
                  }
                  $data=BlogModel::select('thumbnail_image')->where('id',$id)->first();
                  $image = $request->t_image == "" ? $data->thumbnail_image : $filename;

                  if($request->t_image != ""){
                     Storage::delete("public/upload/".$data->thumbnail_image);                    
                  }
                  BlogModel::where('id',$id)->update([
                      'title'=>$request->title,  
                      'meta_d'=>$request->meta_d,
                      'meta_key'=>$request->meta_key,
                      'thumbnail_image'=>$image,
                      'slug'=> Str::slug($request->title),               
                      'content'=>$request->content,   
                      'c_id'=>$request->category,
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
        $getdata = BlogModel::select('content')
        ->where('id',$request->id)
        ->first();
        $decode_data = htmlspecialchars_decode($getdata->content);
        $dom = new DOMDocument();
        $dom->loadHTML($decode_data);
        $imgTags = $dom->getElementsByTagName('img');
        foreach ($imgTags as $imgTag) {       
            $src = $imgTag->getAttribute('src');
            $filename = pathinfo($src, PATHINFO_BASENAME);
            $filePath = "public/blog-image/{$filename}";
            Storage::delete($filePath);        
        }
        BlogModel::where('id',$request->id)->delete();
        return response()->json([
            'code'=>'200'
        ]);
    }
    public function deleteimg(Request $request){ 
        if ($request->ajax()) {
            $filePath = "public/blog-image/{$request->file}";            
            if (Storage::exists($filePath)) {
                Storage::delete($filePath);
                return response()->json(['status' => 'success', 'code' => 200]);
            }        
            return response()->json(['status' => 'error', 'message' => 'File not found', 'code' => 404], 404);
        }
    }
}

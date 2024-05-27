<?php

namespace App\Http\Controllers\backcontroller;
use App\Http\Controllers\Controller;
use App\Models\CareerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Rules\jobarray;


class CareerController extends Controller
{
   
    public function index(){
        return view('admin/career/index');
    }

    public function getdata(Request $request){
        if($request->ajax()){    
            $start = $request->get('start'); 
            $length = $request->get('length');
            $searcharr = $request->get('search');
            $search =  $searcharr['value'];         
            $recordsTotal = CareerModel::count();   
            $filterData = CareerModel::count();  
            $datas = CareerModel::limit($length)->offset($start)->orderby('id','DESC')->get();
            $jsondata=[];
            foreach($datas as $key=>$data){ 

                $job_data="";
                foreach($data->job_details as $details)
                {  
                    $job_data.= '<div> <i class="far fa-circle"></i> '.$details.'</div>';
                }
                $jsondata[]=array(
                   'index'=>$key+1,
                   'title'=>$data->title,
                   'd_name'=>$data->designation_name,
                   'job_type'=>$data->job_type,
                   'work_type'=>$data->work_type,
                   'job_deatils'=>'<button class="py-2 btn badge bg-primary fs-13 fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample'.$key.'" aria-expanded="false" aria-controls="collapseExample'.$key.'">
                      View Details
                     </button>
                     <div class="collapse border-0" id="collapseExample'.$key.'">
                    <div class="card card-body border-0 shadow-none">
                       '.$job_data.'
                    </div>
                    </div>',
                   'status'=>$data->status == 'active' ? '<a href="javascript:void(0);" onclick="status('.$data->id.')" class="btn fw-medium f-12 badge bg-success">Active</a>' : '<a onclick="status('.$data->id.')" href="javascirpt:void(0);" class="btn fw-medium f-12 badge bg-danger">Deactive</a>',
                   'action'=>'<a href="'.route('career.edit',$data->id).'" class="py-2 px-2 btn fw-medium f-12 badge bg-success"><i class="fas fa-edit"></i></a> <a onclick="deletedata('.$data->id.')" href="javascript:void(0);" class="py-2 px-2 btn fw-medium f-12 badge bg-danger"><i class="fas fa-trash-alt"></i></a>'
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
        return view('admin/career/create');
    }

    public function store(Request $request){

        if($request->ajax()){ 
            $validation = Validator::make($request->all(),[
                'title'=>'required | string',   
                'd_name'=>'required | string',  
                'job_type'=>'required | string',
                'work_from_type'=>'required | string',
            ]);

            if($validation->fails()){
                return response()->json([
                    'code'=>'400',
                    'message'=>$validation->errors(),
                ]);
            }else{
                CareerModel::create([
                    'title'=>$request->title,
                    'designation_name'=>$request->d_name,
                    'job_type'=>$request->job_type,
                    'work_type'=>$request->work_from_type,
                    'job_details'=>$request->job_details,
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
            $data = CareerModel::where('id',$request->id)->select('id','status')->first();
            $newStatus = $data->status === 'active' ? 'deactive' : 'active';
            CareerModel::where('id',$request->id)->update([
                'status'=>$newStatus
            ]);
            return response()->json([
                'code'=>'200'
            ]);           
         }                
      } 
    
    public function edit(string $id){
       $data = CareerModel::where('id',$id)->first();
       return view("admin/career/edit",compact('data'));
    }
    
    public function update(Request $request, string $id){
        if($request->ajax()){
            $validation = Validator::make($request->all(),[
                'title'=>'required | string',   
                'd_name'=>'required | string',  
                'job_type'=>'required | string',
                'work_from_type'=>'required | string', 
            ]);

            if($validation->fails()){
                return response()->json([
                    'code'=>'400',
                    'message'=>$validation->errors(),
                ]);
            }else{
                CareerModel::where('id',$id)->update([
                    'title'=>$request->title,
                    'designation_name'=>$request->d_name,
                    'job_type'=>$request->job_type,
                    'work_type'=>$request->work_from_type,
                    'job_details'=>$request->job_details,
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
        CareerModel::where('id',$request->id)->delete();
        return response()->json([
            'code'=>'200'
        ]);
    }

    public function viewform(){
        $html = view('admin/career/ajax/create')->render();
        return response()->json([
            'code'=>'200',
            'html'=>$html,
        ]);
    }

}

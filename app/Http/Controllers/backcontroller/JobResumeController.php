<?php

namespace App\Http\Controllers\backcontroller;

use App\Http\Controllers\Controller;
use App\Models\JobResumeModel;
use Illuminate\Http\Request;

class JobResumeController extends Controller
{
    public function index(){
        return view('admin/job-resume/index');
    }

    public function getdata(Request $request){

        if($request->ajax()){    
            $start = $request->get('start'); 
            $length = $request->get('length');
            $searcharr = $request->get('search');
            $search =  $searcharr['value'];         
            $recordsTotal = JobResumeModel::count();   
            $filterData = JobResumeModel::count();  
            $datas = JobResumeModel::limit($length)->offset($start)->get();
            $jsondata=[];
            foreach($datas as $key=>$data){                
                $jsondata[]=array(
                   'index'=>$key+1,
                   'name'=>$data->name,
                   'phone'=>$data->phone,
                   'email'=>'<a href="mailto:'.$data->email.'">'.$data->email.'</a>',
                   'designation'=>$data->designation,
                   'cv'=>'<a download href="'.$data->cv.'"class="btn badge bg-primary">Download CV</a>',
                   'date'=>date('d M Y - h:i a',strtotime($data->created_at)),
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

    public function delete(Request $request){
        JobResumeModel::where('id',$request->id)->delete();
        return response()->json([
            'code'=>'200'
        ]);
    }
}

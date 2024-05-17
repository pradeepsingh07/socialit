<?php

namespace App\Http\Controllers\backcontroller;

use App\Http\Controllers\Controller;
use App\Models\CareerModel;
use App\Models\ContactModel;
use App\Models\JobResumeModel;
use App\Models\TestimonialModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $testimonial= TestimonialModel::count();
        $career= CareerModel::count();
        $contact= ContactModel::count();
        $resume= JobResumeModel::count();
        return view('admin/dashboard/index',compact('testimonial','career','contact','resume'));
    }
}

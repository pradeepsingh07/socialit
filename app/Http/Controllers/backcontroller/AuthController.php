<?php

namespace App\Http\Controllers\backcontroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('admin/index');
    }
}

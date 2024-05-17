<?php

use App\Http\Controllers\frontController\HomeController;
use App\Http\Controllers\backcontroller\DashboardController;
use App\Http\Controllers\backcontroller\AuthController;
use App\Http\Controllers\backcontroller\TestimonialController;
use Illuminate\Support\Facades\Route;





Route::get('/',[HomeController::class,'index'])->name('front.index');
Route::get('/career',[HomeController::class,'career'])->name('front.career');
Route::get('/work',[HomeController::class,'work'])->name('front.work');
Route::get('/blog',[HomeController::class,'blog'])->name('front.blog');
Route::get('/contact',[HomeController::class,'contact'])->name('front.contact');
Route::get('/web-development',[HomeController::class,'webdevelopment'])->name('front.webdevelopment');
Route::get('/work/{workurl:slug}',[HomeController::class,'workurl'])->name('front.workurl');
Route::get('/blog/{blogurl:slug}',[HomeController::class,'blogurl'])->name('front.blogurl');







// ===============================================================
// ====================== Admin Routes ===========================
// ===============================================================


 Route::group(['prefix'=>'admin'],function(){

    Route::get('/',[AuthController::class,'index'])->name('back.auth');
    Route::get('dashboard',[DashboardController::class,'index'])->name('back.dashboard');
    Route::get('testimonial/getdata',[TestimonialController::class,'getdata'])->name('testimonial.getdata');
    Route::resource('testimonial',TestimonialController::class)->only([
        'index', 'create','store','edit','update'
    ]);

 
});










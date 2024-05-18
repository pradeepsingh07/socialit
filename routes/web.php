<?php

use App\Http\Controllers\frontController\HomeController;
use App\Http\Controllers\backcontroller\DashboardController;
use App\Http\Controllers\backcontroller\AuthController;
use App\Http\Controllers\backcontroller\BlogcategoryController;
use App\Http\Controllers\backcontroller\BlogController;
use App\Http\Controllers\backcontroller\TestimonialController;
use App\Http\Controllers\backcontroller\JobResumeController;
use App\Http\Controllers\backcontroller\CareerController;
use App\Http\Controllers\backcontroller\ContactController;
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
    Route::get('testimonial/status',[TestimonialController::class,'status'])->name('testimonial.status');
    Route::get('testimonial/delete',[TestimonialController::class,'delete'])->name('testimonial.delete');
    Route::resource('testimonial',TestimonialController::class)->only([
        'index', 'create','store','edit','update'
    ]);
    Route::get('career/getdata',[CareerController::class,'getdata'])->name('career.getdata');
    Route::get('career/delete',[CareerController::class,'delete'])->name('career.delete');
    Route::get('career/status',[CareerController::class,'status'])->name('career.status');
    Route::resource('career',CareerController::class)->only([
        'index', 'create','store','edit','update'
    ]);
    Route::get('job-resume',[JobResumeController::class,'index'])->name('jobresume.index');
    Route::get('job-resume/getdata',[JobResumeController::class,'getdata'])->name('jobresume.getdata');
    Route::get('job-resume/delete',[JobResumeController::class,'delete'])->name('jobresume.delete');

    Route::get('contact',[ContactController::class,'index'])->name('contact.index');
    Route::get('contact/getdata',[ContactController::class,'getdata'])->name('contact.getdata');
    Route::get('contact/delete',[ContactController::class,'delete'])->name('contact.delete');

    Route::get('blog-category/delete',[BlogcategoryController::class,'delete'])->name('blogcategory.delete');
    Route::get('blog-category/getdata',[BlogcategoryController::class,'getdata'])->name('blogcategory.getdata');
    Route::resource('blog-category',BlogcategoryController::class)->only([
        'index', 'create','store','edit','update'
    ]);

    Route::get('blog/delete',[BlogController::class,'delete'])->name('blog.delete');
    Route::get('blog/getdata',[BlogController::class,'getdata'])->name('blog.getdata');
    Route::post('blog/upload',[BlogController::class,'uploadimage'])->name('blog.upload.image');
    Route::resource('blog',BlogController::class)->only([
        'index', 'create','store','edit','update'
    ]);



 
});










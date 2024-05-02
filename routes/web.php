<?php

use App\Http\Controllers\frontController\HomeController;
use Illuminate\Support\Facades\Route;





Route::get('/',[HomeController::class,'index'])->name('front.index');
Route::get('/career',[HomeController::class,'career'])->name('front.career');
Route::get('/work',[HomeController::class,'work'])->name('front.work');
Route::get('/blog',[HomeController::class,'blog'])->name('front.blog');
Route::get('/contact',[HomeController::class,'contact'])->name('front.contact');
Route::get('/web-development',[HomeController::class,'webdevelopment'])->name('front.webdevelopment');



Route::get('/work/{workurl:slug}',[HomeController::class,'workurl'])->name('front.workurl');




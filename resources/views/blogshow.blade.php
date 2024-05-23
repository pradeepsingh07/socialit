@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner" class="blog-show">    
    <img src="{{asset('storage/upload/'.$data->thumbnail_image)}}" class="img-fluid" alt=""/>
</section>
<section id="blog-content" class="ptb">
    <div class="container-fluid res-container">
         <div class="row mx-md-5 mx-lg-5">
              <div class="col-md-8">
                <h1 class="text-capitalize">{{$data->title}}</h1>
                <div class="card w-100 mt-5">                    
                    <div class="content-area mt-4">
                         {!! htmlspecialchars_decode($data->content) !!}
                    </div> 
                </div>
              </div>
              <div class="col-md-4">
                 <div id="fixed-top">                     
                  <h5 class="mb-3">Related Post</h5>
                  <div class="card">
                      <a href="#"><div class="post-heading">Why Laravel is the best backhand framework right now</div></a>
                      <a href="#"><div class="post-heading">Why Laravel is the best backhand framework right now</div></a>
                  </div>
                 </div>
              </div>              
         </div> 
    </div>
</section>
@include('frontlayout.contactform')
@endsection
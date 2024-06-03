@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner" class="work">    
  <h1>{{$data->title}}</h1> 
   <div class="imgwork">
     <img src="{{asset('images/work/men.png')}}" class="img-fluid"/>
   </div>
</section>
<section id="singlework" class="ptb">
    <div class="container-fluid res-container"> 
         <div class="row mx-md-3 mx-lg-3">
           <div class="col-12 col-md-4">
            <img src="{{asset('images/kk.png')}}" class="img-fluid" alt=""/>
           </div>
           <div class="col-12 col-md-8">
            <h3 class="mb-3">About The {{$data->title}}</h3>
             <div class="icon alert alert-secondary rounded-0 border-start border-top-0 border-bottom-0 border-end-0 border-5 border-secondary">
               <a target="_blank" href=""><img src="{{asset('images/icon/facebook.png')}}" alt="facebook" class="sm-icon img-fluid"/></a>
               <a target="_blank" href=""><img src="{{asset('images/icon/instagram.png')}}" alt="facebook" class="sm-icon img-fluid"/></a>
               <a target="_blank" href=""><img src="{{asset('images/icon/youtube.png')}}" alt="facebook" class="sm-icon img-fluid"/></a>
               <a target="_blank" href=""><img src="{{asset('images/icon/pinterest.png')}}" alt="facebook" class="sm-icon img-fluid"/></a>
               <a target="_blank" href=""><img src="{{asset('images/icon/linkedin.png')}}" alt="facebook" class="sm-icon img-fluid"/></a> 
               <a target="_blank" href=""><img src="{{asset('images/icon/twitter.png')}}" alt="facebook" class="sm-icon img-fluid"/> </a>
             </div>
             <p>{{$data->content}}</p>
           </div>
         </div>
    </div>
</section>
<section id="work-show-page" class="ptb">
  <div class="container-fluid res-container"> 
    <div class="row mx-md-3 mx-lg-3">
     @foreach ($data->work_images as $item)
      <div class="col-md-12 my-2">
          <img src="{{asset('storage/upload/work/'.$item)}}" class="img-fluid" alt=""/>
      </div>
      @endforeach
    </div>
</div>
</section>
@include('frontlayout.contactform')
@endsection
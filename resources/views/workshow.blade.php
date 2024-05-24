@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner" class="work">    
  <h1>{{$data->title}}</h1> 
  <p class="para-font-hero">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio beatae, iure fuga deserunt, consequatur, dignissimos ipsam rerum saepe labore tenetur sequi ea porro aspernatur est praesentium veniam quod! Animi.</p>
   <div class="imgwork">
     <img src="{{asset('images/work/men.png')}}" class="img-fluid"/>
   </div>
</section>
<section id="singlework" class="ptb">
    <div class="container-fluid res-container"> 
         <div class="row mx-md-3 mx-lg-3">
           <div class="col-12 col-md-4"><h2>About The {{$data->title}}</h2></div>
           <div class="col-12 col-md-8">
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
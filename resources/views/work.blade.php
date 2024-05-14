@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner" class="work">    
  <h1>Only when you see, <br> you will understand us</h1>
  <p class="para-font-hero">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio beatae, iure fuga deserunt, consequatur, dignissimos ipsam rerum saepe labore tenetur sequi ea porro aspernatur est praesentium veniam quod! Animi.</p>
</section>
<section id="allwork" class="ptb">
   <h2 class="text-center font-size-heading">Our Recent Works</h2>
   <p class="para-font">Unveil Our Latest Works and Witness Creativity in Motion</p>
<div class="container-fluid res-container"> 
   <div class="row mx-md-3 mx-lg-3 g-4"> 
     <div class="col-md-3">
        <a href="{{route('front.workurl',['workurl'=>'sdfgdf'])}}">
        <div class="card">
           <img src="{{asset('images/work/1.jpeg')}}" class="img-fluid" alt=""/> 
            <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>      
        </div>
       </a>
     </div>  
     <div class="col-md-3">
      <a href="">
      <div class="card">
         <img src="{{asset('images/work/2.png')}}" class="img-fluid" alt=""/> 
         <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>
      </div>
     </a>
   </div>
   <div class="col-md-3">
      <a href="">
      <div class="card">
         <img src="{{asset('images/work/3.jpg')}}" class="img-fluid" alt=""/> 
          <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>      
      </div>
     </a>
   </div>  
   <div class="col-md-3">
    <a href="">
    <div class="card">
       <img src="{{asset('images/work/4.png')}}" class="img-fluid" alt=""/> 
       <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>
    </div>
   </a>
 </div>
 <div class="col-md-3">
   <a href="">
   <div class="card">
      <img src="{{asset('images/work/1.jpeg')}}" class="img-fluid" alt=""/> 
       <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>      
   </div>
  </a>
</div>  
<div class="col-md-3">
 <a href="">
 <div class="card">
    <img src="{{asset('images/work/2.png')}}" class="img-fluid" alt=""/> 
    <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>
 </div>
</a>
</div>
<div class="col-md-3">
 <a href="">
 <div class="card">
    <img src="{{asset('images/work/3.jpg')}}" class="img-fluid" alt=""/> 
     <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>      
 </div>
</a>
</div>  
<div class="col-md-3">
<a href="">
<div class="card">
  <img src="{{asset('images/work/4.png')}}" class="img-fluid" alt=""/> 
  <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>
</div>
</a>
</div>
   </div>   
</div>
</section>
@include('frontlayout.contactform')
@endsection
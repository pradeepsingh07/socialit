@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner" class="work">    
  <h1>Only when you see, <br> you will understand us</h1>
  <button>View Our Works</button>
</section>
<section id="allwork" class="ptb">
<div class="container-fluid"> 
   <div class="row mx-md-3 mx-lg-3">
    <h2 class="text-center font-size-heading">Our Recent Works</h2>
    {{-- <p>Unveil Our Latest Works and Witness Creativity in Motion</p> --}}
     <div class="col-md-3">
        <a href="">
        <div class="card">
           <img src="{{asset('images/1.jpg')}}" class="img-fluid" alt=""/> 
            <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>      
        </div>
       </a>
     </div>  
     <div class="col-md-3">
      <a href="">
      <div class="card">
         <img src="{{asset('images/2.jpg')}}" class="img-fluid" alt=""/> 
         <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>
      </div>
     </a>
   </div>
   <div class="col-md-3">
      <a href="">
      <div class="card">
         <img src="{{asset('images/1.jpg')}}" class="img-fluid" alt=""/> 
          <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>      
      </div>
     </a>
   </div>  
   <div class="col-md-3">
    <a href="">
    <div class="card">
       <img src="{{asset('images/2.jpg')}}" class="img-fluid" alt=""/> 
       <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>
    </div>
   </a>
 </div>
 <div class="col-md-3">
   <a href="">
   <div class="card">
      <img src="{{asset('images/2.jpg')}}" class="img-fluid" alt=""/> 
      <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>
   </div>
  </a>
</div>
<div class="col-md-3">
   <a href="">
   <div class="card">
      <img src="{{asset('images/2.jpg')}}" class="img-fluid" alt=""/> 
      <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>
   </div>
  </a>
</div>
<div class="col-md-3">
   <a href="">
   <div class="card">
      <img src="{{asset('images/2.jpg')}}" class="img-fluid" alt=""/> 
      <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>
   </div>
  </a>
</div>
<div class="col-md-3">
   <a href="">
   <div class="card">
      <img src="{{asset('images/2.jpg')}}" class="img-fluid" alt=""/> 
      <div class="readmore"><img src="{{asset('images/right.png')}}" class="img-fluid"/></div>
   </div>
  </a>
</div>
   </div>   
</div>
</section>
@include('frontlayout.contactform')
@endsection
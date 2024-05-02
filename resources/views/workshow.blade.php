@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner" class="work">    
  <h1>Maheshwari Restaurant</h1> 
   <div class="imgwork">
     <img src="{{asset('images/hero-work.webp')}}" class="img-fluid"/>
   </div>
</section>
<section id="singlework">
    <div class="container-fluid"> 
         <h1>Hello Work File</h1>
    </div>
</section>
@include('frontlayout.contactform')
@endsection
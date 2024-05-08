@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner" class="work">    
  <h1>Maheshwari Restaurant</h1> 
  <p class="para-font-hero">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio beatae, iure fuga deserunt, consequatur, dignissimos ipsam rerum saepe labore tenetur sequi ea porro aspernatur est praesentium veniam quod! Animi.</p>
   <div class="imgwork">
     <img src="{{asset('images/work/men.png')}}" class="img-fluid"/>
   </div>
</section>
<section id="singlework" class="ptb">
    <div class="container-fluid res-container"> 
         <div class="row mx-md-3 mx-lg-3">
           <div class="col-12 col-md-4"><h2>About The Maheshwari Restaurant</h2></div>
           <div class="col-12 col-md-8">
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, ea ab eos quaerat praesentium magni repudiandae dolore quam? Aliquam hic itaque tempore, et placeat ipsum magnam nisi necessitatibus, sunt voluptatem omnis excepturi debitis iure! Optio, ad. Maxime incidunt, itaque animi voluptatem error aperiam asperiores voluptas eligendi pariatur illum id eius quos voluptate fugiat vel possimus aspernatur ipsa? Deserunt dolore accusamus tenetur, aliquid facilis neque natus blanditiis perferendis voluptatum aliquam molestias, magni, cum repudiandae totam! Deserunt illum doloribus nobis ipsam odio ?</p>
           </div>
         </div>
    </div>
</section>
<section id="work-show-page" class="ptb">
  <div class="container-fluid res-container"> 
    <div class="row mx-md-3 mx-lg-3">
      <div class="col-md-12 my-2">
         <img src="{{asset('images/work/inner-work-1.webp')}}" class="img-fluid" alt=""/>
      </div> 
      <div class="col-md-12 my-2">
        <img src="{{asset('images/work/inner-work-2.webp')}}" class="img-fluid" alt=""/>
     </div>    
    </div>
</div>
</section>
@include('frontlayout.contactform')
@endsection
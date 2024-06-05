@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner">
    <h1>{{$heading}}</h1>
    <p class="para-font-hero">{{$hpara}}</p>
    <div class="gap-md-3 gap-3 d-flex">
        <a class="btn btn-outline-primary">Case Study</a>
        <a class="btn btn-primary">Schedule a Meeting</a>    
    </div>
</section>
<section id="service-inner-page" class="ptb">
    <h2 class="text-center mb-5">{{$heading2}}</h2>   
     <div class="container-fluid res-container">  
        <div class="row mx-md-5 mx-lg-5 g-4">
             <div class="col-md-4 col-lg-4">
                <div class="card h-100">
                    <div class="card-header"><i class="bi bi-trophy"></i></div>                    
                    <div class="card-body">
                      <div class="card-title">{{$ch1}}</div>
                       <p>{{$cpara1}}</p>
                    </div>
                </div>
             </div> 
             <div class="col-md-4 col-lg-4">
                <div class="card h-100">
                    <div class="card-header"><i class="bi bi-chat-left-dots"></i></div>
                    <div class="card-body">
                        <div class="card-title">{{$ch2}}</div>
                         <p>{{$cpara2}}</p>
                      </div>
                </div>
             </div>
             <div class="col-md-4 col-lg-4">
                <div class="card h-100">
                    <div class="card-header"><i class="bi bi-ui-radios-grid"></i></div>
                    <div class="card-body">
                        <div class="card-title">{{$ch3}}</div>
                         <p>{{$cpara3}}</p>
                      </div>
                </div>
             </div> 
        </div>
     </div>
</section>
 {{$slot}}
<section id="faq" class="ptb">
    <div class="container-fluid res-container">
        <h6 class="font-size-heading">Frequently Asked Questions for web development</h6>        
        <p class="para-font">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio beatae, iure fuga deserunt, consequatur, dignissimos ipsam rerum saepe labore tenetur sequi ea porro aspernatur est praesentium veniam quod! Animi.</p>
        <div class="row mx-md-3 mx-lg-3">
            <x-accodian/>
         </div> 
    </div>
</section> 
@include('frontlayout.contactform')
@endsection
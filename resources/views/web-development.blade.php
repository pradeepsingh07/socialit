@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner">
<h1>Web Development</h1>
<p class="para-font-hero">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio beatae, iure fuga deserunt, consequatur, dignissimos ipsam rerum saepe labore tenetur sequi ea porro aspernatur est praesentium veniam quod! Animi.</p>
<div class="gap-md-3 gap-3 d-flex">
    <a class="btn btn-outline-primary">Case Study</a>
    <a class="btn btn-primary">Schedule a Meeting</a>    
</div>
</section>
<section id="service-inner-page" class="ptb">
    <h2 class="font-size-heading">Our Expertise in Web Development</h2>
    <p class="para-font">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio beatae, iure fuga deserunt, consequatur, dignissimos ipsam rerum saepe labore tenetur sequi ea porro aspernatur est praesentium veniam quod! Animi.</p>
     <div class="container-fluid res-container">  
        <div class="row mx-md-3 mx-lg-3 g-4">
             <div class="col-md-4 col-lg-4">
                <div class="card h-100">
                    <div class="card-header"><i class="bi bi-trophy"></i></div>                    
                    <div class="card-body">
                      <div class="card-title">Best in class</div>
                       <p>Birdeye is the most complete reputation management platform in the industry as rated by G2.</p>
                    </div>
                </div>
             </div> 
             <div class="col-md-4 col-lg-4">
                <div class="card h-100">
                    <div class="card-header"><i class="bi bi-chat-left-dots"></i></div>
                    <div class="card-body">
                        <div class="card-title">AI-Powered</div>
                         <p>Generate and manage reviews with ease with powerful, yet intuitive AI capabilities.</p>
                      </div>
                </div>
             </div>
             <div class="col-md-4 col-lg-4">
                <div class="card h-100">
                    <div class="card-header"><i class="bi bi-ui-radios-grid"></i></div>
                    <div class="card-body">
                        <div class="card-title">All-in-one</div>
                         <p>Everything you need to build your reputation, grow revenue, and deliver exceptional customer experiences under one roof.</p>
                      </div>
                </div>
             </div> 
        </div>
     </div>
</section>
<section id="service-inner-page-2nd" class="ptb">
    <div class="container-fluid res-container">
        <div class="row mx-md-3 mx-lg-3 g-5">
                <div class="col-md-12"><img src="{{asset('images/web-development/0.webp')}}" class="img-fluid" alt=""/></div>  
                <div class="col-md-5">
                    <div class="card-header mb-3">Review Generation Campaigns</div>
                    <div class="card-body">
                        <h3>Generate more reviews, automatically</h3>
                    </div>
                </div>
                <div class="col-md-7">
                   <p>Minimize effort. Maximize reviews. Pair Birdeye with your CRM to trigger review requests to right customer at the right time without lifting a finger.</p>
                </div>
           </div>
      </div>
</section>


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
<x-watchdemo/>
@endsection
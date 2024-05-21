@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner">
<h1>Social Media Marketing</h1>
<p class="para-font-hero">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio beatae, iure fuga deserunt, consequatur, dignissimos ipsam rerum saepe labore tenetur sequi ea porro aspernatur est praesentium veniam quod! Animi.</p>
<div class="gap-md-3 gap-3 d-flex">
    <a class="btn btn-outline-primary">Case Study</a>
    <a class="btn btn-primary">Schedule a Meeting</a>    
</div>
</section>
<section id="service-inner-page" class="ptb">
    <h2 class="font-size-heading">Our Expertise in Social Media Marketing</h2>
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
        <div class="row mx-md-3 mx-lg-3 g-4">
            <div class="col-md-12">                
             <div class="row g-4 align-items-center">
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
            <div class="col-md-12">
                 <div class="row align-items-center">
                  <div class="col-md-4">
                   <div class="card">
                      <div class="card-header">Scan To Review</div>
                      <div class="card-body">
                          <div class="card-title">Collect reviews in real-time</div>
                           <p>Ask for reviews before your customers leave — then send them straight to your favorite review site with a custom QR code.</p>
                        </div>
                   </div>
                 </div>
                 <div class="col-md-8">
                    <img src="{{asset('images/web-development/1.webp')}}" class="img-fluid" alt=""/>
                 </div>
               </div>
            </div>
            <div class="col-md-12">
                <div class="row align-items-center">
                 <div class="col-md-4 order-2">
                  <div class="card">
                     <div class="card-header">AI-assisted responses</div>
                     <div class="card-body">
                         <div class="card-title">Reply with AI</div>
                          <p>Personalize your review replies at scale with help from AI and generate tailored, error-free responses with a single click.</p>
                       </div>
                  </div>
                </div>
                <div class="col-md-8 order-1">
                   <img src="{{asset('images/web-development/2.webp')}}" class="img-fluid" alt=""/>
                </div>
              </div>
            </div>
            <div class="col-md-12">
                <div class="row align-items-center">
                <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Review Monitoring</div>
                    <div class="card-body">
                        <div class="card-title">Monitor reviews on 200+ sites</div>
                        <p>Keep tabs on hundreds of leading review sites from a single dashboard and maintain a spotless reputation wherever customers search.</p>
                    </div>
                </div>
                </div>
                <div class="col-md-8">
                <img src="{{asset('images/web-development/3.webp')}}" class="img-fluid" alt=""/>
                </div>
                </div>
            </div>
             <div class="col-md-12">
                <div class="row align-items-center">
                 <div class="col-md-4 order-2">
                  <div class="card">
                     <div class="card-header">Review Management</div>
                     <div class="card-body">
                         <div class="card-title">Auto-reply to customer reviewse</div>
                          <p>Make sure no review goes unanswered. Reply to reviews at scale with auto-response rules and personalized templates.</p>
                       </div>
                  </div>
                </div>
                <div class="col-md-8 order-1">
                   <img src="{{asset('images/web-development/4.webp')}}" class="img-fluid" alt=""/>
                </div>
              </div>
            </div>
            <div class="col-md-12">
                <div class="row align-items-center">
                <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Review Translation</div>
                    <div class="card-body">
                        <div class="card-title">Translate reviews and responses with AI</div>
                        <p>You don’t need a translator to serve multilingual customers. Birdeye Reviews will automatically translate reviews into English — then translate your response in your customer’s language.</p>
                    </div>
                </div>
                </div>
                <div class="col-md-8">
                <img src="{{asset('images/web-development/5.webp')}}" class="img-fluid" alt=""/>
                </div>
                </div>
            </div>
             <div class="col-md-12">
                <div class="row align-items-center">
                 <div class="col-md-4 order-2">
                  <div class="card">
                     <div class="card-header">Review Widgets</div>
                     <div class="card-body">
                         <div class="card-title">Share reviews on your website</div>
                          <p>Keep five-star feedback front and center. Showcase new reviews on your website and turn first-time visitors into repeat customers.</p>
                       </div>
                  </div>
                </div>
                <div class="col-md-8 order-1">
                   <img src="{{asset('images/web-development/6.webp')}}" class="img-fluid" alt=""/>
                </div>
              </div>
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
@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner">
<h1>Empowering Businesses <br> in the Digital Realm</h1>
<p class="para-font-hero">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio beatae, iure fuga deserunt, consequatur, dignissimos ipsam rerum saepe labore tenetur sequi ea porro aspernatur est praesentium veniam quod! Animi.</p>
<div class="gap-3 d-flex align-items-center">
     <a class="btn btn-outline-primary w-100">Case Study</a>
     <a class="btn btn-primary w-100">Schedule a Meeting</a>     
</div>
</section>
<section id="logos">  
        <div class="logo-top-new"> 
          <x-logoslide/>
       </div>
</section>
<section id="whatwedo" class="ptb">    
     <h2 class="font-size-heading">Transform Your Business with Our Expert Services</h2>   
     <p class="para-font">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus nobis quasi exercitationem quibusdam ipsum quos autem repudiandae temporibus aspernatur ea?</p> 
     <div class="container-fluid res-container">
           <div class="row service-card-group mx-md-5 mx-lg-5 g-4"> 
               <x-servicecard href="#" title='web development' image="images/service/web.webp"/>
               <x-servicecard href="#" title="digital marketing" image="images/service/dm.webp"/> 
               <x-servicecard href="#" title="social media marketing" image="images/service/smm.webp"/>  
               <x-servicecard href="#" title="app development" image="images/service/app.webp"/>  
               <x-servicecard href="#" title="ui/ux design" image="images/service/uiux.webp"/>  
               <x-servicecard href="#" title="graphic design" image="images/service/gd.webp"/>
               <x-servicecard href="#" title="search engine optimization" image="images/service/seo.webp"/>
               <x-servicecard href="#" title="branding & advertising" image="images/service/branding.webp"/>
           </div>
     </div>
</section>
<section id="cta" class="ptb">
  <div class="container-fluid res-container">
      <div class="row mx-md-3 mx-lg-3 align-items-center mx-md-5 mx-lg-5">
           <div class="col-md-8 text-center text-md-start text-lg-start"><h6>Make a difference today, call now !</h6><p>Call To Transform Lives And Shape A Better Tomorrow. Your Voice Matters.</p></div>
           <div class="col-md-4 text-center text-md-end text-lg-end"><a href="{{route('front.contact')}}" class="btn btn-primary">get started</a></div>
      </div>
  </div>
</section>
<section id="customer-review" class="ptb">
     <h5 class="font-size-heading">our customers say about the company</h5>
     <p class="para-font">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus nobis quasi exercitationem quibusdam ipsum quos autem repudiandae temporibus aspernatur ea?</p>
     <div class="container-fluid res-container">
      <div class="row mx-md-5 mx-lg-5 g-4 review-card-group"> 
          <div class="col-md-12">
          <div class="reviews">
              <x-reviewcard/>
              <x-reviewcard/> 
              <x-reviewcard/> 
              <x-reviewcard/> 
              <x-reviewcard/> 
              <x-reviewcard/> 
              <x-reviewcard/>              
          </div>
          <div class="reviews-btn-slide">
               <button class="reviews-prev"><i class="bi bi-arrow-left"></i></button>
               <button class="reviews-next"><i class="bi bi-arrow-right"></i></button>
          </div>
        </div>
     </div>
     </div>
</section>
<section id="record" class="ptb">
 <div class="container-fluid res-container">
     <div class="row record-card-group mx-md-5 mx-lg-5 gy-4 gx-md-4 gx-lg-4">
          <div class="col-6 col-md-3 card-record">
               <div class="card bg-pink h-100">
                    <h5>150 +</h5>
                    <p>trusted client's</p>
               </div>              
          </div> 
          <div class="col-6 col-md-3 card-record">
               <div class="card bg-purple h-100">
                    <h5>300 +</h5>
                    <p>projects delivered</p>
               </div>       
          </div>
          <div class="col-6 col-md-3 card-record">
               <div class="card bg-green h-100">
                    <h5>8,500 +</h5>
                    <p>creative designs</p>
               </div>
          </div>
          <div class="col-6 col-md-3 card-record">
               <div class="card bg-yellow h-100">
                    <h5>8 +</h5>
                    <p>year experince</p>
               </div>        
          </div>
     </div>
 </div> 
</section>
<section id="industry" class="ptb">
<h3 class="font-size-heading">Solutions for every industry</h3>
<p class="para-font">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus nobis quasi exercitationem quibusdam ipsum quos autem repudiandae temporibus aspernatur ea?</p>
 <div class="container-fluid res-container">
      <div class="row mx-md-5 mx-lg-5">
          <div class="col-md-12">
               <div id="myTabs">
                    <ul class="nav nav-pills nav-fill" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Dental</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#tab2">Healthcare</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" data-bs-toggle="pill" href="#tab3">Real Estate</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" data-bs-toggle="pill" href="#tab4">Home Services</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" data-bs-toggle="pill" href="#tab5">Retail</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" data-bs-toggle="pill" href="#tab6">Legal</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" data-bs-toggle="pill" href="#tab7">Finace</a>
                      </li>
                      <li class="nav-item">
                         <a class="nav-link" data-bs-toggle="pill" href="#tab8">Auto</a>
                      </li>
                    </ul>
                 </div>
                  <select class="form-select mt-3" id="mobileNavSelect">
                  </select>           
                  <div class="tab-content  mt-5" id="pills-tabContent">
                    <div id="tab1" class="tab-pane fade show active" role="tabpanel">
                         <div class="row">
                            <div class="col-md-3">
                              <img src="{{asset('images/quote.png')}}" class="img-fluid quote-img" alt=""/>
                              <figure>
                                   <blockquote>
                                    “Birdeye is a game changer for patient experience. We can message all our patients using one central inbox.”
                                   </blockquote>
                                   <figcaption>
                                       Brandon Dowdy-Ernst Smile Workshop
                                   </figcaption>
                                 </figure>
                            </div>
                            <div class="col-md-9 d-flex justify-content-center">
                                <img src="{{asset('images/dental-smile-workshop.webp')}}" class="img-fluid"/>
                            </div>
                         </div>
                    </div>
                    <div id="tab2" class="tab-pane fade" role="tabpanel">
                         <div class="row">
                              <div class="col-md-3">
                                <img src="{{asset('images/quote.png')}}" class="img-fluid quote-img" alt=""/>
                                <figure>
                                     <blockquote>
                                      “Birdeye is a game changer for patient experience. We can message all our patients using one central inbox.”
                                     </blockquote>
                                     <figcaption>
                                         Brandon Dowdy-Ernst Smile Workshop
                                     </figcaption>
                                   </figure>
                              </div>
                              <div class="col-md-9 d-flex justify-content-center">
                                  <img src="{{asset('images/dental-smile-workshop.webp')}}" class="img-fluid"/>
                              </div>
                           </div>
                       </div>
                    </div>
                 </div>         
               </div>
          </div>       
      </div> 
</section>
<section id="cta" class="ptb">
     <div class="container-fluid res-container">
         <div class="row mx-md-3 mx-lg-3 align-items-center mx-md-5 mx-lg-5">
              <div class="col-md-8 text-center text-md-start text-lg-start"><h6>Make a difference today, call now !</h6><p>Call To Transform Lives And Shape A Better Tomorrow. Your Voice Matters.</p></div>
              <div class="col-md-4 text-center text-md-end text-lg-end"><a href="{{route('front.contact')}}" class="btn btn-primary">get started</a></div>
         </div>
     </div>
   </section>
<section id="recentworks" class="ptb">
   <h3 class="font-size-heading">Our Recent Works</h3>
   <p class="para-font">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus nobis quasi exercitationem quibusdam ipsum quos autem repudiandae temporibus aspernatur ea?</p>
   <div class="container-fluid res-container">
      <div class="row mx-md-5 mx-lg-5">
            <div class="work-slide"> 
               <div class="card">
                    <img src="{{asset('images/1.jpg')}}" class="img-fluid" alt=""/>
               </div>
               <div class="card">
                    <img src="{{asset('images/1.jpg')}}" class="img-fluid" alt=""/>
               </div>
               <div class="card">
                    <img src="{{asset('images/1.jpg')}}" class="img-fluid" alt=""/>
               </div>
               <div class="card">
                    <img src="{{asset('images/1.jpg')}}" class="img-fluid" alt=""/>
               </div>
           </div>
           <div class="text-center viewbtn-top">
               <a href="{{route('front.work')}}" class="btn btn-outline-primary">View Portfolio <i class="bi bi-arrow-right"></i></a>
           </div>
      </div>
   </div> 
</section>
<section id="blog-area" class="blog-home ptb">
     <h5 class="font-size-heading">Lastest Transformative Insights</h5>
     <p class="para-font">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus nobis quasi exercitationem quibusdam ipsum quos autem repudiandae temporibus aspernatur ea?</p>
     <div class="container-fluid res-container">          
          <div class="row mx-md-3 mx-lg-3 blog-card-group mx-md-5 mx-lg-5 gx-4">
               <div class="blogs-slide">
                    <a href="">
                         <div class="card">
                            <img src="{{asset('images/1.webp')}}" class="img-fluid" alt=""/> 
                            <div class="card-body">
                            <div class="card-title date">15 Feb 2024</div>
                            <h2 class="title">Top 12 AI Technology Trends for 2024</h2>
                            <p class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias veritatis....</p>
                            </div>                           
                      </div>
                    </a>
                    <a href="">
                         <div class="card">
                            <img src="{{asset('images/1.webp')}}" class="img-fluid" alt=""/> 
                            <div class="card-body">
                            <div class="card-title date">15 Feb 2024</div>
                            <h2 class="title">Top 12 AI Technology Trends for 2024</h2>
                            <p class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias veritatis....</p>
                            </div>                       
                      </div>
                    </a>
                    <a href="">
                         <div class="card">
                            <img src="{{asset('images/1.webp')}}" class="img-fluid" alt=""/> 
                            <div class="card-body">
                            <div class="card-title date">15 Feb 2024</div>
                            <h2 class="title">Top 12 AI Technology Trends for 2024</h2>
                            <p class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias veritatis....</p>
                            </div>                      
                      </div>
                    </a>
                    <a href="">
                         <div class="card">
                            <img src="{{asset('images/1.webp')}}" class="img-fluid" alt=""/> 
                            <div class="card-body">
                            <div class="card-title date">15 Feb 2024</div>
                            <h2 class="title">Top 12 AI Technology Trends for 2024</h2>
                            <p class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias veritatis....</p>
                            </div>                       
                      </div>
                    </a>
                    <a href="">
                         <div class="card">
                            <img src="{{asset('images/1.webp')}}" class="img-fluid" alt=""/> 
                            <div class="card-body">
                            <div class="card-title date">15 Feb 2024</div>
                            <h2 class="title">Top 12 AI Technology Trends for 2024</h2>
                            <p class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias veritatis....</p>
                            </div>                         
                      </div>
                    </a>
                    <a href="">
                         <div class="card">
                            <img src="{{asset('images/1.webp')}}" class="img-fluid" alt=""/> 
                            <div class="card-body">
                            <div class="card-title date">15 Feb 2024</div>
                            <h2 class="title">Top 12 AI Technology Trends for 2024</h2>
                            <p class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias veritatis....</p>
                            </div>                       
                      </div>
                    </a>
                    <a href="">
                         <div class="card">
                            <img src="{{asset('images/1.webp')}}" class="img-fluid" alt=""/> 
                            <div class="card-body">
                            <div class="card-title date">15 Feb 2024</div>
                            <h2 class="title">Top 12 AI Technology Trends for 2024</h2>
                            <p class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias veritatis....</p>
                            </div>                       
                          </div>
                    </a>
               </div> 
               <div class="blog-btn-slide">
                    <button class="blogs-prev"><i class="bi bi-arrow-left"></i></button>
                    <button class="blogs-next"><i class="bi bi-arrow-right"></i></button>
               </div>
           </div>
     </div>
</section>
<section id="faq" class="ptb">
      <h6 class="font-size-heading">Frequently Asked Questions</h6>
      <p class="para-font">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus nobis quasi exercitationem quibusdam ipsum quos autem repudiandae temporibus aspernatur ea?</p>    
      <div class="container-fluid res-container">     
          <div class="row mx-md-3 mx-lg-3 mx-md-5 mx-lg-5">
          <x-accodian/>
          </div> 
      </div>
</section>
@include('frontlayout.contactform')
@endsection

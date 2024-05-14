@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner" class="blogs">
  <h1>Our latest articles <br> and insights</h1>
  <p class="para-font-hero">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio beatae, iure fuga deserunt, consequatur, dignissimos ipsam rerum saepe labore tenetur sequi ea porro aspernatur est praesentium veniam quod! Animi.</p>
</section>
<section id="blog-area" class="ptb">
    <div class="container-fluid">
        <div class="row mx-md-5 mx-lg-5 g-4">
            <div class="col-md-4">
                <a href="">
                   <div class="card">
                   <img src="{{asset('images/1.webp')}}" class="img-fluid" alt=""/> 
                   <div class="card-body">
                    <div class="card-title date">15 Feb 2024</div>                    
                    <h2 class="title">Top 12 AI Technology Trends for 2024</h2>
                    <p class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias veritatis....</p>
                   </div>
                   <div class="card-footer d-flex">
                       <div class="authorname">Pradeep Singh</div>
                       <div class="category">Web Development</div> 
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
                <a href="">
                   <div class="card">
                   <img src="{{asset('images/1.webp')}}" class="img-fluid" alt=""/> 
                   <div class="card-body">
                    <div class="card-title date">15 Feb 2024</div>
                    <h2 class="title">Top 12 AI Technology Trends for 2024</h2>
                    <p class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias veritatis....</p>
                   </div>
                   <div class="card-footer d-flex">
                       <div class="authorname">Pradeep Singh</div>
                       <div class="category">Web Development</div> 
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
                <a href="">
                   <div class="card">
                   <img src="{{asset('images/1.webp')}}" class="img-fluid" alt=""/> 
                   <div class="card-body">
                    <div class="card-title date">15 Feb 2024</div>
                    <h2 class="title">Top 12 AI Technology Trends for 2024</h2>
                    <p class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias veritatis....</p>
                   </div>
                   <div class="card-footer d-flex">
                       <div class="authorname">Pradeep Singh</div>
                       <div class="category">Web Development</div> 
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
                <a href="">
                   <div class="card">
                   <img src="{{asset('images/1.webp')}}" class="img-fluid" alt=""/> 
                   <div class="card-body">
                    <div class="card-title date">15 Feb 2024</div>
                    <h2 class="title">Top 12 AI Technology Trends for 2024</h2>
                    <p class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias veritatis....</p>
                   </div>
                   <div class="card-footer d-flex">
                       <div class="authorname">Pradeep Singh</div>
                       <div class="category">Social Media Marketing</div> 
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4">
                <a href="">
                   <div class="card">
                   <img src="{{asset('images/1.webp')}}" class="img-fluid" alt=""/> 
                   <div class="card-body">
                    <div class="card-title date">15 Feb 2024</div>
                    <h2 class="title">Top 12 AI Technology Trends for 2024</h2>
                    <p class="des">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias veritatis....</p>
                   </div>
                   <div class="card-footer d-flex">
                       <div class="authorname">Pradeep Singh</div>
                       <div class="category">Digital Marketing</div> 
                  </div>
                </div>
              </a>
            </div>
            <div class="text-center mt-5">
                <button class="btn btn-primary">Load More <i class="bi bi-arrow-right"></i></button>
            </div>            
        </div>
    </div>
</section>
@include('frontlayout.contactform')
@endsection
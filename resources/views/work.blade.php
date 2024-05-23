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
      <div class="row mx-md-5 mx-lg-5">
         <div class="col-md-12">
            <div id="myTabs">
               <ul class="nav nav-pills nav-fill" role="tablist">
                  @foreach ($datas as $key=>$data)
                   <li class="nav-item">
                    <a class="nav-link {{$key == 0  ? 'active' : '' }}" data-bs-toggle="pill" href="#tab{{$key}}">{{$data->category_name}}</a>
                   </li>                      
                  @endforeach
               </ul>
            </div>
            <select class="form-select mt-3" id="mobileNavSelect">
            </select>           
            <div class="tab-content  mt-5" id="pills-tabContent">
              @foreach ($datas as $key=>$data)
              <div id="tab{{$key}}" class="tab-pane fade {{$key == 0  ? 'show active' : '' }}" role="tabpanel">
                 {{$key}}
              </div>          
              @endforeach
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
@include('frontlayout.contactform')
@endsection
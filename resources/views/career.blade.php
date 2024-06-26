@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner" class="career">
   <h1>Join our team and shape <br> the future with us</h1>
   <p class="para-font-hero">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio beatae, iure fuga deserunt, consequatur, dignissimos ipsam rerum saepe labore tenetur sequi ea porro aspernatur est praesentium veniam quod! Animi.</p>
</section>
<section id="openingsjob" class="ptb">
   <div class="container-fluid res-container">
      <div class="row mx-md-5 mx-lg-5 gy-4">
        @foreach($datas as $key=>$data)<div class="col-12">
            <div class="card">
               <div class="card-header">
                  <div class="row">
                     <div class="col-6 col-md-6 text-capitalize jobtype">{{$data->title}}</div>
                     <div class="col-6 col-md-6 "></div>
                  </div>
               </div>
               <div class="card-body">
                  <div class="row align-items-center">
                     <div class="col-12 col-md-6">
                        <div class="desgination">{{$data->designation_name}}</div>
                     </div>
                     <div class="col-12 col-md-6 btngrp d-flex gap-3 justify-content-md-end">
                        <a class="btn btn-outline-primary"  data-bs-toggle="collapse" href="#job{{$key}}" role="button" aria-expanded="false" aria-controls="job">View Details</a>
                        <a href="#" class="btn btn-primary">Apply Now <i class="bi bi-arrow-right"></i></a>
                     </div>
                  </div>
               </div>
               <div class="card-footer">
                  <span class="jobform"><i class="bi bi-geo-alt"></i> {{$data->work_type}}</span>
                  <span class="jobtime"><i class="bi bi-clock"></i> {{$data->job_type}}</span>                   
               </div>
               <div class="collapse" id="job{{$key}}">
                  <div class="card card-body border-0">
                     @foreach($data->job_details as $jsondata)<div class="my-2"><i class="bi bi-check-circle-fill"></i> {{$jsondata}}</div>@endforeach
                  </div>
               </div>
            </div>
         </div>
         @endforeach</div>
   </div>
</section>
<section id="joinform" class="ptb">
   <div class="container-fluid res-container">
      <div class="row mx-md-3 mx-lg-3">
         <div class="col-md-6 order-1 order-md-1 order-lg-1">
            <form>
               <h2 class="text-center">Would you like to join our team</h2>
               <div class="row">
                  <div class="col-md-6">
                     <div class="mb-3">                        
                        <input type="text" class="form-control" placeholder="Name">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-3">                        
                        <input type="text" class="form-control" placeholder="Number" inputmode="numeric" maxlength="10">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-3">                        
                        <input type="email" class="form-control" placeholder="Email">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="mb-3">
                        <select class="form-control">
                           <option>Select Desgination</option>
                           <option value="Performance Marketer">Performance Marketer</option>
                           <option value="Social Media Manager">Social Media Manager</option>
                           <option value="Business Development Manager">Business Development Manager</option>
                           <option value="Business Development Associate">Business Development Associate</option>
                           <option value="Graphic Designer">Graphic Designer</option>
                           <option value="Motion Graphic Designer">Motion Graphic Designer</option>
                           <option value="Android App Developer">Android App Developer</option>
                           <option value="IOS App Developer">IOS App Developer</option>
                           <option value="Web Designer"> Web Designer</option>
                           <option value="Web Developer">Web Developer</option>
                           <option value="Content Writer">Content Writer</option>
                           <option value="Content Creator">Content Creator</option>
                           <option value="Influencer marketer">Influencer marketer</option>
                           <option value="Photographer">Photographer</option>
                           <option value=" Cinematographer">Cinematographer</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="mb-3 choosen">
                        <input type="file" class="form-control" placeholder="upload your cv">
                        <div class="formupload">
                           <i class="bi bi-cloud-arrow-up text-white"></i>
                           <div class="text-white">Upload Your CV</div>
                           <div class="filename text-white badge"></div>
                        </div>
                     </div>
                  </div>
                  <div class="text-center">
                     <button>Apply Now</button>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-md-6 order-2 order-md-2 order-lg-2">
            <img src="{{asset('images/career.png')}}" alt="career" class="img-fluid"/>
         </div>
      </div>
   </div>
</section>
@endsection
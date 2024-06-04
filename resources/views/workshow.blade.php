@extends('frontlayout.mainlayout')
@php
    $iconPaths = [
        'facebook' => 'images/icon/facebook.png',
        'instagram' => 'images/icon/instagram.png',
        'youtube' => 'images/icon/youtube.png',
        'pinterest' => 'images/icon/pinterest.png',
        'linkedin' => 'images/icon/linkedin.png',
        'twitter' => 'images/icon/twitter.png',
    ];
    $showDiv = false;
    foreach($data->sm_icons as $key => $icon) {
        if (array_key_exists($key, $iconPaths) && !empty($icon)) {
            $showDiv = true;
            break;
        }
    }
@endphp
@section('section')
<section id="hero-banner" class="work">    
  <h1>{{$data->title}}</h1> 
   <div class="imgwork">
     <img src="{{asset('images/work/men.png')}}" class="img-fluid"/>
   </div>
</section>
<section id="singlework" class="ptb">
    <div class="container-fluid res-container"> 
         <div class="row mx-md-3 mx-lg-3">
           <div class="col-12 col-md-4">
            <img src="{{asset('images/kk.png')}}" class="img-fluid" alt=""/>
           </div>
           <div class="col-12 col-md-8">
            <h3 class="mb-3">About The {{$data->title}}</h3>             
            @if($showDiv)
            <div class="icon alert alert-secondary rounded-0 border-start border-top-0 border-bottom-0 border-end-0 border-5 border-secondary">
                @foreach($data->sm_icons as $key => $icon)
                    @if(array_key_exists($key, $iconPaths) && !empty($icon))
                        <a target="_blank" href="{{$icon}}">
                            <img src="{{asset($iconPaths[$key])}}" alt="{{$key}}" class="sm-icon img-fluid"/>
                        </a>
                    @endif
                @endforeach
            </div>
           @endif
             <p>{{$data->content}}</p>
           </div>
         </div>
    </div>
</section>
<section id="work-show-page" class="ptb">
  <div class="container-fluid res-container"> 
    <div class="row mx-md-3 mx-lg-3">
     @foreach ($data->work_images as $item)
      <div class="col-md-12 my-2">
          <img src="{{asset('storage/upload/work/'.$item)}}" class="img-fluid" alt=""/>
      </div>
      @endforeach
    </div>
</div>
</section>
@include('frontlayout.contactform')
@endsection
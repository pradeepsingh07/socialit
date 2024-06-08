@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner" class="blogs">
   <h1>Our latest articles <br> and insights</h1>
   <p class="para-font-hero">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio beatae, iure fuga deserunt, consequatur, dignissimos ipsam rerum saepe labore tenetur sequi ea porro aspernatur est praesentium veniam quod! Animi.</p>
</section>
<section id="blog-area" class="ptb">
   <div class="container-fluid res-container">
      <div class="row mx-md-5 mx-lg-5 g-4" id="blog-cards-group"> 
         @foreach ($datas as $data) @php $cat=""; @endphp @foreach($data->blogdata as $cat_name) @php $cat.= $cat_name->category_name @endphp @endforeach
         <x-blogcard image="{{$data->thumbnail_image}}" title="{{$data->title}}" url="{{$data->slug}}" des="{{$data->content}}" date="{{$data->created_at}}" cat="{{$cat}}"/>
         @endforeach
      </div>
      <div class="text-center mt-5">
         {{ $datas->onEachSide(1)->links() }}
      </div>
   </div>
</section>
@include('frontlayout.contactform')
@endsection

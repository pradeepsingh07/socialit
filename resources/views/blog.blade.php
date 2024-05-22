@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner" class="blogs">
   <h1>Our latest articles <br> and insights</h1>
   <p class="para-font-hero">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id distinctio beatae, iure fuga deserunt, consequatur, dignissimos ipsam rerum saepe labore tenetur sequi ea porro aspernatur est praesentium veniam quod! Animi.</p>
</section>
<section id="blog-area" class="ptb">
   <div class="container-fluid res-container">
      <div class="row mx-md-5 mx-lg-5 g-4" id="blog-cards-group"> 
                   
      </div>
      <div class="text-center mt-5">
         <button class="btn btn-primary" id="loadmorebtn" data-page="0" onclick="showcard()">Load More <i class="bi bi-arrow-right"></i></button>
      </div>
   </div>
</section>
@include('frontlayout.contactform')
@endsection
@push('js')
<script>  
 function showcard(){  
    var page = $('#loadmorebtn').data('page');     
    $.ajax({
      url:"{{route('front.cardshow')}}",
      type:"GET",
      data:{'page':page},
      success:function(res){
         $('#blog-cards-group').append(res.html);      
         $('#loadmorebtn').data('page',page + 1); 
      }
    })  
 }
 showcard();
</script>    
@endpush
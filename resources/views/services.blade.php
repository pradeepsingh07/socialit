@extends('frontlayout.mainlayout')
@section('section')
<section id="hero-banner">
    <h1>Services</h1>
    <p class="para-font-hero">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi esse culpa, earum, nostrum, nemo exercitationem ipsa facilis accusamus beatae omnis eius hic iusto et porro quod aperiam laudantium illo nulla quaerat rerum libero nisi eveniet delectus. Quos illo voluptate aliquam culpa excepturi placeat nemo accusamus vel, amet omnis quas! Ex.</p>
    <div class="gap-md-3 gap-3 d-flex">
        <a class="btn btn-outline-primary">Case Study</a>
        <a class="btn btn-primary">Schedule a Meeting</a>    
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
@endsection
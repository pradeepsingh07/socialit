@extends('frontlayout.mainlayout')
@section('section')
 <section id="blog-content" class="ptb">
 <div class="container-fluid mt-5">
    <div class="row mx-md-5 mx-lg-5">  
        <div class="col-lg-8">
            <article class="custom-shadow p-4 mb-4 bg-white rounded">
                <h1 class="blog-title mb-3">{{$data->title}}</h1>
                <p class="text-muted"><time datetime="2023-01-01">January 1, 2023</time></p>
                <img src="{{asset('storage/upload/'.$data->thumbnail_image)}}" class="img-fluid post-img mb-4" alt="Blog Post Image">
                <p>{!! htmlspecialchars_decode($data->content) !!}</p>
                </article>
        </div>
        <div class="col-lg-4">        
            <div class="p-4 mb-4 bg-white rounded custom-shadow">
                <h4 class="fst-italic mb-3">Recent Posts</h4>
                <div class="list-group sidebar">
                    <a href="#" class="list-group-item">Post 1</a>
                    <a href="#" class="list-group-item">Post 2</a>
                    <a href="#" class="list-group-item">Post 3</a>
                </div>
            </div>
        </div>
    </div>
 </div>
 </section>
@include('frontlayout.contactform')
@endsection
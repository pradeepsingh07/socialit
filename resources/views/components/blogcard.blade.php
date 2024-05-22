<div class="col-12 col-sm-2 col-md-4 col-lg-4">
    <a href="{{route('front.blogurl',$url)}}">
       <div class="card h-100">
          <img data-src="{{asset('storage/upload/'.$image)}}" src="{{asset('storage/upload/'.$image)}}" class="img-fluid lazy" alt=""/> 
          <div class="card-body">
             {{-- <div class="card-title date">{{date('d M Y',strtotime($date))}}</div> --}}
             <h2 class="title">{{$title}}</h2>
             <p class="des">{{substr(strip_tags(htmlspecialchars_decode($des)),0,100).'...'}}</p>
          </div>
          <div class="card-footer d-flex">
             <div class="authorname">{{date('d M Y',strtotime($date))}}</div>
             <div class="category">{{$cat}}</div>
          </div>
       </div>
    </a>
 </div>
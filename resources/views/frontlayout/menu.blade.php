<section id="navbar">
  <nav class="navbar navbar-expand-lg">
     <div class="container-fluid">
        <a class="navbar-brand" href="{{route('front.index')}}">
         <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="logo">
       </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown has-megamenu">
                 <a class="nav-link dropdown-toggle"  data-bs-auto-close="false" href="#" data-bs-toggle="dropdown">Services</a>
                 <div id="drop-show-menu" class="dropdown-menu megamenu" role="menu">
                    <div class="container-fluid">
                       <div class="row row-cols-2 row-cols-md-4 row-cols-lg-4 g-2 g-lg-3">
                          <div class="col col-12">
                             <a href="{{route('front.webdevelopment')}}"><h6 class="title bg-pink"> <i class="bi bi-code-slash"></i> Web Development</h6></a>
                          </div>
                          <div class="col col-12">
                             <a href=""><h6 class="title bg-purple"> <i class="bi bi-volume-up"></i> Digital marketing</h6></a>
                          </div>
                          <div class="col col-12">
                             <a href=""><h6 class="title bg-green"> <i class="bi bi-tv"></i> Social Media Marketing</h6></a>
                          </div>
                          <div class="col col-12">
                             <a href=""><h6 class="title bg-yellow"> <i class="bi bi-phone"></i> App Development</h6></a>
                          </div>
                          <div class="col col-12">
                             <a href=""><h6 class="title bg-lightgreen"><i class="bi bi-easel2"></i> UI/UX Design</h6></a>
                          </div>
                          <div class="col col-12">
                           <a href=""><h6 class="title bg-skyblue"><i class="bi bi-easel2"></i> Graphic Design</h6></a>
                          </div>
                          <div class="col col-12">
                           <a href=""><h6 class="title bg-orange"><i class="bi bi-easel2"></i> search engine optimization</h6></a>
                          </div>
                          <div class="col col-12">
                           <a href=""><h6 class="title bg-lightblack"><i class="bi bi-easel2"></i> branding & advertising</h6></a>
                          </div>
                       </div>
                    </div>                   
                 </div>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="{{route('front.work')}}">works</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="{{route('front.career')}}">career</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="{{route('front.blog')}}">blogs</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link contact-us" href="{{route('front.contact')}}">contact us</a>
              </li>
           </ul>
        </div>
     </div>
     <div class="overlay mobile"></div>    
  </nav>
</section>

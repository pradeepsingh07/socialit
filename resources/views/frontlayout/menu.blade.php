<section id="navbar">
    <nav class="navbar navbar-expand-lg mx-lg-5 mx-md-5 ">
     <div class="container-fluid">
        <a class="navbar-brand" href="{{route('front.index')}}">
         <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="logo">
        </a>       
        <a href="javascript:void(0);"class="mobile-menu-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
          <div class="hamburger hamburger--slider js-hamburger">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
          </div>
         </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item dropdown has-megamenu">
                 <a class="nav-link dropdown-toggle"  data-bs-auto-close="false" href="#" data-bs-toggle="dropdown">Services</a>
                 <div id="drop-show-menu" class="dropdown-menu megamenu" role="menu">
                    <div class="container-fluid ">
                       <div class="row mx-md-5 mx-lg-5">
                        <div class="col-md-4 col-lg-4 col-12">
                           <h6 class="">Marketing</h6>
                            <ul class="list-group border-0 mt-4">
                              <a href="{{route('front.smm')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Social Media Marketing</li></a>
                              <a href="{{route('front.seo')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Search Engine Optimization (SEO)</li></a>
                              <a href="{{route('front.sem')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Search Engine Marketing (SEM)</li></a>
                              <a href="{{route('front.gmb')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Google My Business</li></a>
                              <a href="{{route('front.a')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Advertisement</li></a>
                            </ul>
                         </div>
                         <div class="col-md-4 col-lg-4 col-12">
                           <h6 class="">Development</h6>
                           <ul class="list-group border-0 mt-4">
                              <a href="{{route('front.ecd')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>E-commerce Development</li></a>
                              <a href="{{route('front.webdevelopment')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Web Development</li></a>
                              <a href="{{route('front.ad')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>App Development</li></a>
                            </ul>                          
                         </div>
                         <div class="col-md-4 col-lg-4 col-12">
                           <h6 class="">Design</h6>
                           <ul class="list-group border-0 mt-4">
                              <a href="{{route('front.l')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Logo Design</li></a>
                              <a href="{{route('front.ba')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Branding & Packaging</li></a>
                              <a href="{{route('front.pm')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Print Media</li></a>
                              <a href="{{route('front.uiux')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>UI/UX Design</li></a>
                              <a href="{{route('front.db')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Digital Banners</li></a>
                              <a href="{{route('front.mg')}}"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Motion Graphics</li></a>
                            </ul>
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
           </ul>
           <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
             <li class="nav-item">
               <a class="nav-link contact-us" href="{{route('front.contact')}}"><i class="bi bi-telephone-fill"></i> 6375610393</a>
             </li>
             <li class="nav-item">
               <a class="nav-link demo" href="{{route('front.contact')}}">Get Started</a>
             </li>
            </ul>
        </div>       
     </div>       
  </nav>
   <div class="offcanvas offcanvas-start" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-body bg-mobile-menu" id="mobile-menu-nav">
      <div class="accordion accordion-flush" id="accordionFlushExample">
         <div class="accordion-item">
           <h2 class="accordion-header">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
               Marketing
             </button>
           </h2>
           <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
             <div class="accordion-body">
               <ul class="list-group border-0 mt-2">
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Social Media Marketing</li></a>
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Search Engine Optimization (SEO)</li></a>
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Search Engine Marketing (SEM)</li></a>
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Google My Business</li></a>
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Advertisement</li></a>
                </ul>
            </div>
           </div>
         </div>
         <div class="accordion-item">
           <h2 class="accordion-header">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
               Development
             </button>
           </h2>
           <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
             <div class="accordion-body">
               <ul class="list-group border-0 mt-2">
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>E-commerce Development</li></a>
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Web Development</li></a>
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>App Development</li></a>
                </ul> 
               </div>
           </div>
         </div>
         <div class="accordion-item">
           <h2 class="accordion-header">
             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
               Design
             </button>
           </h2>
           <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
             <div class="accordion-body">
               <ul class="list-group border-0 mt-2">
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Logo Design</li></a>
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Branding & Packaging</li></a>
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Print Media</li></a>
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>UI/UX Design</li></a>
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Digital Banners</li></a>
                  <a href="#"><li class="list-group-item border-0 px-0 py-0"><i class="bi bi-chevron-right"></i>Motion Graphics</li></a>
                </ul>            
            </div>
           </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <a href="https://google.com" class="accordion-button single-btn" type="button">Works</a>
            </h2>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <a href="https://google.com" class="accordion-button single-btn" type="button">Career</a>
            </h2>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <a href="https://google.com" class="accordion-button single-btn" type="button">Blogs</a>
            </h2>
          </div>
       </div>
   </div>
   </div>
</section>

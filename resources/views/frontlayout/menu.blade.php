<section id="navbar">
  <nav class="navbar navbar-expand-lg mx-lg-5 mx-md-5">
      <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('front.index') }}">
              <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="logo">
          </a>
          <a href="javascript:void(0);" class="mobile-menu-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
              <div class="hamburger hamburger--slider js-hamburger">
                  <div class="hamburger-box">
                      <div class="hamburger-inner"></div>
                  </div>
              </div>
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item dropdown has-megamenu">
                      <a class="nav-link dropdown-toggle" data-bs-auto-close="false" href="#" data-bs-toggle="dropdown">Services</a>
                      <div id="drop-show-menu" class="dropdown-menu megamenu" role="menu">
                          <div class="container-fluid">
                              <div class="row mx-md-5 mx-lg-5">
                                  <div class="col-md-4 col-lg-4 col-12">
                                      <h6>Marketing</h6>
                                      <x-marketing />
                                  </div>
                                  <div class="col-md-4 col-lg-4 col-12">
                                      <h6>Development</h6>
                                      <x-dev />
                                  </div>
                                  <div class="col-md-4 col-lg-4 col-12">
                                      <h6>Design</h6>
                                      <x-design />
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route(config('constant.work')) }}">Works</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route(config('constant.career')) }}">Career</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route(config('constant.blog')) }}">Blogs</a>
                  </li>
              </ul>
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link contact-us" href="{{ route('front.contact') }}"><i class="bi bi-telephone-fill"></i> 6375610393</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link demo" href="{{ route('front.contact') }}">Get Started</a>
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
                          <x-marketing />
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
                          <x-dev />
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
                          <x-design />
                      </div>
                  </div>
              </div>
              <div class="accordion-item">
                  <h2 class="accordion-header">
                      <a href="{{ route(config('constant.work')) }}" class="accordion-button single-btn" type="button">Works</a>
                  </h2>
              </div>
              <div class="accordion-item">
                  <h2 class="accordion-header">
                      <a href="{{ route(config('constant.career')) }}" class="accordion-button single-btn" type="button">Career</a>
                  </h2>
              </div>
              <div class="accordion-item">
                  <h2 class="accordion-header">
                      <a href="{{ route(config('constant.blog')) }}" class="accordion-button single-btn" type="button">Blogs</a>
                  </h2>
              </div>
              <div class="accordion-item">
                  <h2 class="accordion-header">
                      <a href="https://google.com" class="accordion-button single-btn demo" type="button">Get Started</a>
                  </h2>
              </div>
          </div>
      </div>
  </div>
</section>

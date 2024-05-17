<aside class="sidebar-dark">
    <div class="mobile-close-sidebar-panel w-100 h-100" onclick="closeMobileMenu()" id="mobile_close_panel"></div>
    <div class="main-sidebar" id="mobile_menu_collapse">
       <div class="sidebar-brand-box dropdown cursor-pointer ">
          <div class="dropdown-toggle sidebar-brand d-flex align-items-center justify-content-between  w-100" type="link" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <div class="sidebar-brand-name">
                <h1 class="mb-0 f-16 f-w-500 text-white-shade mt-0" data-placement="bottom" data-toggle="tooltip" data-original-title="">Social IT
                   <i class="icon-arrow-down icons pl-2"></i>
                </h1>
                <div class="mb-0">
                   <p class="f-13 text-lightest mb-0" data-placement="bottom" data-toggle="tooltip" data-original-title="Mr. Fletcher Berge">Mr. Admin</p>
                </div>
             </div>                 
          </div>
          <div class="dropdown-menu dropdown-menu-right sidebar-brand-dropdown ml-3" aria-labelledby="dropdownMenuLink" tabindex="0">
            <a class="dropdown-item d-flex justify-content-between align-items-center f-15 text-dark" href="#">Logout</a>
          </div>
       </div>
       <div class="sidebar-menu " id="sideMenuScroll">
          <ul>
            <x-sidebarmenu title="Dashboard" icon='home' href="{{route('back.dashboard')}}" innertitle="Dashboard"/>
            <x-sidebarmenu title="Testimonial" icon='sliders-h' href="{{route('testimonial.index')}}" innertitle="All Testimonial"/>
            <x-sidebarmenu title="Career" icon='graduation-cap' href="" innertitle="All Career"/>
            <x-sidebarmenu title="Blog" icon='book' href="" innertitle="All Blogs"/>
            <x-sidebarmenu title="Job Resume" icon='graduation-cap' href="" innertitle="All Job Resume"/>
            <x-sidebarmenu title="Contacts" icon='address-book' href="" innertitle="All Contacts"/>
            <x-sidebarmenu title="Newsletter" icon='newspaper' href="" innertitle="All Newsletter"/>
            <li class="accordionItem closeIt">
               <a class="text-decoration-none nav-item text-lightest f-15 sidebar-text-color" title="Logout">
                  <i class="fas fa-power-off"></i>
                   <span class="ps-3">Logout</span>                     
               </a>
            </li>          
          </ul>
       </div>
    </div>
    <div class="text-center d-flex justify-content-between align-items-center position-fixed sidebarTogglerBox ">
       <button class="border-0 d-lg-block d-none text-lightest font-weight-bold" id="sidebarToggle"></button>            
    </div>
 </aside>
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
            <a class="dropdown-item d-flex justify-content-between align-items-center f-15 text-dark" href="#">Logout </a>
          </div>
       </div>
       <div class="sidebar-menu " id="sideMenuScroll">
          <ul>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Dashboard
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <a href="#">Dashboard</a>
                      </div>
                    </div>
                  </div>
             </div>
             {{-- <li class="accordionItem closeIt">
                <a class="nav-item text-lightest f-15 sidebar-text-color accordionItemHeading " title="Dashboard">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                      class="bi bi-house" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                         d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                      <path fill-rule="evenodd"
                         d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                   </svg>
                   <span class="pl-3">Dashboard</span>
                   <i class="bi bi-chevron-right"></i>
                </a>
                <div class="accordionItemContent pb-2">
                   <a class="f-14 text-lightest" href="" title="Private Dashboard">Dashboard
                   </a>                       
                </div>
             </li>   
             <li class="accordionItem closeIt"> 
               <a class="nav-item text-lightest f-15 sidebar-text-color" href="#" title="Clients">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"></path>
                   <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"></path>
                   </svg>
                 <span class="pl-3">New</span>
                  </a> 
            </li>          --}}
          </ul>
       </div>
    </div>
    <div class="text-center d-flex justify-content-between align-items-center position-fixed sidebarTogglerBox ">
       <button class="border-0 d-lg-block d-none text-lightest font-weight-bold" id="sidebarToggle"></button>            
    </div>
 </aside>
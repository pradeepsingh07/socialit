@extends('admin.backlayout.mainlayout')
@section('section')
<div class="body-wrapper clearfix">
   <section class="main-container bg-additional-grey mb-5 mb-sm-0" id="fullscreen">
      <div class="preloader-container d-flex justify-content-center align-items-center">
         <div class="spinner-border" role="status" aria-hidden="true"></div>
      </div>
      <div class="page-title d-block d-lg-none">
         <div class="page-heading">
            <h2 class="mb-0 pr-3 text-dark f-18 font-weight-bold d-flex align-items-center">
               <span class="d-inline-block text-truncate mw-300">Dashboard</span>
               <span class="text-lightest f-12 f-w-500 ml-2 mw-250 text-truncate">
               <a href="#" class="text-lightest">Home</a> &bull;
               Dashboard
               </span>
            </h2>
         </div>
      </div>
      <div class="px-4 py-2 border-top-0 emp-dashboard">
         <div class="d-lg-flex d-md-flex d-block py-3 pb-4 align-items-center">
            <div>
               <h3 class="heading-h3 mb-0 f-21 font-weight-bold">Welcome Mr.Admin</h3>
            </div>                
         </div>              
      </div>
      <div class="col-xl-7 col-lg-12 col-md-12 e-d-tasks-projects-events">
               <div class="row mb-3 mt-xl-0 mt-lg-4 mt-md-4 mt-4">                     
                  <div class="col-md-6 mb-3">
                     <div class="bg-white p-20 rounded b-shadow-4 d-flex justify-content-between align-items-center mt-3 mt-lg-0 mt-md-0">
                        <div class="d-block text-capitalize">
                           <h5 class="f-15 f-w-500 mb-20 text-darkest-grey"> Projects </h5>
                           <div class="d-flex">
                              <a href="#">
                                 <p class="mb-0 f-21 font-weight-bold text-blue d-grid mr-5">
                                    6
                                 </p>
                              </a>                                   
                           </div>
                        </div>                           
                     </div>
                  </div>                      
               </div>                   
            </div>
         </div>
      </div>
   </section>
</div> 
@endsection


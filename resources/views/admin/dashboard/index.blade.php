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
      <div class="col-md-4">
          <div class="card">
             <div class="card-header">Total Clients</div>
          </div>
      </div>      
      </div>
      </div>
   </section>
</div> 
@endsection


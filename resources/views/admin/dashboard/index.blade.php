<x-adminlayout title="Dashboard"> 
   <div class="px-4 py-2 border-top-0 emp-dashboard">
      <div class="d-lg-flex d-md-flex d-block py-3 pb-4 align-items-center">
         <div>
            <h3 class="heading-h3 mb-0 f-21 font-weight-bold">Welcome {{ucwords(Auth::guard('admin_login')->user()->name)}}</h3>
         </div>                
      </div>              
   </div>
   <div class="content-wrapper">
      <div class="container-fluid">
          <div class="row">        
            <x-dashboardcard name="Testimonial" icon="star" href="{{route('testimonial.index')}}" count="{{$testimonial}}"/>
            <x-dashboardcard name="Career" icon="graduation-cap" href="{{route('career.index')}}" count="{{$career}}"/>
            <x-dashboardcard name="Contact" icon="phone-alt" href="{{route('contact.index')}}" count="{{$contact}}"/>
            <x-dashboardcard name="Resume" icon="graduation-cap" href="{{route('jobresume.index')}}" count="{{$resume}}"/>
          </div>
      </div> 
   </div>
</x-adminlayout>
<x-adminlayout title="Testimonial"> 
    <div class="content-wrapper">
        <div>
            <a href="{{route('testimonial.create')}}" class="btn btn-primary f-14"><i class="fas fa-plus"></i> Add Testimonial</a>
        </div>  
        <div class="card border-0 mt-3 p-3" id="table-card">           
            <table class="table table-bordered" id="datatable">
                <thead>
                 <tr>
                     <th>Sr No</th>
                     <th>Name</th>
                     <th>Image</th>
                     <th>Rating</th>
                     <th>Content</th>
                     <th>Status</th>
                     <th>Action</th>
                 </tr>
                </thead>
                 <tbody>                   
                 </tbody>
            </table>
        </div>             
    </div>
@push('js')
<script>  
    new DataTable('#datatable', {
     ajax: '{{route('testimonial.getdata')}}',
     processing: true,
     serverSide: true,   
     columns: [ 
            { data:'index'},
            { data:'name'}, 
            { data:'image'},
            { data:'rating'}, 
            { data:'review'},    
            { data:'status'},
            { data:'action'},
      ]     
    });
</script>  
@endpush   
 </x-adminlayout>

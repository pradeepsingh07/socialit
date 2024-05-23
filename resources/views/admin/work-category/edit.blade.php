<x-adminlayout title="Edit Category"> 
    <div class="content-wrapper">
        <div>
            <a href="{{route('work-category.index')}}" class="btn btn-primary f-14"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
        </div> 
        <div class="card mt-3">
           <div class="card-header py-3"><h5>Edit Category</h5></div>
           <div class="card-body">
              <form id="submitform" method="post">
                @csrf
                @method('put')
                 <div class="row">
                     <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Category Name</label>
                            <input value="{{$data->category_name}}" type="text" name="c_name" class="form-control f-14" placeholder="Category Name"/>
                        </div>                        
                     </div>                        
                 </div>
                 <button class="btn btn-primary f-14" id="submitbtn">Update <i class="fas fa-long-arrow-alt-right"></i></button>
              </form>              
           </div>
        </div>                     
    </div>    
@push('js')
<script>
    $('#submitform').on('submit',function(e){
        e.preventDefault();
        $('#submitbtn').html('<div class="spinner-border" role="status"></div> Loading...');
        $('#submitbtn').attr('disabled',true)
        const formdata = new FormData(this);
        $.ajax({
            url:"{{route('work-category.update',"$data->id")}}",
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success:function(res){
                     if(res.code == 200){
                       window.location.href="{{route('work-category.index')}}"
                     }                    
                     $('#submitbtn').html('Update <i class="fas fa-long-arrow-alt-right"></i>');
                     $('#submitbtn').attr('disabled',false)     
                }
            }) 
    }); 
</script>        
@endpush
</x-adminlayout>

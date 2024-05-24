<x-adminlayout title="Create Work"> 
    <div class="content-wrapper">
        <div>
            <a href="{{route('blog.index')}}" class="btn btn-primary f-14"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
        </div> 
        <div class="card mt-3">
           <div class="card-header py-3"><h5>Create Work</h5></div>
           <div class="card-body">
              <form id="submitform" method="post" class="d-zone" enctype="multipart/form-data">
                @csrf
                @method('post')
                 <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Work Category <span class="text-danger">*</span></label>
                            <select name="category" class="form-control f-14">
                                <option>Select Category</option>
                                @foreach ($datas as $data)
                                     @if($data->category_name != 'All') 
                                      <option value="{{$data->id}}">{{$data->category_name}}</option>
                                     @endif
                                @endforeach
                            </select>
                        </div>                        
                     </div> 
                     <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control f-14" placeholder="Title (Like Brand Name)"/>
                        </div>                        
                     </div>  
                     <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Thumbnail Image <span class="text-danger">*</span> (Size:1280X1438)</label>
                            <input type="file" class="form-control file" name="t_image"/>
                        </div>                        
                     </div> 
                     <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Content (Like About Brand) <span class="text-danger">*</span></label>
                            <textarea id="content" class=" height-content-cus form-control" name="content"></textarea>
                        </div>                        
                     </div>
                     <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Work Images (Multipule Upload)<span class="text-danger">*</span></label>
                            <input type="file" class="form-control" name="workimages[]" id="images" multiple/>
                        </div>
                        <div class="mb-3">
                            <div class="row g-4" id="imagePreview"></div>
                        </div>
                     </div>                      
                 </div>
                 <button class="btn btn-primary f-14" id="submitbtn">Submit <i class="fas fa-long-arrow-alt-right"></i></button>
              </form>              
           </div>
        </div>                     
    </div>    
@push('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $('#submitform').on('submit',function(e){
        e.preventDefault();
        $('#submitbtn').html('<div class="spinner-border" role="status"></div> Loading...');
        $('#submitbtn').attr('disabled',true)
        const formdata = new FormData(this);
        $.ajax({
            url:"{{route('work.store')}}",
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success:function(res){
                     if(res.code == 200){
                       window.location.href="{{route('work.index')}}"
                     }                    
                     $('#submitbtn').html('Submit <i class="fas fa-long-arrow-alt-right"></i>');
                     $('#submitbtn').attr('disabled',false)     
                }
            }) 
    });  
    $(document).ready(function() {
    $('#images').on('change', function(e) {
        var files = e.target.files;
        $('#imagePreview').html('');
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#imagePreview').append('<div class="col-md-3"><div class="card"><img src="' + e.target.result + '"></div></div>');
            }
            reader.readAsDataURL(file);
        }
    });
});
</script>        
@endpush
</x-adminlayout>
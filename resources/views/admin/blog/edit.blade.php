<x-adminlayout title="Edit Blog"> 
    <div class="content-wrapper">
        <div>
            <a href="{{route('blog.index')}}" class="btn btn-primary f-14"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
        </div> 
        <div class="card mt-3">
           <div class="card-header py-3"><h5>Edit Blog</h5></div>
           <div class="card-body">
              <form id="submitform" method="post">
                @csrf
                @method('put')
                 <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Blog Category</label>
                            <select name="category" class="form-control f-14">
                                <option>Select Category</option>
                                @foreach ($cates as $cate)
                                     <option {{$cate->id ==  $data->c_id ? 'selected' : ''}} value="{{$cate->id}}">{{$cate->category_name}}</option>
                                @endforeach
                            </select>
                        </div>                        
                     </div> 
                     <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Blog Title</label>
                            <input value="{{$data->title}}" type="text" name="title" class="form-control f-14" placeholder="Category Name"/>
                        </div>                        
                     </div>  
                     <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Thumbnail Image</label>
                            <input data-default-file="{{asset('storage/upload/'.$data->thumbnail_image)}}" type="file" class="form-control file" name="t_image"/>
                        </div>                        
                     </div> 
                     <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Content</label>
                            <textarea id="content" class="form-control" name="content">{!! $data->content !!}</textarea>
                        </div>                        
                     </div>                      
                 </div>
                 <button class="btn btn-primary f-14" id="submitbtn">Update <i class="fas fa-long-arrow-alt-right"></i></button>
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
            url:"{{route('blog.update',"$data->id")}}",
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success:function(res){
                     if(res.code == 200){
                       window.location.href="{{route('blog.index')}}"
                     }                    
                     $('#submitbtn').html('Update <i class="fas fa-long-arrow-alt-right"></i>');
                     $('#submitbtn').attr('disabled',false)     
                }
            }) 
    }); 
     $('#content').summernote({  
            fontNames: ['Poppins', 'Arial Black', 'Comic Sans MS', 'Courier New'],         
            callbacks: {
            onImageUpload: function(files, editor, welEditable) {
                sendFile(files[0], editor, welEditable);
            },            
        }
     });
  function sendFile(file, editor, welEditable) {
    data = new FormData();
    data.append("file", file);
    data.append("_token","{{csrf_token()}}");
    $.ajax({
      data: data,
      type: "POST",
      url: "{{route('blog.upload.image')}}",
      cache: false,
      contentType: false,
      processData: false,
      success: function(res) {
        $('#content').summernote('insertImage', res.url);
      }
    });
  }
</script>        
@endpush
</x-adminlayout>

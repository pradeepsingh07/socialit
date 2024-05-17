<x-adminlayout title="Edit Testimonial"> 
    <div class="content-wrapper">
        <div>
            <a href="{{route('testimonial.index')}}" class="btn btn-primary f-14"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
        </div> 
        <div class="card mt-3">
           <div class="card-header py-3"><h5>Edit Testimonial</h5></div>
           <div class="card-body">
              <form id="submitform" method="post">
                @csrf
                @method('put')
                 <div class="row">
                     <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Client Name</label>
                            <input value="{{$data->name}}" type="text" name="c_name" class="form-control f-14" placeholder="Client Name"/>
                        </div>                        
                     </div>
                     <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Client Rating</label>
                            <select class="form-control f-14" name="c_rating">                      
                              <option {{$data->rating == '4' ? 'selected' : ''}} value="4">4</option>
                              <option {{$data->rating == '4.5' ? 'selected' : ''}} value="4.5">4.5</option>
                              <option {{$data->rating == '5' ? 'selected' : ''}} value="5">5</option>
                            </select> 
                        </div>                               
                    </div>
                    <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label">Client Image</label>
                            <input data-default-file="{{asset('storage/upload/'.$data->image)}}" type="file" name="c_image" class="file"/>
                          </div>                      
                    </div>
                    <div class="col-md-6">
                         <div class="mb-3">
                            <label class="form-label">Client Review</label>
                            <textarea name="c_review" placeholder="Client Message here" class="form-control f-14" id="client-review">{{$data->review}}</textarea>
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
                url:"{{route('testimonial.update',"$data->id")}}",
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                success:function(res){
                     if(res.code == 200){
                       window.location.href="{{route('testimonial.index')}}"
                     }                    
                     $('#submitbtn').html('Update <i class="fas fa-long-arrow-alt-right"></i>');
                     $('#submitbtn').attr('disabled',false)     
                }
            }) 
        });
    </script>        
@endpush
 </x-adminlayout>

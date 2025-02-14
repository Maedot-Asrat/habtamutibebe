@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Category</h5>
    <div class="card-body">
      <form method="post" action="{{route('blog.update',$blogs->id)}}">
        @csrf 
        @method('PATCH')
        
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>

          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Header Image</label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose header photo
                  </a>
              </span>
          <input id="thumbnail" class="form-control" type="text" name="headerphoto" value="{{$blogs->headerphoto}}">
        </div>
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{$blogs->title}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="description" class="col-form-label">Blog Detail</label>
          <textarea class="form-control" id="description" name="description">{{$blogs->description}}</textarea>
          @error('summary')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="publish_date" class="col-form-label">Publish Date <span class="text-danger">*</span></label>
          <input id="publish_date" type="date" name="publish_date" class="form-control" value="{{ $blogs->publish_date }}">
          @error('publish_date')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="is_parent">Is Parent</label><br>
          <input type="checkbox" name='is_parent' id='is_parent' value='1' checked> Yes                        
        </div>
        {{-- {{$blogcategories}} --}}

        <div class="form-group" id='parent_cat_div'>
          <label for="blogcat_id">Blog Category</label>
          <select name="blogcat_id" class="form-control">
              <option value="">--Select any category--</option>
              @foreach($blogcategories as $key=>$blogcat_data)
                  <option value='{{$blogcat_data->id}}'>{{$blogcat_data->title}}</option>
              @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="video_link" class="col-form-label">Add a video_link</label>
          <textarea class="form-control" id="video_link" name="video_link">{{$blogs->video_link}}</textarea>
          @error('video_link')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Insert Photo</label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm2" data-input="headerholder" data-preview="imageholder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
          <input id="headerholder" class="form-control" type="text" name="photo" value="{{$blogs->photo}}">
        </div>
        
        <div id="imageholder" style="margin-top:15px;max-height:100px;"></div>

          @error('photo1')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        

        <div class="form-group">
          <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
          <select name="status" class="form-control">
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
          <button type="reset" class="btn btn-warning">Reset</button>
           <button class="btn btn-success" type="submit">Submit</button>
        </div>
      </form>
    </div>
</div>




<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">


<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');
    $('#lfm2').filemanager('image');
    $('#lfm3').filemanager('image');
    $('#lfm4').filemanager('image');
    $('#lfm5').filemanager('image');
    $('#lfm6').filemanager('image');

    // $(document).ready(function() {
    // $('#summary').summernote({
    //   placeholder: "Write short description.....",
    //     tabsize: 2,
    //     height: 150
    // });
    // });
</script>
<script>
  $('#is_parent').change(function(){
    var is_checked=$('#is_parent').prop('checked');
    // alert(is_checked);
    if(is_checked){
      $('#parent_cat_div').addClass('d-none');
      $('#parent_cat_div').val('');
    }
    else{
      $('#parent_cat_div').removeClass('d-none');
    }
  })
</script>
@endsection
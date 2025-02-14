
@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Artwork</h5>
    <div class="card-body">
      <form method="post" action="{{route('art.store')}}">
        {{csrf_field()}}
        
        {{--$artcategories--}} 

        <div class="form-group" id='parent_cat_div'>
          <label for="artcat_id">Art Category</label>
          <select name="artcat_id" class="form-control">
              <option value="">--Select any category--</option>
              @foreach($artcategories as $key=>$artcat_data)
                  <option value='{{$artcat_data->id}}'>{{$artcat_data->title}}</option>
              @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Insert Photo</label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="headerholder" data-preview="imageholder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
          <input id="headerholder" class="form-control" type="text" name="photo" value="{{old('photo')}}">
        </div>
        
        <div id="imageholder" style="margin-top:15px;max-height:100px;"></div>

          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{old('title')}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="description" class="col-form-label">Art Detail</label>
          <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="publish_date" class="col-form-label">Publish Date</span></label>
          <input id="publish_date" name="publish_date" class="form-control" value="{{ old('publish_date') }}">
          @error('publish_date')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="is_parent">Is Parent</label><br>
          <input type="checkbox" name='is_parent' id='is_parent' value='1' checked> Yes                        
        </div>
        
        <div class="form-group">
          <label for="size" class="col-form-label">Add size</label>
          <textarea class="form-control" id="size" name="size">{{old('size')}}</textarea>
          @error('size')
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
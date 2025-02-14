
@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Interview</h5>
    <div class="card-body">
      <form method="post" action="{{route('interview.store')}}">
        {{csrf_field()}}
       
        <div class="form-group">
          <label for="inputLink" class="col-form-label">Link <span class="text-danger">*</span></label>
          <input id="inputLink" type="text" name="link" placeholder="Enter link"  value="{{old('link')}}" class="form-control">
          @error('link')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="description" class="col-form-label">description</label>
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
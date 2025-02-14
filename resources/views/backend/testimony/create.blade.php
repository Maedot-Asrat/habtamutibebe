@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Testimony</h5>
    <div class="card-body">
      <form method="post" action="{{route('testimony.store')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label for="class" class="col-form-label">Language <span class="text-danger">*</span></label>
          <select name="class" class="form-control">
              <option value="eng">English</option>
              <option value="amh">Amharic</option>
          </select>
          @error('class')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Title/Position <span class="text-danger"></span></label>
          <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{old('title')}}" class="form-control">
          @error('title')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
            <label for="inputTitle" class="col-form-label">Full Name <span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="full_name" placeholder="Enter full name"  value="{{old('full_name')}}" class="form-control">
            @error('full_name')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        <div class="form-group">
          <label for="testimony" class="col-form-label">Testimony</label>
          <textarea class="form-control" name="testimony">{{old('testimony')}}</textarea>
          @error('testimony')
          <span class="text-danger">{{$message}}</span>
          @enderror
</div>
        <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Photo</label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
          <input id="thumbnail" class="form-control" type="text" name="photo" value="{{old('photo')}}">
        </div>
        <div id="holder" style="margin-top:15px;max-height:100px;"></div>

          @error('photo')
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
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');

    $(document).ready(function() {
      $('#summary').summernote({
        placeholder: "Write short description.....",
          tabsize: 2,
          height: 120
      });
    });
</script>

@endsection
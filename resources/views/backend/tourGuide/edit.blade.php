@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Selected Tour Guide</h5>
    <div class="card-body">
      <form method="post" action="{{route('tourGuide.update',$tour_guides->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="class" class="col-form-label">Language <span class="text-danger">*</span></label>
          <select name="class" class="form-control">
            <option value="eng" {{(($tour_guides->class=='eng') ? 'selected' : '')}}>English</option>
            <option value="amh" {{(($tour_guides->class=='amh') ? 'selected' : '')}}>Amharic</option>
          </select>
          @error('class')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Name <span class="text-danger">*</span></label>
          <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$tour_guides->name}}" class="form-control">
          @error('name')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
              <div class="form-group">
          <label for="inputPhoto" class="col-form-label">Photo </label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                      <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
              <input id="thumbnail1" class="form-control" type="text" name="photo" value="{{$tour_guides->photo}}">
          </div>
          <div id="holder1" style="margin-top:15px;max-height:100px;"></div>
          @error('photo')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="form-group">
          <label for="testimony" class="col-form-label">What languages can this guide speak?</label>
          <textarea class="form-control" name="language">{{$tour_guides->language}}</textarea>
          @error('language')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="form-group">
          <label for="testimony" class="col-form-label">Which destinations is this tour guide available at?</label>
          <textarea class="form-control" name="location">{{$tour_guides->location}}</textarea>
          @error('location')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="form-group">
          <label for="testimony" class="col-form-label">Phone</label>
          <textarea class="form-control" name="phone">{{$tour_guides->phone}}</textarea>
          @error('phone')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>

        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Update</button>
        </div>
      </form>
    </div>
</div>



@push('styles')
<link rel="stylesheet" href="{{asset('backend/summernote/summernote.min.css')}}">
@endpush

<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');
    $('#lfm-video').filemanager('video');
    $(document).ready(function() {
    $('#summary').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endsection

@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Selected Vehicle</h5>
    <div class="card-body">
      <form method="post" action="{{route('vehicle.update',$vehicles->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="class" class="col-form-label">Language <span class="text-danger">*</span></label>
          <select name="class" class="form-control">
            <option value="eng" {{(($vehicles->class=='eng') ? 'selected' : '')}}>English</option>
            <option value="amh" {{(($vehicles->class=='amh') ? 'selected' : '')}}>Amharic</option>
          </select>
          @error('class')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <div class="form-group">
            <label for="inputTitle" class="col-form-label">Car Brand<span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="brand" placeholder="{{$vehicles->brand}}"  value="{{old('brand')}}" class="form-control">
            @error('brand')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        <div class="form-group">
          <label for="testimony" class="col-form-label">Write some description</label>
          <textarea class="form-control" name="description">{{$vehicles->description}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
</div>
<div class="form-group">
  <label for="inputPhoto" class="col-form-label">Photo <span class="text-danger">*</span></label>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
          <i class="fa fa-picture-o"></i> Choose
          </a>
      </span>
    <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$vehicles->photo}}">
  </div>
  <div id="holder" style="margin-top:15px;max-height:100px;"></div>
    @error('photo')
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


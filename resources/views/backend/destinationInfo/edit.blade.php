@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Selected Destination</h5>
    <div class="card-body">
      <form method="post" action="{{route('destinationInfo.update',$destination_infos->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="class" class="col-form-label">Language <span class="text-danger">*</span></label>
          <select name="class" class="form-control">
            <option value="eng" {{(($destination_infos->class=='eng') ? 'selected' : '')}}>English</option>
            <option value="amh" {{(($destination_infos->class=='amh') ? 'selected' : '')}}>Amharic</option>
          </select>
          @error('class')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <div class="form-group">
            <label for="inputTitle" class="col-form-label">Name of Destination<span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{$destination_infos->name}}" class="form-control">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        <div class="form-group">
          <label for="testimony" class="col-form-label">Write a description</label>
          <textarea class="form-control" name="description">{{$destination_infos->description}}</textarea>
          @error('description')
          <span class="text-danger">{{$message}}</span>
          @enderror
</div>
<div class="form-group">
  <label for="inputPhoto" class="col-form-label">Photo 1<span class="text-danger">*</span></label>
  <div class="input-group">
      <span class="input-group-btn">
          <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
          <i class="fa fa-picture-o"></i> Choose
          </a>
      </span>
    <input id="thumbnail" class="form-control" type="text" name="photo1" value="{{$destination_infos->photo1}}">
  </div>
  <div id="holder" style="margin-top:15px;max-height:100px;"></div>
    @error('photo1')
    <span class="text-danger">{{$message}}</span>
    @enderror
  </div>
  <div class="form-group">
    <label for="inputPhoto" class="col-form-label">Photo 2<span class="text-danger">*</span></label>
    <div class="input-group">
        <span class="input-group-btn">
            <a id="lfm1" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
            <i class="fa fa-picture-o"></i> Choose
            </a>
        </span>
      <input id="thumbnail" class="form-control" type="text" name="photo2" value="{{$destination_infos->photo2}}">
    </div>
    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
      @error('photo2')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="inputPhoto" class="col-form-label">Photo 3<span class="text-danger">*</span></label>
      <div class="input-group">
          <span class="input-group-btn">
              <a id="lfm2" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
              <i class="fa fa-picture-o"></i> Choose
              </a>
          </span>
        <input id="thumbnail" class="form-control" type="text" name="photo3" value="{{$destination_infos->photo3}}">
      </div>
      <div id="holder" style="margin-top:15px;max-height:100px;"></div>
        @error('photo3')
        <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
          <div class="form-group">
            <label for="inputVideo" class="col-form-label">Video1</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm-video" data-input="video" data-preview="video-holder1" class="btn btn-primary">
                        <i class="fa fa-video-camera"></i> Choose
                    </a>
                </span>
                <input id="video1" class="form-control" type="text" name="video1" value="{{$destination_infos->video1}}">
            </div>
            
            @error('video1')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
          <label for="inputVideo" class="col-form-label">Video 2</label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm-video1" data-input="video" data-preview="video-holder2" class="btn btn-primary">
                      <i class="fa fa-video-camera"></i> Choose
                  </a>
              </span>
              <input id="video2" class="form-control" type="text" name="video2" value="{{$destination_infos->video2}}">
          </div>
         
          @error('video2')
          <span class="text-danger">{{$message}}</span>
          @enderror
      </div>
      <div class="form-group">
        <label for="inputVideo" class="col-form-label">Video 3</label>
        <div class="input-group">
            <span class="input-group-btn">
                <a id="lfm-video2" data-input="video" data-preview="video-holder3" class="btn btn-primary">
                    <i class="fa fa-video-camera"></i> Choose
                </a>
            </span>
            <input id="video3" class="form-control" type="text" name="video3" value="{{$destination_infos->video3}}">
        </div>
       
        @error('video3')
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
    $('#lfm1').filemanager('image');
    $('#lfm2').filemanager('image');
    $('#lfm-video').filemanager('video');
    $('#lfm-video1').filemanager('video');
    $('#lfm-video2').filemanager('video');
    $(document).ready(function() {
    $('#summary').summernote({
      placeholder: "Write short description.....",
        tabsize: 2,
        height: 150
    });
    });
</script>
@endsection

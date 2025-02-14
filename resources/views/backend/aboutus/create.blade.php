@extends('backend.layouts.master')



@section('main-content')

<div class="card">
    <h5 class="card-header">Add About us section</h5>
    <div class="card-body">
      <form method="post" action="{{route('aboutus.store')}}">
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
          <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{old('title')}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        



        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Mission</label>
          <textarea class="form-control" id="mission" name="mission">{{old('mission')}}</textarea>
          @error('mission')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Vision</label>
          <textarea class="form-control" id="vision" name="vision">{{old('vision')}}</textarea>
          @error('vision')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Goal</label>
          <textarea class="form-control" id="goal" name="goal">{{old('goal')}}</textarea>
          @error('goal')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Core Value</label>
          <textarea class="form-control" id="value" name="value">{{old('value')}}</textarea>
          @error('value')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
  
        <div class="form-group">
          <label for="inputPhoto" class="col-form-label"> Photo<span class="text-danger">*</span></label>
          <div class="input-group">
              <span class="input-group-btn">
                  <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                  <i class="fa fa-picture-o"></i> Choose
                  </a>
              </span>
            <input id="thumbnail1" class="form-control" type="text" name="photo" value="{{old('photo')}}">
          </div>
          <div id="holder1" style="margin-top:15px;max-height:100px;"></div>
            @error('photo')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
        
          <div class="form-group">
            <label for="inputVideo" class="col-form-label">Video</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm-video" data-input="video" data-preview="video-holder" class="btn btn-primary">
                        <i class="fa fa-video-camera"></i> Choose
                    </a>
                </span>
                <input id="video" class="form-control" type="text" name="video" value="{{old('video')}}">
            </div>
            <div id="video-holder" style="margin-top:15px;max-height:100px;"></div>
            @error('video')
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
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');
    $('#lfm1').filemanager('image');
    $('#lfm-video').filemanager('video');
    // $(document).ready(function() {
    // $('#description').summernote({
    //   placeholder: "Write short description.....",
    //     tabsize: 2,
    //     height: 150
    // });
    // });
</script>
@endsection
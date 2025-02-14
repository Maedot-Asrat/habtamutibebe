@extends('backend.layouts.master')
@section('main-content')

<div class="card">
    <h5 class="card-header">Edit About us section</h5>
    <div class="card-body">
      <form method="post" action="{{route('aboutus.update',$about->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="class" class="col-form-label">Language <span class="text-danger">*</span></label>
          <select name="class" class="form-control">
            <option value="eng" {{(($about->class=='eng') ? 'selected' : '')}}>English</option>
            <option value="amh" {{(($about->class=='amh') ? 'selected' : '')}}>Amharic</option>
          </select>
          @error('class')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputTitle" class="col-form-label">Title <span class="text-danger">*</span></label>
        <input id="inputTitle" type="text" name="title" placeholder="Enter title"  value="{{$about->title}}" class="form-control">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

  


        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Mission</label>
          <textarea class="form-control" id="mission" name="mission" value="{{$about->mission}}">{{$about->mission}}</textarea>
          @error('mission')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Vision</label>
          <textarea class="form-control" id="vision" name="vision" value="{{$about->vision}}">{{$about->vision}}</textarea>
          @error('vision')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Goal</label>
          <textarea class="form-control" id="goal" name="goal" value="{{$about->goal}}">{{$about->goal}}</textarea>
          @error('goal')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">Core Value</label>
          <textarea class="form-control" id="value" name="value" value="{{$about->value}}">{{$about->value}}</textarea>
          @error('value')
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
            <input id="thumbnail" class="form-control" type="text" name="photo" value="{{$about->photo}}">
          </div>
          <div id="holder" style="margin-top:15px;max-height:100px;"></div>
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
            <option value="active" {{(($about->status=='active') ? 'selected' : '')}}>Active</option>
            <option value="inactive" {{(($about->status=='inactive') ? 'selected' : '')}}>Inactive</option>
          </select>
          @error('status')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group mb-3">
           <button class="btn btn-success" type="submit">Update</button>
        </div>
      </form>
    </div>
</div>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="{{asset('backend/summernote/summernote.min.js')}}"></script>
<script>
    $('#lfm').filemanager('image');
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

@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Destination</h5>
    <div class="card-body">
      <form method="post" action="{{route('destination.store')}}">
        {{csrf_field()}}
       
        <div class="form-group">
            <label for="inputTitle" class="col-form-label">Name of Destination<span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{old('name')}}" class="form-control">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="testimony" class="col-form-label">Write some activities (one activity per line)</label>
            <textarea class="form-control" name="activity">{{old('activity')}}</textarea>
            @error('activity')
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
    $('#lfm-video').filemanager('video');

    $(document).ready(function() {
      $('#summary').summernote({
        placeholder: "Write short description.....",
          tabsize: 2,
          height: 120
      });
    });
</script>

@endsection

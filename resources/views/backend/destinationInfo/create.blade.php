@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Destination</h5>
    <div class="card-body">
      <form method="post" action="{{route('destinationInfo.store')}}">
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
            <label for="inputTitle" class="col-form-label">Name of Destination<span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{old('name')}}" class="form-control">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="testimony" class="col-form-label">Write a description</label>
            <textarea class="form-control" name="description">{{old('description')}}</textarea>
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="inputPhoto" class="col-form-label">Photo 1</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input id="thumbnail1" class="form-control" type="text" name="photo1" value="{{old('photo1')}}">
            </div>
            <div id="holder1" style="margin-top:15px;max-height:100px;"></div>
            @error('photo1')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputPhoto" class="col-form-label">Photo 2</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input id="thumbnail2" class="form-control" type="text" name="photo2" value="{{old('photo2')}}">
            </div>
            <div id="holder2" style="margin-top:15px;max-height:100px;"></div>
            @error('photo2')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputPhoto" class="col-form-label">Photo 3</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm3" data-input="thumbnail3" data-preview="holder3" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input id="thumbnail3" class="form-control" type="text" name="photo3" value="{{old('photo3')}}">
            </div>
            <div id="holder3" style="margin-top:15px;max-height:100px;"></div>
            @error('photo3')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="inputVideo" class="col-form-label">Video 1</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm-video" data-input="video1" data-preview="video-holder" class="btn btn-primary">
                        <i class="fa fa-video-camera"></i> Choose
                    </a>
                </span>
                <input id="video1" class="form-control" type="text" name="video1" value="{{old('video1')}}">
            </div>
            
            @error('video1')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputVideo2" class="col-form-label">Video 2</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm-video1" data-input="video2" data-preview="video-holder2" class="btn btn-primary">
                        <i class="fa fa-video-camera"></i> Choose
                    </a>
                </span>
                <input id="video2" class="form-control" type="text" name="video2" value="{{old('video2')}}">
            </div>
           
            @error('video2')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputVideo3" class="col-form-label">Video 3</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm-video2" data-input="video3" data-preview="video-holder3" class="btn btn-primary">
                        <i class="fa fa-video-camera"></i> Choose
                    </a>
                </span>
                <input id="video3" class="form-control" type="text" name="video3" value="{{old('video3')}}">
            </div>
            <div id="video-holder3" style="margin-top:15px;max-height:100px;"></div>
            @error('video3')
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
$('#lfm2').filemanager('image');
$('#lfm3').filemanager('image');

$('#lfm-video').filemanager('video');
$('#lfm-video1').filemanager('video');
$('#lfm-video2').filemanager('video');


    $(document).ready(function() {
      $('#summary').summernote({
        placeholder: "Write short description.....",
          tabsize: 2,
          height: 120
      });
    });
</script>

@endsection

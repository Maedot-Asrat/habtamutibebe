@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Medical Aid</h5>
    <div class="card-body">
      <form method="post" action="{{route('medicalAid.store')}}">
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
            <label for="inputTitle" class="col-form-label">Partner Hospital<span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="partner" placeholder="Enter name"  value="{{old('partner')}}" class="form-control">
            @error('partner')
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
            <label for="testimony" class="col-form-label">Emergency Phone Number</label>
            <textarea class="form-control" name="phone">{{old('phone')}}</textarea>
            @error('phone')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="inputPhoto" class="col-form-label">Photo of Hospital</label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
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
    $('#lfm2').filemanager('image');
    $('#lfm-video1').filemanager('video');
    $('#lfm3').filemanager('image');
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

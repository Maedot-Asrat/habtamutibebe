@extends('backend.layouts.master')

@section('main-content')

<div class="card">
    <h5 class="card-header">Add Branch</h5>
    <div class="card-body">
      <form method="post" action="{{route('branch.store')}}">
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
            <label for="inputTitle" class="col-form-label">Name of Branch<span class="text-danger">*</span></label>
            <input id="inputTitle" type="text" name="name" placeholder="Enter name"  value="{{old('name')}}" class="form-control">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
     
        <div class="form-group">
            <label for="testimony" class="col-form-label">Short description</label>
            <textarea class="form-control" name="description">{{old('description')}}</textarea>
            @error('description')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="inputLoc" class="col-form-label">Location<span class="text-danger">*</span></label>
            <input id="inputLoc" type="text" name="location" placeholder="Enter location"  value="{{old('location')}}" class="form-control">
            @error('location')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputEm" class="col-form-label">Email<span class="text-danger">*</span></label>
            <input id="inputEm" type="text" name="email" placeholder="Enter email"  value="{{old('email')}}" class="form-control">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputPhone" class="col-form-label">Phone<span class="text-danger">*</span></label>
            <input id="inputPhone" type="text" name="phone" placeholder="Enter phone number"  value="{{old('phone')}}" class="form-control">
            @error('phone')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputPhoto" class="col-form-label">Photo </label>
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

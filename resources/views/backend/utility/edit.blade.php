@extends('backend.layouts.master')
@section('main-content')

<div class="card">
    <h5 class="card-header">Edit Utility section</h5>
    <div class="card-body">
      <form method="post" action="{{route('utility.update',$utility->id)}}">
        @csrf 
        @method('PATCH')
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">How many doctors are there at your hospital?</label>
          <textarea class="form-control" id="doctors" name="doctors">{{$utility->doctors}}</textarea>
          @error('doctors')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">How many departments are there?</label>
          <textarea class="form-control" id="departments" name="departments">{{$utility->departments}}</textarea>
          @error('departments')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">How many years of experience does the hospital have?</label>
          <textarea class="form-control" id="experience" name="experience">{{$utility->experience}}</textarea>
          @error('experience')
          <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="inputDesc" class="col-form-label">How many happy clients do you have?</label>
          <textarea class="form-control" id="clients" name="clients">{{$utility->clients}}</textarea>
          @error('clients')
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
</script>
@endsection

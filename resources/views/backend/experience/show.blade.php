@extends('backend.layouts.master')
@section('main-content')
<div class="card">
  <h5 class="card-header">Experience</h5>
  <div class="card-body">
    @if($experince)
        
        <div class="py-4">From: <br>
           Name :{{$experience->name}}<br>
           Email :{{$experience->email}}<br>
           Phone :{{$experience->phone}}
        </div>
        <hr/>
  <h5 class="text-center" style="text-decoration:underline"><strong>Subject :</strong> {{$message->subject}}</h5>
        <p class="py-5">I visited {{$experience->place}}</p>

    @endif

  </div>
</div>
@endsection
@extends('backend.layouts.master')
@section('main-content')
<div class="card">
  <h5 class="card-header">Appointment</h5>
  <div class="card-body">
    @if($appointment)
        @if($appointment->photo)
        <img src="{{$appointment->photo}}" class="rounded-circle " style="margin-left:44%;">
        @else 
        <img src="{{asset('backend/img/avatar.png')}}" class="rounded-circle " style="margin-left:44%;">
        @endif
        <div class="py-4">From: <br>
           Name :{{$appointment->name}}<br>
           Email :{{$appointment->email}}<br>
           Phone :{{$appointment->phone}}
        </div>
        <hr/>
  <h5 class="text-center" style="text-decoration:underline"><strong>Subject :</strong>New Appointment</h5>
        <p class="py-5">{{$appointment->message}}</p>

    @endif

  </div>
</div>
@endsection
@extends('backend.layouts.master')
@section('main-content')
<div class="card">
  <div class="row">
    <div class="col-md-12">
       @include('backend.layouts.notification')
    </div>
  </div>
  <h5 class="card-header">Share Applications</h5>
  <div class="card-body">
    @if(count($applications) > 0)
    <table class="table message-table" id="share-dataTable">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($applications as $application)
        <tr class="@if($application->read_at) border-left-success @else bg-light border-left-warning @endif">
          <td scope="row">{{$loop->index + 1}}</td>
          <td>{{$application->name_to_grandmother}}</td>
          <td>{{$application->mobile_phone}}</td>
          <td>{{$application->created_at->format('F d, Y h:i A')}}</td>
          <td>
            <a href="{{route('shareapp.show', $application->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="View" data-placement="bottom"><i class="fas fa-eye"></i></a>
            <form method="POST" action="{{route('shareapp.destroy', [$application->id])}}">
              @csrf 
              @method('delete')
              <button class="btn btn-danger btn-sm dltBtn" data-id={{$application->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <nav class="blog-pagination justify-content-center d-flex">
      {{$applications->links()}}
    </nav>
    @else
      <h2>No Share Applications Found!</h2>
    @endif
  </div>
</div>

<link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
    div.dataTables_wrapper div.dataTables_paginate {
        display: none;
    }
    .zoom {
        transition: transform .2s; /* Animation */
    }
    .zoom:hover {
        transform: scale(3.2);
    }
</style>

<script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
<script>
    $('#share-dataTable').DataTable({
        "columnDefs": [
            {
                "orderable": false,
                "targets": [4]
            }
        ]
    });

    // Sweet alert for deletion confirmation
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e){
            var form = $(this).closest('form');
            var dataID = $(this).data('id');
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                } else {
                    swal("Your data is safe!");
                }
            });
        });
    });
</script>

@endsection

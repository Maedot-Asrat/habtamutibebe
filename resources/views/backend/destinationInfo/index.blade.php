@extends('backend.layouts.master')

@section('main-content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="row">
         <div class="col-md-12">
            @include('backend.layouts.notification')
         </div>
     </div>
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary float-left">Destinations</h6>
      <a href="{{route('destinationInfo.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add New destination</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        @if(count($destination_infos)>0)
        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>S.N.</th>
              <th>Language</th>
              <th>Name</th>
              <th>Description</th>
              <th>Photo</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach($destination_infos as $destination_info)
              @php
              @endphp
                <tr>
                    <td>{{$destination_info->id}}</td>
                    <td>{{$destination_info->class}}</td>
                    <td>{{$destination_info->name}}</td>
                    <td>{{$destination_info->description}}</td>
                    
                    <td>
                        @if($destination_info->photo1)
                            <img src="{{$destination_info->photo1}}" class="img-fluid" style="max-width:80px" alt="{{$destination_info->photo1}}">
                        @else
                            <img src="{{asset('backend/img/thumbnail-default')}}" class="img-fluid" style="max-width:80px" alt="avatar.png">
                        @endif
                        @if($destination_info->photo2)
                            <img src="{{$destination_info->photo2}}" class="img-fluid" style="max-width:80px" alt="{{$destination_info->photo2}}">
                        @else
                            <img src="{{asset('backend/img/thumbnail-default')}}" class="img-fluid" style="max-width:80px" alt="avatar.png">
                        @endif
                        @if($destination_info->photo3)
                            <img src="{{$destination_info->photo3}}" class="img-fluid" style="max-width:80px" alt="{{$destination_info->photo3}}">
                        @else
                            <img src="{{asset('backend/img/thumbnail-default')}}" class="img-fluid" style="max-width:80px" alt="avatar.png">
                        @endif
                    </td>
                    
                    <td>
                        <a href="{{route('destinationInfo.edit',$destination_info->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-eye"></i></a>

                    </td>
                    <td>
                    <form method="POST" action="{{route('destinationInfo.destroy',[$destination_info->id])}}">
                      @csrf
                      @method('delete')
                          <button class="btn btn-danger btn-sm dltBtn" data-id={{$destination_info->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <span style="float:right">{{$destination_infos->links()}}</span>
        @else
          <h6 class="text-center">No destination found!!! Please create Category</h6>
        @endif
      </div>
    </div>
</div>
@endsection

@push('styles')
  <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
  </style>
@endpush

@push('scripts')

  <!-- Page level plugins -->
  <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
  <script>

      $('#banner-dataTable').DataTable( {
            "columnDefs":[
                {
                    "orderable":false,
                    "targets":[3,4,5]
                }
            ]
        } );

        // Sweet alert

        function deleteData(id){

        }
  </script>
  <script>
      $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
          $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
              var dataID=$(this).data('id');
              // alert(dataID);
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
          })
      })
  </script>
@endpush

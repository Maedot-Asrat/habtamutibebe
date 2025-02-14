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
      <h6 class="m-0 font-weight-bold text-primary float-left">Blog Category Lists</h6>
      <a href="{{route('blog.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Blog Detail</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        @if(count($blogs)>0)
        <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>S.N.</th>
              <th>Header Photo</th>
              <th>Title</th>
              <th>Slug</th>
              <th>Is Parent</th>
              {{-- <th>Parent Category</th> --}}
              <th>Blog Content</th>
              {{-- <th>Photo</th> --}}
              <th>Published Date</th>
              <th>Images</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>S.N.</th>
              <th>Header Photo</th>
              <th>Title</th>
              <th>Slug</th>
              <th>Is Parent</th>
              <th>Parent Category</th>
              <th>Blog Content</th>
              {{-- <th>Photo</th> --}}
              <th>Published Date</th>
              <th>Images</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>

            @foreach($blogs as $blog)
              @php
              @endphp
                <tr>
                    <td>{{$blog->id}}</td>
                    <td>
                      @if($blog->headerphoto)
                          <img src="{{$blog->headerphoto}}" class="img-fluid" style="max-width:80px" alt="{{$blog->headerphoto}}">
                      @else
                          <img src="{{asset('backend/img/thumbnail-default')}}" class="img-fluid" style="max-width:80px" alt="avatar.png">
                      @endif
                  </td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->slug}}</td>
                    <td>{{(($blog->is_parent==1)? 'Yes': 'No')}}</td>
                    {{-- <td>
                        {{$blog->parent_info->title ?? ''}}
                    </td> --}}
                 
                    <td>{{$blog->description}}</td>
                    <td>{{$blog->publish_date}}</td>
                       <td>
                        <tc>
                          @if($blog->photo)
                              <img src="{{$blog->photo}}" class="img-fluid" style="max-width:80px" alt="{{$blog->photo}}">
                          @else
                              <img src="{{asset('backend/img/thumbnail-default')}}" class="img-fluid" style="max-width:80px" alt="avatar.png">
                          @endif
                        </tc>

                    </td>
                    <td>
                        @if($blog->status=='active')
                            <span class="badge badge-success">{{$blog->status}}</span>
                        @else
                            <span class="badge badge-warning">{{$blog->status}}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{route('blog.edit',$blog->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                    <form method="POST" action="{{route('blog.destroy',[$blog->id])}}">
                      @csrf
                      @method('delete')
                          <button class="btn btn-danger btn-sm dltBtn" data-id={{$blog->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <span style="float:right">{{$blogs->links()}}</span>
        @else
          <h6 class="text-center">No Categories found!!! Please create Category</h6>
        @endif
      </div>
    </div>
</div>

  <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <style>
      div.dataTables_wrapper div.dataTables_paginate{
          display: none;
      }
  </style>

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
@endsection
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
        <h6 class="m-0 font-weight-bold text-primary float-left">Bookings</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($bookings)>0)
                @foreach($bookings as $booking)
                    <div class="package-item d-flex justify-content-between align-items-center py-2">
                        <div class="info d-flex flex-column">
                            {{-- <input type="checkbox" class="strike-through-checkbox" data-phone-id="{{ $booking->id }}"> --}}
                            <span id="phone-{{ $booking->id }}" class="ml-2">{{ $booking->created_at }}</span>
                            <span id="full_name-{{ $booking->id }}" class="ml-2">Name: {{ $booking->full_name }}</span>
                            <span id="phone-{{ $booking->id }}" class="ml-2">Phone: {{ $booking->phone }}</span>
                            <span id="packageTitle-{{ $booking->id }}" class="ml-2">Package: {{ $booking->package_name }}</span>
                            
                        </div>
                        <div>
                            <form action="{{ route('booking.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                <h6 class="text-center">No Bookings found!!! Please wait for a user to book</h6>
            @endif
        </div>
    </div>
</div>
@endsection


<link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
    .package-item {
        border-bottom: 1px solid #ddd;
        padding: 10px 0;
        transition: background-color 0.3s;
    }
    .package-item:hover {
        background-color: #f8f9fa;
    }
    .strike-through {
        text-decoration: line-through;
        color: grey;
    }
    .info span {
        margin-right: 15px;
    }
</style>

<script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script>
    $(document).ready(function() {
        $('#banner-dataTable').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": [3, 4, 5]
            }]
        });

        $('.strike-through-checkbox').change(function() {
            var phoneId = $(this).data('phone-id');
            if (this.checked) {
                $('#phone-' + phoneId).addClass('strike-through');
                $('#full_name-' + phoneId).addClass('strike-through');
                $('#packageId-' + phoneId).addClass('strike-through');
            } else {
                $('#phone-' + phoneId).removeClass('strike-through');
                $('#full_name-' + phoneId).removeClass('strike-through');
                $('#packageId-' + phoneId).removeClass('strike-through');
            }
        });

        $('.dltBtn').click(function(e) {
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


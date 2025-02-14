@extends('backend.layouts.master')
@section('main-content')
<div class="card">
  <h5 class="card-header">Share Application Details</h5>
  <div class="card-body">
    @if($application)
        <h5 class="text-center" style="text-decoration:underline"><strong>Applicant Details</strong></h5>

        <!-- Individual Filling Information -->
        <div class="py-3">
            <h6>1. Individual Information</h6>
            <p><strong>Name:</strong> {{$application->name_to_grandmother}}</p>
            <p><strong>Region:</strong> {{$application->region}}</p>
            <p><strong>City:</strong> {{$application->city}}</p>
            <p><strong>Kebele:</strong> {{$application->kebele}}</p>
            <p><strong>House Number:</strong> {{$application->house_number}}</p>
            <p><strong>Po.S.A. Number:</strong> {{$application->po_sa_number}}</p>
            <p><strong>Mobile Phone:</strong> {{$application->mobile_phone}}</p>
            <p><strong>Tax ID:</strong> {{$application->tax_id}}</p>
            <p><strong>ID Number:</strong> {{$application->id_number}}</p>
        </div>

        <hr/>

        <!-- Ethiopian-born Foreigner Information -->
        <div class="py-3">
            <h6>2. Ethiopian-born Foreigner Information</h6>
            <p><strong>Name:</strong> {{$application->foreigner_name_to_grandmother}}</p>
            <p><strong>Region:</strong> {{$application->foreign_region}}</p>
            <p><strong>City:</strong> {{$application->foreign_city}}</p>
            <p><strong>Kebele:</strong> {{$application->foreign_kebele}}</p>
            <p><strong>House Number:</strong> {{$application->foreign_house_number}}</p>
            <p><strong>Po.S.A. Number:</strong> {{$application->foreign_po_sa_number}}</p>
            <p><strong>Mobile Phone:</strong> {{$application->foreign_mobile_phone}}</p>
            <p><strong>Passport Number:</strong> {{$application->foreign_passport_number}}</p>
        </div>

        <hr/>

        <!-- Company/Organization Information -->
        <div class="py-3">
            <h6>3. Company/Organization Information</h6>
            <p><strong>Company Name:</strong> {{$application->company_name}}</p>
            <p><strong>Region:</strong> {{$application->company_region}}</p>
            <p><strong>City:</strong> {{$application->company_city}}</p>
            <p><strong>Kebele:</strong> {{$application->company_kebele}}</p>
            <p><strong>House Number:</strong> {{$application->company_house_number}}</p>
            <p><strong>Po.S.A. Number:</strong> {{$application->company_po_sa_number}}</p>
            <p><strong>Mobile Phone:</strong> {{$application->company_mobile_phone}}</p>
        </div>

        <hr/>

        <!-- Purchase Details -->
        <div class="py-3">
            <h6>4. Purchase of Shares</h6>
            <p><strong>Number of Shares:</strong> {{$application->number_of_shares}}</p>
            <p><strong>Total Price:</strong> {{$application->total_price}}</p>
        </div>

        <hr/>

        <!-- Confirmation and Signature -->
        <div class="py-3">
            <h6>5. Confirmation</h6>
            <p><strong>Source of Information:</strong> {{$application->source_of_info}}</p>
            <p><strong>Buyer Signature:</strong> {{$application->buyer_signature}}</p>
        </div>
    @else
        <p>No share application found.</p>
    @endif
  </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Package Details</title>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <!-- Premium Package -->
            <div class="col-md-4 mb-4">
            @foreach($packages as $package)
                <div class="card text-center">
                    <img src="{{ asset('storage/' . $package->picture) }}" class="card-img-top" alt="Premium">
                    <div class="card-body">
                        <h5 class="card-title">{{ $package->name }}</h5>
                        <p class="card-text">{{ $package->summary }}</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bookModal">Book Now</a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    <div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>







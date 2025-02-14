<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$bookings Details</title>
</head>
<body>
    <h1>Package Details</h1>
    <p>Phone Number: {{ $booking->name }}</p>
    <a href="{{ route('booking.index') }}">Back to List</a>
</body>
</html>

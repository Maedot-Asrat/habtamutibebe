<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewBookingNotification;
use App\Models\Notification as NotificationModel;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::orderBy('id', 'DESC')->paginate(10);
        return view('backend.booking.index')->with('bookings', $bookings);
    }

    public function store(Request $request)
    {
        $banners = Banner::all();
        
        $request->validate([
            'phone' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'package_id' => 'nullable|exists:packages,id',
            'package_name' => 'nullable|exists:packages,title',
            'child_package_id' => 'nullable|exists:packages,id',
        ]);

        $booking = new Booking([
            'phone' => $request->phone,
            'full_name' => $request->full_name,
            'package_id' => $request->package_id,
            'package_name' => $request->package_name,
        ]);

        $booking->save();

        // Create a new notification
        $notificationData = [
            'notifiable_id' => $booking->id,
            'notifiable_type' => Booking::class,
            'data' => json_encode('A new booking has been created.'),
        ];

        NotificationModel::create($notificationData);

        return redirect()->route('packages')->with('banners', $banners)->with('success', 'Booking created successfully');
    }




    public function show($id)
    {
        $booking = Booking::findOrFail($id);

        return view('backend.booking.show', compact('booking'));
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $packages=Packages::where('is_parent',1)->get();
        return view('backend.booking.edit', compact('booking','packages'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'phone' => 'required|string|max:255',
            'full_name' => 'required|string|max:255',
            'package_id'=>'nullable|exists:packages,id',
            'package_name'=>'nullable|exists:packages,title',
            'child_package_id'=>'nullable|exists:packages,id',
        ]);
        
        $booking = Booking::findOrFail($id);
        $booking->phone = $request->phone;
        $booking->full_name = $request->full_name;
       
        

        $booking->save();

        return redirect()->route('booking.index')->with('success', 'booking updated successfully');
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();

        return redirect()->route('booking.index')->with('success', 'booking deleted successfully');
    }


}

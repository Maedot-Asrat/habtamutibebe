<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Packages;
use App\Models\Banner;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::paginate(20); // Paginate notifications
        return view('backend.notification.index', compact('notifications'));
    }

    public function notificationFive()
    {
        $notification = Notification::whereNull('read_at')->limit(5)->get();
        return response()->json($notification);
    }

    public function create()
    {
        return view('frontend.pages.packages');
    }

    public function store(Request $request)
    {
        $request->validate([
            'notifiable_id' => 'required|integer',
            'notifiable_type' => 'required|string|max:255',
            'data' => 'required|string',
        ]);

        // Get all request data
        $data = $request->all();

        // Create the Notification
        $status = Notification::create($data);

        if ($status) {
            request()->session()->flash('success', 'Your notification successfully Delivered!');
        } else {
            request()->session()->flash('error', 'Error occurred, Please try again!');
        }

        return redirect()->route('home')->with('success', 'Notification Sent');
    }

    public function show($id)
    {
        $notification = Notification::find($id);
        if ($notification) {
            $notification->read_at = \Carbon\Carbon::now();
            $notification->save();
            return view('backend.notification.show')->with('notification', $notification);
        } else {
            return back()->with('error', 'Notification not found.');
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $notification = Notification::find($id);
        $status = $notification->delete();
        if ($status) {
            request()->session()->flash('success', 'Successfully deleted notification');
        } else {
            request()->session()->flash('error', 'Error occurred please try again');
        }
        return back();
    }
}

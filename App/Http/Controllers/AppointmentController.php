<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Packages;
use App\Models\Banner;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::paginate(20);
        return view('backend.appointment.index')->with('appointments', $appointments);
    }

    public function appointmentFive() {
        $appointment = Appointment::whereNull('read_at')->limit(5)->get();
        return response()->json($appointment);
    }

    public function create() {
        return view('frontend.layouts.appointment');
    }

    public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'string|required|min:2',
        'email' => 'email|nullable',
        'date' => 'string|nullable',
        'time' => 'string|nullable',
        'message' => 'required|min:10|max:200',
        'service' => 'string|nullable',
        'phone' => 'numeric|required'
    ]);

    // Get all request data
    $data = $request->all();

    // Set a default value for subject if it is not provided
    if (!isset($data['subject'])) {
        $data['subject'] = 'New Appointment'; // Default value
    }

    // Create the message
    $status = Appointment::create($data);

    if ($status) {
        request()->session()->flash('success', 'New Appointment successfully Scheduled!');
    } else {
        request()->session()->flash('error', 'Error occurred, Please try again!');
    }

    return redirect()->route('home')->with('success', 'Appointment Scheduled');
}

    public function show(Request $request, $id) {
        $appointment = Appointment::find($id);
        if ($appointment) {
            $appointment->read_at = \Carbon\Carbon::now();
            $appointment->save();
            return view('backend.appointment.show')->with('appointment', $appointment);
        } else {
            return back();
        }
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        $appointment = Appointment::find($id);
        $status = $appointment->delete();
        if ($status) {
            request()->session()->flash('success', 'Successfully deleted appointment');
        } else {
            request()->session()->flash('error', 'Error occurred please try again');
        }
        return back();
    }
}

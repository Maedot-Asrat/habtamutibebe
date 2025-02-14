<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShareApplication;

class ShareApplicationController extends Controller
{
    public function index() {
        $applications = ShareApplication::paginate(20);
        return view('backend.shareapplication.index')->with('applications', $applications);
    }

    public function recentApplications() {
        $applications = ShareApplication::whereNull('read_at')->limit(5)->get();
        return response()->json($applications);
    }

    public function create() {
        return view('frontend.pages.applicationform');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name_to_grandmother' => 'string|nullable|min:2',
            'region' => 'string|nullable',
            'city' => 'string|nullable',
            'kebele' => 'string|nullable',
            'house_number' => 'string|nullable',
            'po_sa_number' => 'string|nullable',
            'mobile_phone' => 'string|nullable',
            'tax_id' => 'string|nullable',
            'id_number' => 'string|nullable',
            'number_of_shares' => 'integer|nullable',
            'total_price' => 'numeric|nullable',
            'source_of_info' => 'string|nullable',
            'buyer_signature' => 'string|nullable'
        ]);

        // Collect all request data
        $data = $request->all();

        // Set default values if necessary
        $data['subject'] = $data['subject'] ?? 'New Share Application';

        // Create the application record
        $status = ShareApplication::create($data);

        if ($status) {
            request()->session()->flash('success', 'New Share Application successfully submitted!');
        } else {
            request()->session()->flash('error', 'Error occurred, please try again!');
        }

        return redirect()->route('home')->with('success', 'Share Application Submitted');
    }

    public function show(Request $request, $id) {
        $application = ShareApplication::find($id);
        if ($application) {
            $application->read_at = \Carbon\Carbon::now();
            $application->save();
            return view('backend.shareapplication.show')->with('application', $application);
        } else {
            return back();
        }
    }

    public function edit($id) {
        // Placeholder for edit logic
    }

    public function update(Request $request, $id) {
        // Placeholder for update logic
    }

    public function destroy($id) {
        $application = ShareApplication::find($id);
        $status = $application->delete();
        if ($status) {
            request()->session()->flash('success', 'Successfully deleted application');
        } else {
            request()->session()->flash('error', 'Error occurred, please try again');
        }
        return back();
    }
}

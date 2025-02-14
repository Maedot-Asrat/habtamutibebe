<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Packages;
use App\Models\Banner;

class ExperienceController extends Controller
{
    public function index(){
        $experiences = Experience::paginate(20);
        return view('backend.experience.index')->with('experiences', $experiences);
    }

    public function experienceFive() {
        $experience = Experience::whereNull('read_at')->limit(5)->get();
        return response()->json($experience);
    }

    public function create() {
        return view('frontend.pages.experience');
    }

    public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'string|required|min:2',
        'email' => 'email|required',
        'place' => 'string|nullable',
        'phone' => 'numeric|nullable'
    ]);

    // Get all request data
    $data = $request->all();

    // Set a default value for subject if it is not provided

    // Create the experience
    $status = Experience::create($data);

    if ($status) {
        request()->session()->flash('success', 'Your experience successfully Delivered!');
    } else {
        request()->session()->flash('error', 'Error occurred, Please try again!');
    }

    return redirect()->route('home')->with('success', 'experience Sent');
}

    public function show(Request $request, $id) {
        $experience = Experience::find($id);
        if ($experience) {
            $experience->read_at = \Carbon\Carbon::now();
            $experience->save();
            return view('backend.experience.show')->with('experience', $experience);
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
        $experience = Experience::find($id);
        $status = $experience->delete();
        if ($status) {
            request()->session()->flash('success', 'Successfully deleted experience');
        } else {
            request()->session()->flash('error', 'Error occurred please try again');
        }
        return back();
    }
}

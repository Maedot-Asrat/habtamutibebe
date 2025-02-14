<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Packages;
use App\Models\Banner;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::paginate(20);
        return view('backend.message.index')->with('messages', $messages);
    }

    public function messageFive() {
        $message = Message::whereNull('read_at')->limit(5)->get();
        return response()->json($message);
    }

    public function create() {
        return view('frontend.layouts.contactus');
    }

    public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'string|required|min:2',
        'email' => 'email|required',
        'message' => 'required|min:20|max:200',
        'subject' => 'string|nullable',
        'phone' => 'numeric|nullable'
    ]);

    // Get all request data
    $data = $request->all();

    // Set a default value for subject if it is not provided
    if (!isset($data['subject'])) {
        $data['subject'] = 'Message from User'; // Default value
    }

    // Create the message
    $status = Message::create($data);

    if ($status) {
        request()->session()->flash('success', 'Your Message successfully Delivered!');
    } else {
        request()->session()->flash('error', 'Error occurred, Please try again!');
    }

    return redirect()->route('home')->with('success', 'Message Sent');
}

    public function show(Request $request, $id) {
        $message = Message::find($id);
        if ($message) {
            $message->read_at = \Carbon\Carbon::now();
            $message->save();
            return view('backend.message.show')->with('message', $message);
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
        $message = Message::find($id);
        $status = $message->delete();
        if ($status) {
            request()->session()->flash('success', 'Successfully deleted message');
        } else {
            request()->session()->flash('error', 'Error occurred please try again');
        }
        return back();
    }
}

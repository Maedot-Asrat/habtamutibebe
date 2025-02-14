<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingModel;
use App\Models\TravelModel;
use App\Models\Brand;
use Auth;
use Illuminate\Support\Str;

class AdminBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=BookingModel::getAllbookings();
        // return $products;
        return view('backend.order.index')->with('bookings',$bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $travels=TravelModel::all();
        // return $category;
        return view('backend.order.create')->with('travels',$travels);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'first_name'=>'string|required',
            'last_name'=>'string|required',
            'email'=>'string|nullable',
            'phone'=>'string|required',
            'address1'=>'string|nullable',
            'country'=>'string|nullable',
            'description'=>'string|nullable',
        ]);
       
        $data=$request->all();
        $data['user_id'] = auth()->id();
        $status=BookingModel::create($data);
        if($status){
            request()->session()->flash('success','Your Data Successfully Saved Thank You Will Get Back Soon!');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('booking.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booking=BookingModel::findOrFail($id);
        // return $items;
        return view('backend.order.edit')->with('booking',$booking);
                    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $booking=BookingModel::findOrFail($id);
        $this->validate($request,[
            'first_name'=>'string|nullable',
            'last_name'=>'string|nullable',
            'email'=>'string|nullable',
            'phone'=>'string|nullable',
            'address1'=>'string|nullable',
            'country'=>'string|nullable',
            'description'=>'string|nullable',
        ]);

        $data=$request->all();
        // return $data;
        $status=$booking->fill($data)->save();
        if($status){
            request()->session()->flash('success','Contact Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('adminbooking.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking=BookingModel::findOrFail($id);
        $status=$booking->delete();
        
        if($status){
            request()->session()->flash('success','Contact successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting Contact');
        }
        return redirect()->route('adminbooking.index');
    }
}

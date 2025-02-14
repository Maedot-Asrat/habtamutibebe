<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminBookingModel;
use App\Models\TravelModel;
use App\Models\Brand;
use Auth;
use Illuminate\Support\Str;

class AdminBooking extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=AdminBookingModel::getAllbookings();
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
            'fname'=>'string|required',
            'lname'=>'string|required',
            'email'=>'string|nullable',
            'phone'=>'string|required',
            'address1'=>'string|nullable',
            'country'=>'string|nullable',
            'description'=>'string|nullable',
            'document'=>'string|required',
            'travel_id'=>'required|exists:travel,id',
        ]);
       
        $data=$request->all();
        $data['user_id'] = auth()->id();
        $status=AdminBookingModel::create($data);
        if($status){
            request()->session()->flash('success','Your Booking Successfully added');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('adminbooking.index');

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
        $booking=AdminBookingModel::find($id);
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
        $booking=AdminBookingModel::find($id);
        $this->validate($request,[
            'status'=>'required|in:new,pending,approved,rejected'
        ]);
        $data=$request->all();
        // return $request->status;
       
        $status=$booking->fill($data)->save();
        if($status){
            request()->session()->flash('success','Successfully updated Travel Booking');
        }
        else{
            request()->session()->flash('error','Error while Travel Booking');
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
        $product=Product::findOrFail($id);
        $status=$product->delete();
        
        if($status){
            request()->session()->flash('success','Product successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting product');
        }
        return redirect()->route('product.index');
    }

    public function approve(Request $request, $id)
    {

        $booking = AdminBookingModel::findOrFail($id);
        $booking->update($request->all());
        if($booking)
        { 
            request()->session()->flash('success','ravel Package Updated Successfully');
            
        }
        else
        {
            return back();
             request()->session()->flash('error','Please Try again');
        }

     }
}

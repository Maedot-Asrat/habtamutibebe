<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Str;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles=Vehicle::getAllVehicle();
        // return $category;
        return view('backend.vehicle.index')->with('vehicles',$vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicles=Vehicle::orderBy('brand','ASC')->get();
        return view('backend.vehicle.create')->with('vehicles',$vehicles);
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
            'class'=>'required|in:eng,amh',
            'brand'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|nullable',
            
        ]);
        $data= $request->all();
        
      
        // return $data;   
        $status=Vehicle::create($data);
        if($status){
            request()->session()->flash('success','New Vehicle info successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('vehicle.index');


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
  
    public function showVehicles()
    {
        $vehicles=Vehicle::all();

        // return $category;
        return view('frontend.pages.vehicle', compact('vehicles'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $vehicles=Vehicle::findOrFail($id);
        return view('backend.vehicle.edit')->with('vehicles',$vehicles);
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
        // return $request->all();
        $vehicles=Vehicle::findOrFail($id);
        $this->validate($request,[
            'class'=>'required|in:eng,amh',
            'brand'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|nullable',
        ]);
        $data= $request->all();
        
        $status=$vehicles->fill($data)->save();
        if($status){
            request()->session()->flash('success','Vehicle successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('vehicle.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicles=Vehicle::findOrFail($id);
       
        // return $child_cat_id;
        $status=$vehicles->delete();
        
        if($status){
          
            request()->session()->flash('success','Vehicle info successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting category');
        }
        return redirect()->route('vehicle.index');
    }

  
}

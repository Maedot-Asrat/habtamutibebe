<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destinations;
use Illuminate\Support\Str;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations=Destinations::getAllDestination();
        // return $category;
        return view('backend.destination.index')->with('destinations',$destinations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations=Destinations::orderBy('name','ASC')->get();
        return view('backend.destination.create')->with('destinations',$destinations);
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
            'name'=>'string|required',
            'activity'=>'string|required',
            'photo'=>'string|nullable',
            'video'=>'string|nullable',
            
        ]);
        $data= $request->all();
        
      
        // return $data;   
        $status=Destinations::create($data);
        if($status){
            request()->session()->flash('success','New destination successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('destination.index');


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
  
    public function showDestinations()
    {
        $destinations=Destinations::all();

        // return $category;
        return view('frontend.layouts.destinations', compact('destinations'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $destinations=Destinations::findOrFail($id);
        return view('backend.destination.edit')->with('destinations',$destinations);
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
        $destinations=Destinations::findOrFail($id);
        $this->validate($request,[

            'name'=>'string|required',
            'activity'=>'string|required',
            'photo'=>'string|nullable',
            'video'=>'string|nullable',
            
        ]);
        $data= $request->all();
        
        $status=$destinations->fill($data)->save();
        if($status){
            request()->session()->flash('success','destination successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('destination.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinations=Destinations::findOrFail($id);
       
        // return $child_cat_id;
        $status=$destinations->delete();
        
        if($status){
          
            request()->session()->flash('success','destination successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting category');
        }
        return redirect()->route('destination.index');
    }

  
}

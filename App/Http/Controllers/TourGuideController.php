<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourGuide;
use Illuminate\Support\Str;

class TourGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tour_guides=TourGuide::getAllTourGuide();
        // return $category;
        return view('backend.tourGuide.index')->with('tour_guides',$tour_guides);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tour_guides=TourGuide::orderBy('name','ASC')->get();
        return view('backend.tourGuide.create')->with('tour_guides',$tour_guides);
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
            'name'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|nullable',
            'location'=>'string|nullable',
            'phone'=>'string|nullable',
            'language'=>'string|nullable',
            
        ]);
        $data= $request->all();
        
      
        // return $data;   
        $status=TourGuide::create($data);
        if($status){
            request()->session()->flash('success','New TourGuide info successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('tourGuide.index');


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
  
    public function showTourGuides()
    {
        $tour_guides=TourGuide::all();

        // return $category;
        return view('frontend.pages.tourGuide', compact('tour_guides'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $tour_guides=TourGuide::findOrFail($id);
        return view('backend.tourGuide.edit')->with('tour_guides',$tour_guides);
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
        $tour_guides=TourGuide::findOrFail($id);
        $this->validate($request,[
            'class'=>'required|in:eng,amh',
            'name'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|nullable',
            'location'=>'string|nullable',
            'phone'=>'string|nullable',
            'language'=>'string|nullable',
            
        ]);
        $data= $request->all();
        
        $status=$tour_guides->fill($data)->save();
        if($status){
            request()->session()->flash('success','tourGuide successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('tourGuide.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour_guides=TourGuide::findOrFail($id);
       
        // return $child_cat_id;
        $status=$tour_guides->delete();
        
        if($status){
          
            request()->session()->flash('success','tourGuide info successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting category');
        }
        return redirect()->route('tourGuide.index');
    }

  
}

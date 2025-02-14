<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DestinationInfo;
use Illuminate\Support\Str;

class DestinationInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destination_infos=DestinationInfo::getAllDestinationInfo();
        // return $category;
        return view('backend.destinationInfo.index')->with('destination_infos',$destination_infos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destination_infos=DestinationInfo::orderBy('name','ASC')->get();
        return view('backend.destinationInfo.create')->with('destination_infos',$destination_infos);
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
            'photo1'=>'string|nullable',
            'photo2'=>'string|nullable',
            'photo3'=>'string|nullable',
            'video1'=>'string|nullable',
            'video2'=>'string|nullable',
            'video3'=>'string|nullable',
        ]);
        $data= $request->all();
        
      
        // return $data;   
        $status=DestinationInfo::create($data);
        if($status){
            request()->session()->flash('success','New destination info successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('destinationInfo.index');


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
        $destination_infos=DestinationInfo::all();

        // return $category;
        return view('frontend.pages.destinationInfo', compact('destination_infos'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $destination_infos=DestinationInfo::findOrFail($id);
        return view('backend.destinationInfo.edit')->with('destination_infos',$destination_infos);
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
        $destination_infos=DestinationInfo::findOrFail($id);
        $this->validate($request,[
            'class'=>'required|in:eng,amh',
            'name'=>'string|required',
            'description'=>'string|nullable',
            'photo1'=>'string|nullable',
            'photo2'=>'string|nullable',
            'photo3'=>'string|nullable',
            'video1'=>'string|nullable',
            'video2'=>'string|nullable',
            'video3'=>'string|nullable',
        ]);
        $data= $request->all();
        
        $status=$destination_infos->fill($data)->save();
        if($status){
            request()->session()->flash('success','destinationInfo successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('destinationInfo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destination_infos=DestinationInfo::findOrFail($id);
       
        // return $child_cat_id;
        $status=$destination_infos->delete();
        
        if($status){
          
            request()->session()->flash('success','destinationInfo info successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting category');
        }
        return redirect()->route('destinationInfo.index');
    }

  
}

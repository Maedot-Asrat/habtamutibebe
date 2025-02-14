<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctors;
use Illuminate\Support\Str;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=Doctors::getAllDoctors();
        return view('backend.doctor.index')->with('doctors',$doctors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors=Doctors::where('status','active')->orderBy('title','ASC')->get();
        return view('backend.doctor.create')->with('doctors',$doctors);
    }
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'fullname'=>'string|required',
            'title'=>'string|required',
            'summary'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'required|in:active,inactive',
        ]);
        $data= $request->all();
        $slug=Str::slug($request->title);
        $count=Doctors::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $data;   
        $status=Doctors::create($data);
        if($status){
            request()->session()->flash('success','New Docctors File successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('doctor.index');

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
        $doctor=Doctors::findOrFail($id);
        return view('backend.doctor.edit')->with('doctor',$doctor);
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
        $doctor=Doctors::findOrFail($id);
        $this->validate($request,[
            'fullname'=>'string|required',
            'title'=>'string|required',
            'summary'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'required|in:active,inactive',
        
        ]);
        $data= $request->all();
        // return $data;
        $status=$doctor->fill($data)->save();
        if($status){
            request()->session()->flash('success','Doctor successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('doctor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor=Doctors::findOrFail($id);
        // return $child_cat_id;
        $status=$doctor->delete();
        
        if($status){
            request()->session()->flash('success','Doctor successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting category');
        }
        return redirect()->route('doctor.index');
    }

}

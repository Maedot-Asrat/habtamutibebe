<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalAid;
use Illuminate\Support\Str;

class MedicalAidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medical_aids=MedicalAid::getAllMedicalAid();
        // return $category;
        return view('backend.medicalAid.index')->with('medical_aids',$medical_aids);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medical_aids=MedicalAid::orderBy('partner','ASC')->get();
        return view('backend.medicalAid.create')->with('medical_aids',$medical_aids);
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
            'partner'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|nullable',
            'phone'=>'string|nullable',
            
        ]);
        $data= $request->all();
        
      
        // return $data;   
        $status=MedicalAid::create($data);
        if($status){
            request()->session()->flash('success','New medicalAid info successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('medicalAid.index');


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
  
    public function showmedicalAids()
    {
        $medical_aids=MedicalAid::all();

        // return $category;
        return view('frontend.pages.medicalAid', compact('medical_aids'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $medical_aids=MedicalAid::findOrFail($id);
        return view('backend.medicalAid.edit')->with('medical_aids',$medical_aids);
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
        $medical_aids=MedicalAid::findOrFail($id);
        $this->validate($request,[
            'class'=>'required|in:eng,amh',
            'partner'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|nullable',
            'phone'=>'string|nullable',
            
        ]);
        $data= $request->all();
        
        $status=$medical_aids->fill($data)->save();
        if($status){
            request()->session()->flash('success','medicalAid successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('medicalAid.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medical_aids=MedicalAid::findOrFail($id);
       
        // return $child_cat_id;
        $status=$medical_aids->delete();
        
        if($status){
          
            request()->session()->flash('success','medicalAid info successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting category');
        }
        return redirect()->route('medicalAid.index');
    }

  
}

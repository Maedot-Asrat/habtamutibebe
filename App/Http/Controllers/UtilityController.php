<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utility;
use Illuminate\Support\Str;

class UtilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utility=Utility::orderBy('id','DESC')->paginate(10);
        return view('backend.utility.index')->with('utilities',$utility);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.utility.create');
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
            'doctors'=> 'string|nullable',
            'experience'=>'string|nullable',
            'clients'=>'string|nullable',
            'departments'=>'string|nullable',
            
        ]);
        $data=$request->all();
       
        // return $slug;
        $status=Utility::create($data);
        if($status){
            request()->session()->flash('success','utility successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding banner');
        }
        return redirect()->route('utility.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('frontend.layouts.about');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utility=Utility::findOrFail($id);
        return view('backend.utility.edit')->with('utility',$utility);
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
        $utility=Utility::findOrFail($id);
        $this->validate($request,[
           'doctors'=> 'string|nullable',
            'experience'=>'string|nullable',
            'clients'=>'string|nullable',
            'departments'=>'string|nullable',
        ]);
        $data=$request->all();

        $status=$utility->fill($data)->save();
        if($status){
            request()->session()->flash('success','utility successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating utility');
        }
        return redirect()->route('utility.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $utility=Utility::findOrFail($id);
        $status=$utility->delete();
        if($status){
            request()->session()->flash('success','utility successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting utility');
        }
        return redirect()->route('banner.index');
    }
    public function showUtility()
    {
        $utilities = Utility::all();
        return view('frontend.layouts.master', compact('utilities'));
    }
}

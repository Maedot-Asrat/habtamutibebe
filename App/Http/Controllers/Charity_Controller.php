<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Charity_Model;
use Illuminate\Support\Str;

class Charity_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charity=Charity_Model::getAllcharity();
        // return $category;
        return view('backend.charity.index')->with('charity',$charity);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $charity=Charity_Model::orderBy('title','ASC')->get();
        return view('backend.charity.create')->with('charity',$charity);
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
            'title'=>'string|required',
            'summary'=>'string|nullable',
            'photo'=>'string|nullable',
            'status'=>'required|in:active,inactive',
        ]);
        $data= $request->all();
        $slug=Str::slug($request->title);
        $count=Charity_Model::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $data;   
        $status=Charity_Model::create($data);
        if($status){
            request()->session()->flash('success','New charity successfully created');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('charity.index');


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
        $charity=Charity_Model::findOrFail($id);
        return view('backend.charity.edit')->with('charity',$charity);
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
        $charity=Charity_Model::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required',
            'summary'=>'string|nullable',
            'photo'=>'string|nullable',
            'status'=>'required|in:active,inactive',
            'is_parent'=>'sometimes|in:1',
        ]);
        $data= $request->all();
        // return $data;
        $status=$charity->fill($data)->save();
        if($status){
            request()->session()->flash('success','charity successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('charity.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $charity=Charity_Model::findOrFail($id);
        // return $child_cat_id;
        $status=$charity->delete();
        
        if($status){
            if(count($child_cat_id)>0){
                Charity_Model::shiftChild($child_cat_id);
            }
            request()->session()->flash('success','Selected charity successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting category');
        }
        return redirect()->route('service.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallary;
use Illuminate\Support\Str;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallaries=Gallary::getAllGallary();
        // return $category;
        return view('backend.gallary.index')->with('gallaries',$gallaries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gallaries=Gallary::where('status','active')->orderBy('title','ASC')->get();
        return view('backend.gallary.create')->with('gallaries',$gallaries);
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
        $count=Gallary::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $data;   
        $status=Gallary::create($data);
        if($status){
            request()->session()->flash('success','New Gallary File successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('gallary.index');


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
        $gallary=Gallary::findOrFail($id);
        return view('backend.gallary.edit')->with('gallary',$gallary);
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
        $gallaries=Gallary::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required',
            'summary'=>'string|nullable',
            'photo'=>'string|nullable',
            'status'=>'required|in:active,inactive',
        
        ]);
        $data= $request->all();
        // return $data;
        $status=$gallaries->fill($data)->save();
        if($status){
            request()->session()->flash('success','Gallary successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('gallary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallaries=Gallary::findOrFail($id);
        // return $child_cat_id;
        $status=$gallaries->delete();
        
        if($status){
            request()->session()->flash('success','Service successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting category');
        }
        return redirect()->route('gallary.index');
    }

}

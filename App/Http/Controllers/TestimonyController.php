<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use Illuminate\Support\Str;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonials::getAllTestimony();
        // return $category;
        return view('backend.testimony.index')->with('testimonials',$testimonials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $testimonials=Testimonials::orderBy('title','ASC')->get();
        return view('backend.testimony.create')->with('testimonials',$testimonials);
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
            'title'=>'string|nullable',
            'full_name'=>'string|required',
            'testimony'=>'string|required',
            'photo'=>'string|nullable',
            
        ]);
        $data= $request->all();
        
      
        // return $data;   
        $status=Testimonials::create($data);
        if($status){
            request()->session()->flash('success','New testimony successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('testimony.index');


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
  
    public function showTestimonials()
    {
        $testimonials=Testimonials::all();

        // return $category;
        return view('frontend.layouts.testimonials', compact('testimonials'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $testimonials=Testimonials::findOrFail($id);
        return view('backend.testimony.edit')->with('testimonials',$testimonials);
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
        $testimonials=Testimonials::findOrFail($id);
        $this->validate($request,[
            'class'=>'required|in:eng,amh',
            'title'=>'string|nullable',
            'full_name'=>'string|required',
            'testimony'=>'string|required',
            'photo'=>'string|nullable',
            
        ]);
        $data= $request->all();
        
        $status=$testimonials->fill($data)->save();
        if($status){
            request()->session()->flash('success','Testimony successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('testimony.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonials=Testimonials::findOrFail($id);
       
        // return $child_cat_id;
        $status=$testimonials->delete();
        
        if($status){
          
            request()->session()->flash('success','Testimony successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting category');
        }
        return redirect()->route('testimony.index');
    }

  
}

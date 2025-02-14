<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interview;
use Illuminate\Support\Str;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interview=Interview::orderBy('id','DESC')->paginate(10);
        return view('backend.interview.index')->with('interviews',$interview);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.interview.create');
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
            'link'=>'string|required|max:50',
           'publish_date'=>'string|nullable',
            'description'=>'string|nullable',
            'status'=>'required|in:active,inactive',
            
            
        ]);
        $data=$request->all();
        $slug=Str::slug($request->title);
        $count=Interview::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $slug;
        $status=Interview::create($data);
        if($status){
            request()->session()->flash('success','Interview successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding interview');
        }
        return redirect()->route('interview.index');
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
        $interview=Interview::findOrFail($id);
        return view('backend.interview.edit')->with('interview',$interview);
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
        $interview=Interview::findOrFail($id);
        $this->validate($request,[
           'link'=>'string|required|max:50',
           'publish_date'=>'string|nullable',
            'description'=>'string|nullable',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        // $slug=Str::slug($request->title);
        // $count=Banner::where('slug',$slug)->count();
        // if($count>0){
        //     $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        // }
        // $data['slug']=$slug;
        // return $slug;
        $status=$interview->fill($data)->save();
        if($status){
            request()->session()->flash('success','Interview  successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating interview');
        }
        return redirect()->route('interview.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $interview=Interview::findOrFail($id);
        $status=$interview->delete();
        if($status){
            request()->session()->flash('success','Interview successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting banner');
        }
        return redirect()->route('banner.index');
    }
    public function showInterview()
    {
        $interviews = Interview::all();
        return view('frontend.pages.interview', compact('interviews'));
    }
}

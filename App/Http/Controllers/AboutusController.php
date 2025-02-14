<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Str;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about=About::orderBy('id','DESC')->paginate(10);
        return view('backend.aboutus.index')->with('abouts',$about);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.aboutus.create');
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
            'title'=>'string|required|max:50',
           
            'mission'=>'string|required',
            'vision'=>'string|required',
            'value'=>'string|required',
            'goal'=>'string|required',
            'photo'=>'string|nullable',
            
            'video'=>'string|nullable',
            'status'=>'required|in:active,inactive',
            'class'=>'required|in:eng,amh',
            
            
        ]);
        $data=$request->all();
        $slug=Str::slug($request->title);
        $count=About::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $slug;
        $status=About::create($data);
        if($status){
            request()->session()->flash('success','Aboutus successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding banner');
        }
        return redirect()->route('aboutus.index');
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
        $about=About::findOrFail($id);
        return view('backend.aboutus.edit')->with('about',$about);
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
        $about=About::findOrFail($id);
        $this->validate($request,[
           'title'=>'string|required|max:50',
           
            'mission'=>'string|required',
            'vision'=>'string|required',
            'value'=>'string|required',
            'goal'=>'string|required',
            'photo'=>'string|nullable',
           
            'video'=>'string|nullable',
            'status'=>'required|in:active,inactive',
            'class'=>'required|in:eng,amh',
        ]);
        $data=$request->all();
        // $slug=Str::slug($request->title);
        // $count=Banner::where('slug',$slug)->count();
        // if($count>0){
        //     $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        // }
        // $data['slug']=$slug;
        // return $slug;
        $status=$about->fill($data)->save();
        if($status){
            request()->session()->flash('success','about us successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating banner');
        }
        return redirect()->route('aboutus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about=About::findOrFail($id);
        $status=$about->delete();
        if($status){
            request()->session()->flash('success','about us successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting banner');
        }
        return redirect()->route('banner.index');
    }
    public function showAboutus()
    {
        $abouts = About::all();
        return view('frontend.pages.aboutus', compact('abouts'));
    }
}

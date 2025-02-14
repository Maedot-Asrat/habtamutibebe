<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use Illuminate\Support\Str;
class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo=Logo::orderBy('id','DESC')->paginate(10);
        return view('backend.logo.index')->with('logos',$logo);
    }
    public static function getLogo()
    {
        return Logo::first();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.logo.create');
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
            'logo'=>'string|required',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        $slug=Str::slug($request->title);
        $count=Logo::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $slug;
        $status=Logo::create($data);
        if($status){
            request()->session()->flash('success','Logo successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding logo');
        }
        return redirect()->route('logo.index');
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
        $logo=Logo::findOrFail($id);
        return view('backend.logo.edit')->with('logo',$logo);
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
        $logo=Logo::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required|max:50',
         
            'logo'=>'string|required',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
      
        $status=$logo->fill($data)->save();
        if($status){
            request()->session()->flash('success','Logo successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating logo');
        }
        return redirect()->route('logo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logo=Logo::findOrFail($id);
        $status=$logo->delete();
        if($status){
            request()->session()->flash('success','Logo successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting logo');
        }
        return redirect()->route('logo.index');
    }
    public function showLogos()
    {
        $logos = Logo::all();
        return view('frontend.layouts.master', compact('logos'));
    }
}

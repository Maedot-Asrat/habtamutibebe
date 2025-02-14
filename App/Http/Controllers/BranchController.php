<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use Illuminate\Support\Str;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches=Branch::getAllBranch();
        // return $category;
        return view('backend.branch.index')->with('branches',$branches);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches=Branch::orderBy('name','ASC')->get();
        return view('backend.branch.create')->with('branches',$branches);
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
            'photo'=>'string|nullable',
            'email'=>'string|nullable',
            'location'=>'string|nullable',
            'phone'=>'string|nullable',
        ]);
        $data= $request->all();
        
      
        // return $data;   
        $status=Branch::create($data);
        if($status){
            request()->session()->flash('success','New branch successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('branch.index');


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
  
    public function showBranches()
    {
        $branches=Branch::all();

        // return $category;
        return view('frontend.pages.aboutus', compact('branches'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $branches=Branch::findOrFail($id);
        return view('backend.branch.edit')->with('branches',$branches);
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
        $branches=Branch::findOrFail($id);
        $this->validate($request,[
            'class'=>'required|in:eng,amh',
            'name'=>'string|required',
            'description'=>'string|nullable',
            'photo'=>'string|nullable',
            'email'=>'string|nullable',
            'location'=>'string|nullable',
            'phone'=>'string|nullable',
        ]);
        $data= $request->all();
        
        $status=$branches->fill($data)->save();
        if($status){
            request()->session()->flash('success','Branch successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('branch.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $branches=Branch::findOrFail($id);
       
        // return $child_cat_id;
        $status=$branches->delete();
        
        if($status){
          
            request()->session()->flash('success','Branch successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting category');
        }
        return redirect()->route('branch.index');
    }

  
}

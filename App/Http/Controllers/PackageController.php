<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Banner;
use App\Models\Logo;
use App\Models\Settings;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

     // Frontend packages method
    public function frontendPackages()
    {
        $packages = Package::all();
        return view('frontend.pages.packages', compact('packages'));
    }

    // Admin packages method
    public function adminPackages()
    {
        $packages = Package::all();
        return view('backend.packages.index', compact('packages'));
    }
    public function index()
    {
        $packages=Packages::getAllPackage();
        // return $category;
        return view('backend.package.index')->with('packages',$packages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages=Packages::where('is_parent',1)->orderBy('title','ASC')->get();
        return view('backend.package.create')->with('packages',$packages);
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
            'title'=>'string|required',
            'summary'=>'string|nullable',
            'photo'=>'string|nullable',
            'status'=>'required|in:active,inactive',
            'is_featured'=>'required|in:Yes,No',
            'parent_id'=>'nullable|exists:categories,id',
        ]);
        $data= $request->all();
        $slug=Str::slug($request->title);
        $count=Packages::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $data['is_parent']=$request->input('is_parent',0);
        // return $data;   
        $status=Packages::create($data);
        if($status){
            request()->session()->flash('success','New Package successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('package.index');


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
  
    public function showPackages()
    {
        $packages=Packages::all();
        $banners= Banner::all();
        $logos= Logo::all();
        $settings=Settings::orderBy('id','DESC')->limit(10)->get();
        // return $category;
        return view('frontend.pages.packages', compact('packages','banners','logos','settings'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parent_cats=Packages::where('is_parent',1)->get();
        $packages=Packages::findOrFail($id);
        return view('backend.package.edit')->with('packages',$packages)->with('parent_cats',$parent_cats);
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
        $packages=Packages::findOrFail($id);
        $this->validate($request,[
            'class'=>'required|in:eng,amh',
            'title'=>'string|required',
            'summary'=>'string|nullable',
            'photo'=>'string|nullable',
            'status'=>'required|in:active,inactive',
            'is_featured'=>'required|in:Yes,No',
            'is_parent'=>'sometimes|in:1',
            'parent_id'=>'nullable|exists:categories,id',
        ]);
        $data= $request->all();
        $data['is_parent']=$request->input('is_parent',0);
        // return $data;
        $status=$packages->fill($data)->save();
        if($status){
            request()->session()->flash('success','Package successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $packages=Packages::findOrFail($id);
        $child_cat_id=Packages::where('parent_id',$id)->pluck('id');
        // return $child_cat_id;
        $status=$packages->delete();
        
        if($status){
            if(count($child_cat_id)>0){
                packages::shiftChild($child_cat_id);
            }
            request()->session()->flash('success','Package successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting category');
        }
        return redirect()->route('package.index');
    }

    public function getChildByParent(Request $request){
        // return $request->all();
        $packages=Packages::findOrFail($request->id);
        $child_cat=Packages::getChildByParentID($request->id);
        // return $child_cat;
        if(count($child_cat)<=0){
            return response()->json(['status'=>false,'msg'=>'','data'=>null]);
        }
        else{
            return response()->json(['status'=>true,'msg'=>'','data'=>$child_cat]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Art;
use App\Models\Artcategory;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Settings;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arts=Art::orderBy('id','DESC')->paginate(10);
        return view('backend.art.index')->with('arts',$arts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artcategory=Artcategory::get();
        return view('backend.art.create')->with('artcategories',$artcategory);
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
            'photo'=>'string|nullable',
            'title'=>'string|required',
            'description'=>'string|nullable',
            'size'=>'string|nullable',
            'artcat_id'=>'nullable|exists:artcategories,id',
            'child_artcat_id'=>'nullable|exists:artcategories,id',
            'publish_date' => 'string|nullable',
            'status'=>'required|in:active,inactive'
        ]);

        $data=$request->all();

        $slug=Str::slug($request->title);
        $count=Art::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;

        // return $data;

        $status=Art::create($data);
        if($status){
            request()->session()->flash('success','Post Successfully added');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('art.index');
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
        $arts=Art::findOrFail($id);
        $artcategory=Aroncategory::where('is_parent',1)->get();
        return view('backend.art.edit')->with('arts',$arts)->with('artcategories',$artcategory);
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
        $arts=Art::findOrFail($id);
         // return $request->all();
         $this->validate($request,[
           
            'photo'=>'string|nullable',
            'title'=>'string|required',
            'description'=>'string|nullable',
            'size'=>'string|nullable',
            'artcat_id'=>'nullable|exists:artcategories,id',
            'child_artcat_id'=>'nullable|exists:artcategories,id',   
            'publish_date' => 'string|nullable',
            'status'=>'required|in:active,inactive'
        ]);

        $data=$request->all();
        $data['is_parent']=$request->input('is_parent',0);
        // return $data;

        $status=$arts->fill($data)->save();
        if($status){
            request()->session()->flash('success','art Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('art.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $art=Art::findOrFail($id);
        $status=$art->delete();
        
        if($status){
            request()->session()->flash('success','Art successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting product');
        }
        return redirect()->route('art.index');
    }
    public function showArtDetails($artcategory_id, $art_id)
{
    $artcategory = Artcategory::find($artcategory_id);
    $art = Art::find($art_id);
    $logos= Logo::all();
    $banners= Banner::all();
    $settings= Settings::all();
    return view('frontend.pages.artdetail', compact('artcategory', 'art', 'logos','banners','settings'));
}

}

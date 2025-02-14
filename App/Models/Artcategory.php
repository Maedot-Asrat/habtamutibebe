<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Art;
class Artcategory extends Model
{


    protected $fillable=['title','slug','status', 'summary','thumbnail','is_parent','parent_id','class'];

    public function art(){
        return $this->hasMany('App\Models\Art','art_cat_id','id')->where('status','active');
    }

    public static function getArtByCategory($slug){
        return Artcategory::with('art')->where('slug',$slug)->first();
    }
}

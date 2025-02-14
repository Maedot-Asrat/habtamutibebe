<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
class Blogcategory extends Model
{


    protected $fillable=['title','slug','status', 'summary','thumbnail','is_parent','parent_id','class'];

    public function blog(){
        return $this->hasMany('App\Models\Blog','blog_cat_id','id')->where('status','active');
    }

    public static function getBlogByCategory($slug){
        return Blogcategory::with('blog')->where('slug',$slug)->first();
    }
}

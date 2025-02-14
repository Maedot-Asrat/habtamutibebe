<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{

     protected $table="service";

     protected $fillable=['class','title','slug','summary','photo','status','is_parent','cat_id','child_cat_id'];

     public function cat_info(){
        return $this->hasOne('App\Models\Category','id','cat_id');
    }
    public function sub_cat_info(){
        return $this->hasOne('App\Models\Category','id','child_cat_id');
    }
    public static function getAllService(){
        return Services::with(['cat_info','sub_cat_info'])->orderBy('id','desc')->paginate(10);
    }
    public function rel_servs(){
        return $this->hasMany('App\Models\Service','cat_id','cat_id')->where('status','active')->orderBy('id','DESC')->limit(8);
    }
    public function getReview(){
        return $this->hasMany('App\Models\ProductReview','product_id','id')->with('user_info')->where('status','active')->orderBy('id','DESC');
    }
    public static function getServiceBySlug($slug){
        return Services::with(['cat_info','rel_servs','getReview'])->where('slug',$slug)->first();
    }
    public static function countActiveService(){
        $data=Services::where('status','active')->count();
        if($data){
            return $data;
        }
        return 0;
    }


}

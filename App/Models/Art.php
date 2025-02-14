<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Art extends Model
{
    protected $table = 'arts';
    protected $fillable=['photo','title','slug','publish_date','description','size','artcat_id','child_artcat_id','status'];


    public function artcat_info(){
        return $this->hasOne('App\Models\Artcategory','id','artcat_id');
    }

    public function sub_artcat_info(){
        return $this->hasOne('App\Models\Artcategory','id','child_artcat_id');
    }
    public static function getAllArt(){
        return Art::with(['artcat_info'])->orderBy('id','DESC')->paginate(10);
    }


    public static function countActiveArt(){
        $data=Art::where('status','active')->count();
        if($data){
            return $data;
        }
        return 0;
    }
}

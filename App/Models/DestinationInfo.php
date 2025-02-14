<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinationInfo extends Model
{

     protected $table="destination_infos";

     protected $fillable=['class','name','photo1','photo2','photo3','description','video1','video2','video3'];
   
     public static function getAllDestinationInfo(){
        return  DestinationInfo::orderBy('id','ASC')->paginate(10);
    }
}

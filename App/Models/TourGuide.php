<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourGuide extends Model
{

     protected $table="tour_guides";

     protected $fillable=['class','name','description','photo','location','phone','language'];
   
     public static function getAllTourGuide(){
        return  TourGuide::orderBy('id','ASC')->paginate(10);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

     protected $table="vehicles";

     protected $fillable=['class','brand','description','photo'];
   
     public static function getAllVehicle(){
        return  Vehicle::orderBy('id','ASC')->paginate(10);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{

     protected $table="destinations";

     protected $fillable=['name','photo','activity','video'];
   
     public static function getAllDestination(){
        return  Destinations::orderBy('id','ASC')->paginate(10);
    }
}

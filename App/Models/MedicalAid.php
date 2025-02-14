<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalAid extends Model
{

     protected $table="medical_aids";

     protected $fillable=['class','partner','photo','description','phone'];
   
     public static function getAllMedicalAid(){
        return  MedicalAid::orderBy('id','ASC')->paginate(10);
    }
}

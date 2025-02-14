<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone','full_name','package_id','child_package_id','package_name'
    ];
    public function package_info(){
        return $this->hasOne('App\Models\Packages','id','package_id');
    }
    public function sub_package_info(){
        return $this->hasOne('App\Models\Packages','id','child_package_id');
    }
    public static function getAllBooking(){
        return Services::with(['package_info','sub_package_info'])->orderBy('id','desc')->paginate(10);
    }
  

}

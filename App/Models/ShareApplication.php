<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShareApplication extends Model
{
    protected $fillable = [
        'name_to_grandmother',
        'region',
        'city',
        'kebele',
        'house_number',
        'po_sa_number',
        'mobile_phone',
        'tax_id',
        'id_number',
        'number_of_shares',
        'total_price',
        'source_of_info',
        'buyer_signature',
        'subject',
        'read_at'
    ];
}

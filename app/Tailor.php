<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tailor extends Model
{
    protected $fillable = [
        'tailor_name', 'tailor_age', 'tailor_contact', 'tailor_desc', 'tailor_photo', 'tailor_address'
    ];

    public function product()
    {
        return $this->hasMany('App\Product', 'tailor_id', 'id');
    }

    public function order()
    {
        return $this->hasMany('App\Order', 'tailor_id', 'id');
    }
}
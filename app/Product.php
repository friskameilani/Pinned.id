<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function order()
    {
    return $this->hasMany('App\Order', 'product_id', 'id');
    }

    public function tailor()
    {
    return $this->belongsTo('App\Tailor', 'tailor_id', 'id');
    }
}

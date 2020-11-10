<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function order_detail()
    {
    return $this->hasMany('App\OrderDetail', 'product_id', 'id');
    }

    public function tailor()
    {
    return $this->belongsTo('App\Tailor', 'tailor_id', 'id');
    }
}

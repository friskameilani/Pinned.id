<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'tailor_id', 'product_name', 'product_price', 'product_size', 
        'product_image', 'product_category', 'product_type', 'product_material'
    ];
    
    public function order()
    {
    return $this->hasMany('App\Order', 'product_id', 'id');
    }

    public function tailor()
    {
    return $this->belongsTo('App\Tailor', 'tailor_id', 'id');
    }

    
}

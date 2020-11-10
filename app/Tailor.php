<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tailor extends Model
{
    public function product()
    {
        return $this->hasMany('App\Product', 'tailor_id', 'id');
    }
}

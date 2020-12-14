<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    protected $fillable = [
        'ask', 'answer'
    ];
}

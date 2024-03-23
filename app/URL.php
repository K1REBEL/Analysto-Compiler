<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class URL extends Model
{
    protected $table = 'links';


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

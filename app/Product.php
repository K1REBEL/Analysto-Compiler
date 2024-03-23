<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function tracked_at()
    {
        return $this->hasMany(Track::class);
    }

    public function links()
    {
        return $this->hasMany(URL::class , 'prod_id');
    }
}

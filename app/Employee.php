<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function tracking()
    {
        return $this->hasMany(Track::class);
    }
}

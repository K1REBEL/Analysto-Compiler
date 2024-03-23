<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    protected $table = 'tracking';
    public function tracked_by()
    {
        return $this->belongsTo(Employee::class);
    }

    public function tracking()
    {
        return $this->belongsTo(Product::class);
    }

    public function tracks()
    {
        return $this->belongsTo(URL::class);
    }
}

<?php

namespace App;

use App\Driver;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function drivers()
    {
        return $this->hasMany(Driver::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}

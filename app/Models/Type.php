<?php

namespace App\Models;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public function drivers()
    {
        return $this->hasMany(Driver::class)->approved();
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}

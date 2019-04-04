<?php

namespace App;

use App\Type;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}

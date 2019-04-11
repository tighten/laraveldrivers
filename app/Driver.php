<?php

namespace App;

use App\Type;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['name', 'url', 'type_id', 'is_approved'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function scopeApproved($query)
    {
        $query->where('is_approved', true);
    }
}

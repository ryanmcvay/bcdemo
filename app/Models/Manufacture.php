<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Manufacture extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $casts = [
        'name' => 'string',
        'slug' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected function name(): Attribute
    {
        return Attribute::make(
            // set: fn ($value) => str($value)->title(),
        );
    }

    protected function slug(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => str($value)->slug(),
        );
    }


}

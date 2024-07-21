<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Developer extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'logo_url',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}

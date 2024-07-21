<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Appointment extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'property_id',
        'name',
        'email',
        'phone',
        'appointment_date',
        'status',
        'notes',
        'source',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}

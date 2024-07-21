<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Property extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'developer_id',
        'name',
        'location',
        'photo_url',
        'bedrooms',
        'bathrooms',
        'land_area',
        'building_area',
        'electricity',
        'water',
        'garage',
        'certificate',
        'material_building',
        'material_floor',
        'dining_room',
        'living_room',
        'facilities',
        'nearby_locations',
        'video_url',
        'whatsapp_message',
    ];

    protected $casts = [
        'facilities' => 'json',
        'nearby_locations' => 'json',
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}

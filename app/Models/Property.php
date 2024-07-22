<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'properties';
    protected $primaryKey = 'property_id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'property_id',
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
        'created_by',
        'updated_by',
        'deleted_by',
        'status'
    ];

    protected $casts = [
        'facilities' => 'json',
        'nearby_locations' => 'json',
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class, 'developer_id', 'developer_id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'property_id', 'property_id');
    }
}

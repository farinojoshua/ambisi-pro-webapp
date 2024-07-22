<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'appointments';
    protected $primaryKey = 'appointment_id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'property_id',
        'name',
        'email',
        'phone',
        'appointment_date',
        'status',
        'notes',
        'source',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}

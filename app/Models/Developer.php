<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Developer extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'developers';
    protected $primaryKey = 'developer_id';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'developer_id',
        'name',
        'logo_url',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    public function properties()
    {
        return $this->hasMany(Property::class, 'developer_id', 'developer_id');
    }
}

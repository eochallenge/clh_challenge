<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $table="patients";
    protected $fillable = [
        'first_name',
        'last_name'
    ];

    /**
     * 1 Patient can have many blood pressure readings
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bloodPressure()
    {
        return $this->hasMany(BloodPressure::class);
    }
}

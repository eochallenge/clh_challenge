<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BloodPressure extends Model
{
    use HasFactory, SoftDeletes;

    protected $table="blood_pressures";
    protected $fillable = [
        'patient_id',
        'SBP',
        'DBP'
    ];

    /**
     * Blood Pressure Readings belong to 1 Patient
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
}

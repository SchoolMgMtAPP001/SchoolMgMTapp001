<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehical extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['ownername','registrationno','chassisno','engineno','fueltype','makermodel', 'school_id'];

    /**
     * Get the feeCategory that owns the Fee.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

     public function school(): BelongsTo
     {
         return $this->belongsTo(School::class);
     }
}

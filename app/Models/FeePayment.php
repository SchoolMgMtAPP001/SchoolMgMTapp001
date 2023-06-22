<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FeePayment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['fee_category_id','amount'];

    /**
     * Get the feeCategory that owns the Fee.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function feeCategory(): BelongsTo
    {
        return $this->belongsTo(FeeCategory::class);
    }

    public function school()
    {
        return $this->feeCategory->school();
    }
}

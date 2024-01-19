<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Surgery extends Model
{
    use HasFactory;

    public function beneficiary():BelongsTo
    {
        return $this->belongsTo(Beneficiary::class,'beneficiary_id','beneficiary_id');
    }
}

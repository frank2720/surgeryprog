<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Surgery extends Model
{
    use HasFactory;

    protected $fillable = [
        'beneficiary_id',
        'surgeon_name',
        'procedure_name',
        'outcome',
        'notes',
        'procedure_details',
        'pre_op_instructions',
    ];

    public function beneficiary():BelongsTo
    {
        return $this->belongsTo(Beneficiary::class,'beneficiary_id','beneficiary_id');
    }
}

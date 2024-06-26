<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Beneficiary extends Model
{
    use HasFactory;
    
    protected static function boot()
    {
        parent::boot();

        // Set beneficiary_id before creating the record
        static::creating(function ($model) {
            $model->beneficiary_id = 'SurgeryProg#' . hexdec(uniqid());
        });
    }

    protected $fillable = [

        'firstname',
        'lastname',
        'gender',
        'age',
        'contact',
        'history',

    ];

    public function surgeries():HasMany
    {
        return $this->hasMany(Surgery::class);
    }
}

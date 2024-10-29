<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OvqatMasalliq extends Model
{
    /** @use HasFactory<\Database\Factories\OvqatMasalliqFactory> */
    use HasFactory;

    protected $fillable = [
        'ovqat_id',
        'masalliq_id',
    ];
}
